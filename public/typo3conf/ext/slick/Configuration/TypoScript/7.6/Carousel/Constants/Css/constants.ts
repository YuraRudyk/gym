plugin.slick {
  carousel {
    css {
        # cat=Slick - Carousel CSS Class/100/101; type=string; label=class:CSS class of the slick carousel
      class = single-item
      colors {
          # cat=Slick - Carousel CSS Colors/110/101; type=color; label=Arrows:Color for the arrows
        arrows        = #000
          # cat=Slick - Carousel CSS Colors/110/102; type=color; label=Dots default:Default color for the dots
        dots.default  = #000
          # cat=Slick - Carousel CSS Colors/110/103; type=color; label=Dot active:Color for the active dot
        dots.active   = #000
      }
      file {
          # cat=Slick - Carousel CSS Files/120/101; type=string; label=CSS base:slick library CSS file
        library   = EXT:slick/Resources/Public/JavaScript/slick-1.8.0/slick/slick.css
          # cat=Slick - Carousel CSS Files/120/102; type=string; label=CSS default theme:slick default theme CSS file
        theme     = EXT:slick/Resources/Public/JavaScript/slick-1.8.0/slick/slick-theme.css
          # cat=Slick - Carousel CSS Files/120/103; type=boolean; label=Include CSS default theme:Recommended:Use the slick css default theme
        theme.if  = 1
          # cat=Slick - Carousel CSS Files/120/109; type=string; label=extension:extension CSS file
        extension = EXT:slick/Resources/Public/CSS/extension.css
      }
      header {
          # cat=Slick - Carousel CSS Header/130/104;  type=string;  label=Background color:Background color of the font. If you like opacity, please use a rgba format like "rgba(0,0,0,0.5)".
        background-color  = rgba(0,0,0,0.5)
          # cat=Slick - Carousel CSS Header/130/105;  type=string;  label=Bottom:Offset from bottom in pixel or em. Please enter "inherit", if you prefer an offset from the top.
        bottom            = inherit
          # cat=Slick - Carousel CSS Header/130/106;  type=string;  label=Font Color:Color of the font. If you like opacity, please use a rgba format like "rgba(0,0,0,0.5)".
        color             = #FFF
          # cat=Slick - Carousel CSS Header/130/107;  type=string;  label=Font size:Size of the font in pixel or em.
        font-size         = 2em
          # cat=Slick - Carousel CSS Header/130/108;  type=string;  label=Font weight:Weight of the font.
        font-weight       = bold
          # cat=Slick - Carousel CSS Header/130/109;  type=string;  label=Top:Offset from top in pixel or em. Please enter "inherit", if you prefer an offset from the bottom.
        top               = 1em
      }
      margins {
          # cat=Slick - Carousel CSS Margins/140/101; type=string; label=Content:Offset for the content from the left in pixel or em
        content.left = 20px
          # cat=Slick - Carousel CSS Margins/140/102; type=string; label=Item:Margin of an item. Arrows outside the item: 0. Arrows inside the item: 0 25px 0 25px.
        item  = 0
      }
      position {
          # cat=Slick - Carousel CSS Position/150/101; type=string; label=Dots bottom:Offset from the bottom in pixel
        dots.bottom   = -45px
          # cat=Slick - Carousel CSS Position/150/102; type=string; label=Arrow next:Offset from right in pixel
        next.right    = -25px
          # cat=Slick - Carousel CSS Position/150/103; type=string; label=Arrow previous:Offset from left in pixel
        prev.left     = -25px
      }
      text {
          # cat=Slick - Carousel CSS Text/160/104;  type=string;  label=Background color:Background color of the font. If you like opacity, please use a rgba format like "rgba(0,0,0,0.5)".
        background-color  = rgba(0,0,0,0.5)
          # cat=Slick - Carousel CSS Text/160/105;  type=string;  label=Bottom:Offset from bottom in pixel or em. Please enter "inherit", if you prefer an offset from the top.
        bottom            = inherit
          # cat=Slick - Carousel CSS Text/160/106;  type=string;  label=Font Color:Color of the font. If you like opacity, please use a rgba format like "rgba(0,0,0,0.5)".
        color             = #FFF
          # cat=Slick - Carousel CSS Text/160/107;  type=string;  label=Font size:Size of the font in pixel or em.
        font-size         = 1.4em
          # cat=Slick - Carousel CSS Text/160/108;  type=string;  label=Font weight:Weight of the font.
        font-weight       = bold
          # cat=Slick - Carousel CSS Text/160/109;  type=string;  label=Top:Offset from top in pixel or em. Please enter "inherit", if you prefer an offset from the bottom.
        top               = 7em
      }
    }
  }
}