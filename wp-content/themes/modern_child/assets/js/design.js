(function ($) {
    $(window).on("load", function () {
        var masonryGrid = $(".grid");
        masonryGrid.imagesLoaded(function () {
            masonryGrid.masonry({
                itemSelector: ".grid-item",
                percentPosition: true
            });
        });
    });
})(jQuery);