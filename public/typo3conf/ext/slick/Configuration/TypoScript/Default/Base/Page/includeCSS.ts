page {
  includeCSS {
    slickLibrary  = {$plugin.slick.carousel.css.file.library}
    slickTheme    = {$plugin.slick.carousel.css.file.theme}
    slickTheme {
        // constant editor
      if =
      if {
        isTrue = {$plugin.slick.carousel.css.file.theme.if}
      }
    }
  }
}