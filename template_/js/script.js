$(function(){
         if($(window).width() < 1024)
{
             $(".dropdown").unbind();
             
             nav=$("#bs-example-navbar-collapse-1").html();
             
             var strVar="";
strVar += "<nav id=\"c-menu--slide-left\" class=\"c-menu navbar navbar-default c-menu--slide-left\">";
strVar += "  <button class=\"c-menu__close panel-heading\"><span class=\"glyphicon glyphicon-arrow-left\"><\/span> Ẩn menu <\/button>";
strVar += nav;
strVar += "<\/nav>";

             $('body').append(strVar);
             
             $(".mega-menu-column").css('width','100%');
             
             $(".mega-menu").removeClass('mega-menu');
             
             $(".navbar-toggle").addClass('rightmenu');
             //$(".mega-menu-column ul li").css({'list-style':'none', 'height': '24px'});
            // $("#bs-example-navbar-collapse-1").removeClass('collapse in navbar-collapse');
             //$("#bs-example-navbar-collapse-1").addClass('c-menu--slide-left c-menu');
       
                //$(".tophotline").before('<a class="glyphicon glyphicon-list leftmenu pull-left" href="javascript:void(0)"></a>');
            /* 
             $("#menuleft").addClass('c-menu c-menu--slide-left')
              $("#menuleft").append($("<button class=\"c-menu__close\">Ẩn menu <span class=\"glyphicon glyphicon-arrow-right\"></span></button>"));

*/


  var slideRight = new Menu({
    wrapper: 'body',
    type: 'slide-right',
    menuOpenerClass: '.rightmenu',
    maskId: '#c-mask'
  });

  var slideRightBtn = document.querySelector('.rightmenu');
  
  slideRightBtn.addEventListener('click', function(e) {
    e.preventDefault;
    slideRight.open();
  });



}

$(window).scroll(function(){
		if ($(this).scrollTop() > 0) {
		
            
            $("body, #c-menu--slide-left").css('margin-top','50px');
        
		} else {
			
          
           $("body, #c-menu--slide-left").css('margin-top','0');
           
             
            
        
		}
        
	});
    
    $("#timnangcao").click(function(){
        $(".fullsearch").slideToggle();
        
        if($(window).width() < 1024)
        $(".showgia").slideToggle();
      
      
        text= $(this).find('strong').text();
        
        text=(text=='Tìm kiếm cơ bản') ? "Tìm kiếm nâng cao" : "Tìm kiếm cơ bản";
        $(this).find('strong').text(text);
        
        return false;
      });
      });