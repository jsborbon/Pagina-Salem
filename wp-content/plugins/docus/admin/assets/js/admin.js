(function ($) {
	
	"use strict";

  //demo page layout show
	$('.ht-layout-inner label').on('mouseover',function(){

		$(this).siblings('.ht-demo-image').show();

	}).on('mouseout',function(){

		$(this).siblings('.ht-demo-image').hide();

	});

	//nav tab active
  $( document ).on('click','.htg-nav.nav-tab', function(e) {

    localStorage.setItem('docus-activeMenu', $(e.target).attr('href'));
    localStorage.setItem('docus-activeTab', $(e.target).attr('id'));

    // Check for active
    $('.htg-nav.nav-tab').removeClass('nav-tab-active');
    $('.docus-tab-group').removeClass('docus-active-tab');
    $(this).addClass('nav-tab-active');
    console.log('find');
    // Display active tab
    var currentTab = $(this).attr('href');
    $(currentTab).addClass('docus-active-tab');

    return false;
	      
  });

  //on page load menu and tab active
 $(window).on("load", function (){
    var activ_tab = "#"+localStorage.getItem('docus-activeTab');
    var activ_menu = localStorage.getItem('docus-activeMenu');
 
    if(activ_menu != null){
      // Check for active
      $('.htg-nav.nav-tab').removeClass('nav-tab-active');
      $('.docus-tab-group').removeClass('docus-active-tab');
      $(activ_tab).addClass('nav-tab-active');

      $(activ_menu).addClass('docus-active-tab');
    }else{
      $('#htg-general-tab').addClass('nav-tab-active');
      $('#docus-tab-1').addClass('docus-active-tab');
    }

  });

})(jQuery);
