(function(n){n(document).ready(function(a){a(".time-countdown").length&&a(".time-countdown").each(function(){var e=a(this),s=a(this).data("countdown");e.countdown(s,function(t){a(this).html(t.strftime('<div class="counter-column"><div class="inner"><span class="count">%D</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">%H</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">%M</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">%S</span>Secs</div></div>'))})}),a(".product-filters li").on("click",function(){a(".product-filters li").removeClass("active"),a(this).addClass("active");var e=a(this).attr("data-filter");a(".product-lists").isotope({filter:e})}),a(".homepage-slider").on("translate.owl.carousel",function(){a(".hero-text-tablecell .subtitle").removeClass("animated fadeInUp").css({opacity:"0"}),a(".hero-text-tablecell h1").removeClass("animated fadeInUp").css({opacity:"0","animation-delay":"0.3s"}),a(".hero-btns").removeClass("animated fadeInUp").css({opacity:"0","animation-delay":"0.5s"})}),a(".homepage-slider").on("translated.owl.carousel",function(){a(".hero-text-tablecell .subtitle").addClass("animated fadeInUp").css({opacity:"0"}),a(".hero-text-tablecell h1").addClass("animated fadeInUp").css({opacity:"0","animation-delay":"0.3s"}),a(".hero-btns").addClass("animated fadeInUp").css({opacity:"0","animation-delay":"0.5s"})}),a("#sticker").sticky({topSpacing:0}),a(".main-menu").meanmenu({meanMenuContainer:".mobile-menu",meanScreenWidth:"992"}),a(".search-bar-icon").on("click",function(){a(".search-area").addClass("search-active")}),a(".close-btn").on("click",function(){a(".search-area").removeClass("search-active")})}),jQuery(window).on("load",function(){jQuery(".loader").fadeOut(1e3)})})(jQuery);
