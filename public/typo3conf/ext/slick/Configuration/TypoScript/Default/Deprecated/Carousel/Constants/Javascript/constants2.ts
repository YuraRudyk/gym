plugin.slick {
  carousel {
	  2 {
			javascript {
					# cat=Slick - Carousel - 2 - Javascript File//300; type=string; label=file:slick javascript library
				file = EXT:slick/Resources/Public/JavaScript/slick-1.8.0/slick/slick.js
				properties {
						# cat=Slick - Carousel - 2 - Javascript Properties//301; type=options[true,false]; label=adaptiveHeight:Enables adaptive height for single slide horizontal carousels.
					adaptiveHeight  = false
						# cat=Slick - Carousel - 2 - Javascript Properties//302; type=options[true,false]; label=arrows:Show prev/next Arrows
					arrows          = true
						# cat=Slick - Carousel - 2 - Javascript Properties//303; type=options[true,false]; label=autoplay:Enables Autoplay
					autoplay        = true
						# cat=Slick - Carousel - 2 - Javascript Properties//304; type=+int; label=autoplay speed:time in milliseconds upto the next slide
					autoplaySpeed   = 3000
						# cat=Slick - Carousel - 2 - Javascript Properties//305; type=options[linear,ease,ease-in,ease-out,ease-in-out]; label=css ease:CSS3 Animation Easing. Has an effect only, if fade is true (see below).
					cssEase         = ease
						# cat=Slick - Carousel - 2 - Javascript Properties//306; type=options[true,false]; label=dots:Show dot indicators
					dots            = true
						# cat=Slick - Carousel - 2 - Javascript Properties//307; type=options[true,false]; label=fade:Fade your slick items. If it is enabled, slidesToShow and slidesToScroll should be 1 only (see both below).
					fade            = false
						# cat=Slick - Carousel - 2 - Javascript Properties//308; type=options[true,false]; label=infinite:Infinite loop sliding
					infinite        = true
						# cat=Slick - Carousel - 2 - Javascript Properties//309; type=+int; label=initial slide:0 is the first slide.
					initialSlide    = 0
						# cat=Slick - Carousel - 2 - Javascript Properties//310; type=options[true,false]; label=pauseOnHover:Pause Autoplay On Hover
					pauseOnHover    = true
						# cat=Slick - Carousel - 2 - Javascript Properties//311; type=+int; label=rows:Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.
					rows            = 1
						# cat=Slick - Carousel - 2 - Javascript Properties//312; type=+int; label=slidesPerRow:With grid mode intialized via the rows option, this sets how many slides are in each grid row.
					slidesPerRow    = 1
						# cat=Slick - Carousel - 2 - Javascript Properties//313; type=+int; label=slides to show:# of slides to show
					slidesToShow    = 1
						# cat=Slick - Carousel - 2 - Javascript Properties//314; type=+int; label=slides to scroll:# of slides to scroll
					slidesToScroll  = 1
						# cat=Slick - Carousel - 2 - Javascript Properties//315; type=+int; label=speed:Slide/Fade animation speed in milliseconds
					speed           = 3000
						# cat=Slick - Carousel - 2 - Javascript Properties//316; type=options[true,false]; label=vertical:Vertical slide mode
					vertical        = false
				}
				responsive {
						# cat=Slick - Carousel - 2 - Javascript Responsive//320; type=boolean;  label=enabled:Enable responsive configuration
					if       = 0
					large {
							# cat=Slick - Carousel - 2 - Javascript Responsive//330; type=+int;     label=large breakpoint:Breakpoint for large displays
						breakpoint = 1024
							# cat=Slick - Carousel - 2 - Javascript Responsive//331; type=+int;     label=large autoplay speed:time in milliseconds upto the next slide for large displays
						settings.autoplaySpeed  = 3000
							# cat=Slick - Carousel - 2 - Javascript Responsive//332; type=+int;     label=large slides to show:Slides to show for large displays
						settings.slidesToShow   = 3
							# cat=Slick - Carousel - 2 - Javascript Responsive//333; type=+int;     label=large slides to scroll:Slides to scroll for large displays
						settings.slidesToScroll = 3
					}
					medium {
							# cat=Slick - Carousel - 2 - Javascript Responsive//340; type=+int;     label=medium breakpoint:Breakpoint for medium displays
						breakpoint = 600
							# cat=Slick - Carousel - 2 - Javascript Responsive//341; type=+int;     label=medium autoplay speed:time in milliseconds upto the next slide for medium displays
						settings.autoplaySpeed  = 3000
							# cat=Slick - Carousel - 2 - Javascript Responsive//342; type=+int;     label=medium slides to show:Slides to show for medium displays
						settings.slidesToShow   = 2
							# cat=Slick - Carousel - 2 - Javascript Responsive//343; type=+int;     label=medium slides to scroll:Slides to scroll for medium displays
						settings.slidesToScroll = 2
					}
					small {
							# cat=Slick - Carousel - 2 - Javascript Responsive//350; type=+int;     label=small breakpoint:Breakpoint for small displays
						breakpoint = 480
							# cat=Slick - Carousel - 2 - Javascript Responsive//351; type=+int;     label=small autoplay speed:time in milliseconds upto the next slide for small displays
						settings.autoplaySpeed  = 3000
							# cat=Slick - Carousel - 2 - Javascript Responsive//352; type=+int;     label=small slides to show:Slides to show for small displays
						settings.slidesToShow   = 1
							# cat=Slick - Carousel - 2 - Javascript Responsive//353; type=+int;     label=small slides to scroll:Slides to scroll for small displays
						settings.slidesToScroll = 1
					}
				}
			}
		}
	}
}