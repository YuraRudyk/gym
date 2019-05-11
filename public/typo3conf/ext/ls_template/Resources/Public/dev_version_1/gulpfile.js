var gulp = require('gulp'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	rigger = require('gulp-rigger'),
	newer = require('gulp-newer'),
	browserSync = require("browser-sync"),
	autoprefixer = require('gulp-autoprefixer'),
	reload = browserSync.reload;

var path = {
	src: {
		html: 'app/**/*.html',
		inc:  'app/inc/**/*.html',
		js:   'app/js/**/*.js',
		style: {
			sass:	'app/scss/**/*.{scss,sass}'
		},
		img:   'app/images/**/*.*',
		fonts: 'app/fonts/**/*.*'
	},
	build: {
		html:  '../markup/',
		js:    '../markup/js/',
		css:   '../markup/css/',
		img:   '../markup/images/',
		fonts: '../markup/fonts/'
	}
};

var config = {
	server: {
		baseDir: "../markup"
	},
	// tunnel: true,
	injectChanges: true,
	host: 'localhost',
	port: 9000,
	// open: true,
	logPrefix: "dev-markup",
	autoprefixerOptions: {
		browsers: ['last 2 versions'],
		cascade: true
	}
};

gulp.task('webserver', function () {
	browserSync(config);

	gulp.watch([path.src.html, path.src.inc]).on('change', reload);
});

gulp.task('watch', ['build-sass', 'webserver'], function() {
	gulp.watch(path.src.style.sass, ['sass:build']);
	gulp.watch([path.src.html, path.src.inc], ['html:build']);
	gulp.watch([path.src.js], ['js:build']);
	gulp.watch([path.src.img], ['image:build']);
	gulp.watch([path.src.fonts], ['fonts:build']);
});

function swallowError(error) {
	console.log(error.toString());
	this.emit('end');
}

gulp.task('sass:build', function(){
	return gulp.src(path.src.style.sass)
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(autoprefixer(config.autoprefixerOptions))
		.on('error', swallowError)
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(path.build.css))
		.pipe(reload({stream: true}));
});

gulp.task('html:build', function() {
	return gulp.src([path.src.html, '!'+path.src.inc]) /* except src.inc !!!!!!!!!!!!!! */
		.pipe(rigger())
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream: true}));
});

gulp.task('js:build', function() {
	return gulp.src(path.src.js)
		.pipe(gulp.dest(path.build.js))
		.pipe(reload({stream: true}));
});

gulp.task('image:build', function () {
	return gulp.src(path.src.img)
		.pipe(newer(path.build.img))
		.pipe(gulp.dest(path.build.img))
		.pipe(reload({stream: true}));
});

gulp.task('fonts:build', function() {
	return gulp.src(path.src.fonts/*, {read: false}*/)
		.pipe(gulp.dest(path.build.fonts))
		.pipe(reload({stream: true}));
});

gulp.task('build-sass', [
	'html:build',
	'js:build',
	'sass:build',
	'fonts:build',
	'image:build'
]);