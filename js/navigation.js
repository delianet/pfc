//nav//

//module dropdown

(function() {

  var dropdown = {
    init: function(){
      this.cacheDom();
      this.bindEvents();
      this.render();
    },
    cacheDom: function(){
      this.$top =  $('.sub-menu:first').parent();
      this.$sub = $('.sub-menu:first');
    },
    bindEvents: function(){
      this.$top.on('mouseenter', this.dropDown.bind(this));
      this.$top.on('mouseleave', this.slideUp.bind(this));
    },
    render: function(){

    },
    dropDown: function(){
      this.$sub.stop().slideDown(100); 
      this.render();
    },
    slideUp: function(){
      this.$sub.stop().slideUp(100);
      this.render();
    }
  
  };

  dropdown.init();

})();

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

        },
        bindEvents: function () {
            this.$hamburger.click(this.hSlide.bind(this));
            this.$cross.click(this.cSlide.bind(this));
            this.$win.resize(this.resize.bind(this));
        },
        render: function () {
            this.$cross.hide();
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

