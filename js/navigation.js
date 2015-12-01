//nav//

$top = $('.sub-menu').parent();
$sub = $('.sub-menu');

$top.on('mouseenter', function(){
    $(this).find($sub).stop().slideDown(100);    
});

$top.on('mouseleave', function(){
    $(this).find($sub).stop().slideUp(100);    
});

//module hamburger toggle

(function () {

    var hToggle = {
        init: function () {
            this.cacheDom();
            this.bindEvents();
            this.render();
        },
        cacheDom: function () {
            this.$nav = $("#main-nav");
            this.$hamburger = $(".hamburger");
            this.$cross = $(".cross");
            this.$break = 647;
            this.$win = $(window);

            this.$sub = $(".sub-menu");

        },
        bindEvents: function () {
            this.$hamburger.click(this.hSlide.bind(this));
            this.$cross.click(this.cSlide.bind(this));
            this.$win.resize(this.resize.bind(this));
        },
        render: function () {
            this.$cross.hide();
            this.$sub.hide();
        },
        hSlide: function () {
            this.$nav.slideToggle(400, this.hOpen.bind(this));
        },
        hOpen: function () {
            this.$hamburger.hide();
            this.$cross.show();
        },
        cSlide: function () {
            this.$nav.slideToggle(400, this.cClose.bind(this));
        },
        cClose: function () {
            this.$cross.hide();
            this.$hamburger.show();
        },
        resize: function () {
            if ($(window).width() < this.$break) {
                this.$hamburger.show();
                this.$nav.hide();
            } else {
                this.$nav.show();
                this.$hamburger.hide();
                this.$cross.hide();
            }
        }

    };

    hToggle.init();

})();

