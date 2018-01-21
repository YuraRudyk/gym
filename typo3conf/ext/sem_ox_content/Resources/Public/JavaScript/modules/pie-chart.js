
$(document).ready(function () {
// avoid loading libraries and csv file if page doesnt have pie-chart
    (function () {
        if ($('.pie-chart-section').length === 0) return;

        var chartIdArray = [];
        var prevDuration = 0;
        // Define the margin, radius, sourcefile with pie chart data
        var m       = 10;
        var r       = 135;
        var dataUrl = $('.chart-wrapper').data('csv-url');

        // Define a pie layout: the pie angle encodes the count of flights. Since our
        // data is stored in CSV, the counts are strings which we coerce to numbers.
        var pie = d3.layout.pie()
            .value(function (d) { return +d.percent; })
            .sort(null);

        // Define an arc generator. Note the radius is specified here, not the layout.
        var arc = d3.arc()
            .innerRadius(r / 1.1) // make 10 pixels wide donut
            .outerRadius(r);

        // Load the flight data asynchronously.
        d3.csv( dataUrl, function (error, pieChart) {
            if (error) return;

            // Nest the flight data by originating airport. Our data has the counts per
            // airport and carrier, but we want to group counts by aiport.
            var chartNames = d3.nest()
                .key(function (d) { return d.chartName; })
                .entries(pieChart);

            // create div, svg and add properties to them
            var svg = d3.select('.chart-wrapper').selectAll('div')
                .data(chartNames)
                .enter().append('div')
                .style('display', 'inline-block')
                .style('width', (r + m) * 2 + 'px')
                .style('height', (r + m) * 2 + 'px')
                .style('position', 'relative')
                .attr('id', function (d) {
                    var id = d.key.split(' ').join('_');
                    chartIdArray.push(id);
                    return id;
                })
                .html(function (d, i) {
                    var temp = [];
                    if (d.values[0].percent || d.values[0].label) {
                        d.values.forEach(function (e, j) {
                            var animationDuration = e.percent * 10; // multiply by 10 because circle animation takes 1000 miliseconds
                            temp.push('<li style=" transition-delay:' + prevDuration + 'ms; transition-duration:' + animationDuration + 'ms;"><span style = "color:' + e.color + '">' + e.percent + '% </span>' + e.label + '</li>');
                            prevDuration += animationDuration;

                            if (j === 0 && i !== 0) {
                                prevDuration -= 250; // start animation 250 miliseconds sooner for first and second charts
                            }
                        });
                    }
                    return '<div class ="legend-wrapper"><p>' + d.key + '</p><ul>' + temp.join('') + '</ul></div>';
                })
                .append('svg')
                .attr('width', (r + m) * 2)
                .attr('height', (r + m) * 2)
                .attr('id', function (d, i) {
                    return 'svgCircle' + i;
                })
                .append('g')
                .attr('transform', 'translate(' + (r + m) + ',' + (r + m) + ')');

            var g = svg.selectAll('g')
                .data(function (d) {
                    return pie(d.values);
                })
                .enter().append('g');
            g.append('path')
                .attr('d', arc)
                .style('fill', function (d) { return d.data.color; });

            // add $graphite-black circle to hide pie-chart
            svg.append('circle')
                .attr('r', '129')
                .attr('fill', 'none')
                .attr('stroke', '#2d2d2d')
                .attr('stroke-width', '26')
                .attr('stroke-dasharray', '848')
                .attr('stroke-dashoffset', '1696')
                .style('transition-delay', function (d, i) {
                    return (i * 0.75) + 's';
                });

            // add thin grey circle
            svg.append('circle')
                .attr('r', '129')
                .attr('fill', 'none')
                .attr('stroke', '#878787')
                .attr('stroke-width', '2')
                .attr('stroke-dasharray', '848')
                .attr('stroke-dashoffset', '1696')
                .style('transition-delay', function (d, i) {
                    return (i * 0.75) + 's';
                });
        });

        var animationFinished = false;

        if (!animationFinished) {
            $(window).scroll(function () {
                if (!window.ALL_SLIDERS_FIRED) return;
                var docViewTop = window.pageYOffset + window.innerHeight;

                chartIdArray.forEach(function (e) {
                    var winWidth = $(window).width();
                    var currentElement = $('#' + e);
                    var elemTop = currentElement.offset().top;
                    var transitionDuration = 0;

                    if (docViewTop >= (elemTop + 150)) {
                        if (winWidth < 768) {
                            currentElement.find('circle').css('transition-delay', '0s');
                            // select center-text li elements
                            var centerText = document.querySelectorAll('#' + e + ' li');
                            // reset transition-delay of center-text for mobile
                            centerText.forEach(function (el, i) {
                                if (i === 0) {
                                    // set transition-delay of first element
                                    el.style.transitionDelay = '0ms';
                                    // save transition-duration of current element
                                    transitionDuration += parseInt(el.style.transitionDuration.match(/\d/g).join(''), 10);
                                } else {
                                    // set transition-delay of current element
                                    el.style.transitionDelay = transitionDuration + 'ms';
                                    // save transition-duration of current element
                                    transitionDuration += parseInt(el.style.transitionDuration.match(/\d/g).join(''), 10);
                                }
                            });
                        }
                        currentElement.addClass('animated');
                    }
                });

                animationFinished = true;
            });
        }
    })();
});
