(function (jQuery) {

    // Variable
    var $ = jQuery;
    $.fn.ripple = function () {
        $(this).click(function (e) {
            var rippler = $(this),
                ink = rippler.find(".ink");

            if (rippler.find(".ink").length === 0) {
                rippler.append("<span class='ink'></span>");
            }


            ink.removeClass("animate");
            if (!ink.height() && !ink.width()) {
                var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
                ink.css({
                    height: d,
                    width: d
                });
            }

            var x = e.pageX - rippler.offset().left - ink.width()/2;
            var y = e.pageY - rippler.offset().top - ink.height()/2;
            ink.css({
              top: y+'px',
              left:x+'px'
            }).addClass("animate");
        });
    };

    $.fn.carouselAnimate = function()
    {
        function doAnimations(elems)
        {
          var animEndEv = 'webkitAnimationEnd animationend';

          elems.each(function () {
            var $this = $(this),
            $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
              $this.removeClass($animationType);
            });
          });
        }

        var $myCarousel          = this;
        var $firstAnimatingElems = $myCarousel.find('.item:first')
                                              .find('[data-animation ^= "animated"]');

        doAnimations($firstAnimatingElems);
        $myCarousel.carousel('pause');
        $myCarousel.on('slide.bs.carousel', function (e) {
          var $animatingElems = $(e.relatedTarget)
          .find("[data-animation ^= 'animated']");
          doAnimations($animatingElems);
        });
    };
    
    if( $.fn.dataTable != undefined) {
        $.fn.dataTable.ext.errMode = 'none';
    }

    this.hide = function()
    {
        $(".tree").hide();
        $(".sub-tree").hide();
    };
    
    this.showActiveLeftTreeMenu = function()
    {
    	$("#left-menu li.ripple.active .tree-toggle").click();
    };


    this.treeMenu = function()
    {

        $('.tree-toggle').click(function(e){
            e.preventDefault();
            var $this = $(this).parent().children('ul.tree');
            $(".tree").not($this).slideUp(600);
            $this.toggle(700);

            $(".tree").not($this).parent("li").find(".tree-toggle .right-arrow").removeClass("fa-angle-down").addClass("fa-angle-right");
            $this.parent("li").find(".tree-toggle .right-arrow").toggleClass("fa-angle-right fa-angle-down");
        });

        $('.sub-tree-toggle').click(function(e) {
            e.preventDefault();
            var $this = $(this).parent().children('ul.sub-tree');
            $(".sub-tree").not($this).slideUp(600);
            $this.toggle(700);

            $(".sub-tree").not($this).parent("li").find(".sub-tree-toggle .right-arrow").removeClass("fa-angle-down").addClass("fa-angle-right");
            $this.parent("li").find(".sub-tree-toggle .right-arrow").toggleClass("fa-angle-right fa-angle-down");
        });
    };



    this.leftMenu =  function()
    {

         $('.opener-left-menu').on('click', function(){
            $(".line-chart").width("100%");
            $(".mejs-video").height("auto").width("100%");
            if($('#right-menu').is(":visible"))
            {
               $('#right-menu').animate({ 'width': '0px' }, 'slow', function(){
                      $('#right-menu').hide();
                  });
            }
            if( $('#left-menu .sub-left-menu').is(':visible') ) {
                $('#content').animate({ 'padding-left': '0px'}, 'slow');
                $('#left-menu .sub-left-menu').animate({ 'width': '0px' }, 'slow', function(){
                    $('.overlay').show();
                      $('.opener-left-menu').removeClass('is-open');
                      $('.opener-left-menu').addClass('is-closed');
                    $('#left-menu .sub-left-menu').hide();
                });

            }
            else {
                $('#left-menu .sub-left-menu').show();
                $('#left-menu .sub-left-menu').animate({ 'width': '230px' }, 'slow');
                $('#content').animate({ 'padding-left': '230px','padding-right':'0px'}, 'slow');
                $('.overlay').hide();
                      $('.opener-left-menu').removeClass('is-closed');
                      $('.opener-left-menu').addClass('is-open');
            }
        });
    };


    this.userList = function(){
    	
    	$("#right-menu").getNiceScroll().remove();

       $("#right-menu").niceScroll(".user",{
            touchbehavior:true,
            cursoropacitymax:0.6,
            cursorwidth:5,
            usetransition:true,
            hwacceleration:true,
            autohidemode:"hidden"
        });

    };
    
    this.fetchUserList = function(){
    	$("#right-menu-user .user .nav-list").load('/common/users/online', function(){
    		userList();
    	});
    }


    this.rightMenu =  function(){
    	
    	$("#right-menu-user .user .nav-list").on("click", "li", function(){
    		var windowID = "chatPopupWindow"+$(this).data('userid');
    		var userName = $(this).find("b").text();
    		addChatPopupWindow(windowID, userName);
    	});
    	
    	fetchUserList();
    	
            $('.opener-right-menu').on('click', function(){

            if($('#right-menu').is(':visible') ) {
                $('#right-menu').animate({ 'width': '0px' }, 'slow', function(){
                    $('#right-menu').hide();
                });
            }
            else {
                $('#right-menu').show();
                fetchUserList();
                $('#right-menu').animate({ 'width': '230px' }, 'slow');
            }
        });
            
        $(window).resize(function() {
        	$('#right-menu').height($(window).height() - 100);
        });
    };
    
    //this function can remove a array element.
    Array.remove = function(array, from, to) {
        var rest = array.slice((to || from) + 1 || array.length);
        array.length = from < 0 ? array.length + from : from;
        return array.push.apply(array, rest);
    };

    //this variable represents the total number of popups can be displayed according to the viewport width
    var totalChatPopupWindows = 0;
   
    //arrays of popups ids
    var chatPopupWindows = [];

    //this is used to close a popup
    this.closeChatPopup = function(id)
    {
        for(var iii = 0; iii < chatPopupWindows.length; iii++)
        {
            if(id == chatPopupWindows[iii])
            {
                Array.remove(chatPopupWindows, iii);
               
                $('#'+id).hide();
               
                calculateChatPopupWindows();
               
                return;
            }
        }  
    }

    //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
    this.displayChatPopupWindows = function()
    {
        var right = 230;
       
        var iii = 0;
        for(iii; iii < totalChatPopupWindows; iii++)
        {
            if(chatPopupWindows[iii] != undefined)
            {
                $('#'+chatPopupWindows[iii]).css('right', right + "px").show();
                right = right + 320;
            }
        }
       
        for(var jjj = iii; jjj < chatPopupWindows.length; jjj++)
        {
            $('#'+chatPopupWindows[jjj]).hide();
        }
    }
   
    //creates markup for a new popup. Adds the id to popups array.
    this.addChatPopupWindow = function(id, name)
    {
       
        for(var iii = 0; iii < chatPopupWindows.length; iii++)
        {  
            //already registered. Bring it to front.
            if(id == chatPopupWindows[iii])
            {
                Array.remove(chatPopupWindows, iii);
           
                chatPopupWindows.unshift(id);
               
                calculateChatPopupWindows();
               
                return;
            }
        }              
        var userID = id.replace('chatPopupWindow', '');
        var element = '<div class="chatbox" id="'+ id +'" data-userid="'+userID+'"><div class="panel panel-danger"><div class="panel-heading clearfix">';
        element += '<div class="panel-title text-white pull-left">'+ name + '</div>';
        element += '<span class="fa fa-times closechatbox pull-right text-white" style="cursor:pointer;"></span></div>';
        element += '<div class="panel-body">';
        element += '</div><div class="panel-footer"><input type="text" placeholder="Mesajınızı yazın ve göndermek için Enter\'a basın" maxlength="140" style="width:100%" /></div></div></div>';
        
        $("body").append(element);
        $('#'+id).find(".closechatbox").on('click', function(){ closeChatPopup(id) });
        $('#'+id).find("input").on('keyup', function(e){ 
        	if(e.keyCode == 13 && $(this).val().length > 0){
        		var messageWindow = $(this).parentsUntil("body").last();
        		sendMessage(messageWindow, messageWindow.data('userid'), $(this).val());
        		
        		$(this).val('');
        	} 
        });

        chatPopupWindows.unshift(id);
               
        calculateChatPopupWindows();
       
    }
   
    //calculate the total number of popups suitable and then populate the toatal_popups variable.
    this.calculateChatPopupWindows = function()
    {
        var width = window.innerWidth;
        if(width < 540)
        {
        	totalChatPopupWindows = 0;
        }
        else
        {
        	width = width - 320;
            //320 is width of a single popup box
            totalChatPopupWindows = parseInt(width/320);
        }
       
        displayChatPopupWindows();
       
    }
   
    //recalculate when window is loaded and also when window is resized.
    window.addEventListener("resize", calculateChatPopupWindows);
    window.addEventListener("load", calculateChatPopupWindows);



    $(".box-v6-content-bg").each(function(){
          $(this).attr("style","width:" + $(this).attr("data-progress") + ";");
    });

    $('.carousel-thumb').on('slid.bs.carousel', function () {
          if($(this).find($(".item")).is(".active"))
          {
              var Current  = $(this).find($(".item.active")).attr("data-slide");
              $(".carousel-thumb-img li img").removeClass("animated rubberBand");
              $(".carousel-thumb-img li").removeClass("active");

              $($(".carousel-thumb-img").children()[Current]).addClass("active");
              $($(".carousel-thumb-img li").children()[Current]).addClass("animated rubberBand");
          }
    });



    $(".carousel-thumb-img li").on("click",function(){
        $(".carousel-thumb-img li img").removeClass("animated rubberBand");
        $(".carousel-thumb-img li").removeClass("active");
        $(this).addClass("active");
    });

    $("#mimin-mobile-menu-opener").on("click",function(e){
        $("#mimin-mobile").toggleClass("reverse");
        var rippler = $("#mimin-mobile");
        if(!rippler.hasClass("reverse"))
        {
            if(rippler.find(".ink").length == 0) {
              rippler.append("<div class='ink'></div>");
            }
            var ink = rippler.find(".ink");
            ink.removeClass("animate");
            if(!ink.height() && !ink.width())
            {
                var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
                ink.css({height: d, width: d});

            }
            var x = e.pageX - rippler.offset().left - ink.width()/2;
            var y = e.pageY - rippler.offset().top - ink.height()/2;
            ink.css({
              top: y+'px',
              left:x+'px',
            }).addClass("animate");
                
            rippler.css({'z-index':9999});
            rippler.animate({
              backgroundColor: "#FF6656",
              width: '100%'
            }, 750 );

             $("#mimin-mobile .ink").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
              function(e){
                $(".sub-mimin-mobile-menu-list").show();
                $("#mimin-mobile-menu-opener span").removeClass("fa-bars").addClass("fa-close").css({"font-size":"2em"});
              });
        }else{
            
                if(rippler.find(".ink").length == 0) {
                  rippler.append("<div class='ink'></div>");
                }
                var ink = rippler.find(".ink");
                ink.removeClass("animate");
                if(!ink.height() && !ink.width())
                {
                    var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
                    ink.css({height: d, width: d});

                }
                var x = e.pageX - rippler.offset().left - ink.width()/2;
                var y = e.pageY - rippler.offset().top - ink.height()/2;
                ink.css({
                  top: y+'px',
                  left:x+'px',
                }).addClass("animate");
                rippler.animate({
                  backgroundColor: "transparent",
                  'z-index':'-1'
                }, 750 );

                $("#mimin-mobile .ink").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
                function(e){
                  $("#mimin-mobile-menu-opener span").removeClass("fa-close").addClass("fa-bars").css({"font-size":"1em"});
                  $(".sub-mimin-mobile-menu-list").hide();
                });
        }
    });



    $(".form-text").on("click",function(){
        $(this).before("<div class='ripple-form'></div>");
        $(".ripple-form").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
          function(e){
              // do something here
              $(this).remove();
           });
    });

    $('.mail-wrapper').find('.mail-left').css('height', $('.mail-wrapper').innerHeight());
    $("#left-menu ul li a").ripple();
    $(".ripple div").ripple();
    $("#carousel-example3").carouselAnimate();
    $("#left-menu .sub-left-menu").niceScroll();
     $(".sub-mimin-mobile-menu-list").niceScroll({
            touchbehavior:true,
            cursorcolor:"#FF00FF",
            cursoropacitymax:0.6,
            cursorwidth:24,
            usetransition:true,
            hwacceleration:true,
            autohidemode:"hidden"
        });

    $(".fileupload-v1-btn").on("click",function(){
      var wrapper = $(this).parent("span").parent("div");
      var path    = wrapper.find($(".fileupload-v1-path"));   
      $(".fileupload-v1-file").click();   
      $(".fileupload-v1-file").on("change",function(){
          path.attr("placeholder",$(this).val());
          console.log(wrapper);
          console.log(path);
      });
    });

    var datetime = null,
        date = null;

    var update = function () {
        date = moment(new Date())
        datetime.html(date.format('HH:mm'));
        datetime2.html(date.format('dddd, DD MMMM YYYY'));
    };

    $(document).ready(function(){
        datetime = $('.time h1');
        datetime2 = $('.time p');
        update();
        setInterval(update, 1000);
    });


    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
    $("body").popover({ 
    	container: 'body',
    	selector: '[data-toggle=popover]',
    	placement: 'auto'
    });
    
    leftMenu();
    rightMenu();
    treeMenu();
    hide();
    showActiveLeftTreeMenu();
})(jQuery);