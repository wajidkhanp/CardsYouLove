/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $("[data-toggle = 'tooltip']").tooltip();

    $('#grocery').on('input', function () {
        var input = $(this);
        var is_name = input.val();
        if (is_name) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });

    $('#tbill').on('input', function () {
        var input = $(this);
        var is_name = input.val();
        if (is_name) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });

    $('#restuarant').on('input', function () {
        var input = $(this);
        var is_name = input.val();
        if (is_name) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });

    $('#gas').on('input', function () {
        var input = $(this);
        var is_name = input.val();
        if (is_name) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });

//tabs 

  $(".tab_content").hide();
    $(".tab_content:first").show();
  

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
  
  
  $('#myCarousel').carousel({
	interval: 5000
	});
  
 
});

function validateForm() {
    var grocery = document.forms["myForm"]["grocery"].value;
    var tbill = document.forms["myForm"]["tbill"].value;
    var restuarant = document.forms["myForm"]["restuarant"].value;
    var gas = document.forms["myForm"]["gas"].value;
    var others = document.forms["myForm"]["others"].value;
    if (grocery == null || grocery == "") {
        alert("Grocery field must be filled out");
        return false;
    }
    if (tbill == null || tbill == "") {
        alert("Telephone bill field must be filled out");
        return false;
    }
    if (restuarant == null || restuarant == "") {
        alert("Restaurant field must be filled out");
        return false;
    }
    if (gas == null || gas == "") {
        alert("Gas field must be filled out");
        return false;
    }
    if (others == null || others == "") {
        alert("Others field must be filled out");
        return false;
    }

}

function toggle_display(divID)
    {
        obj = document.getElementById(divID);
        if ( obj.style.display == "block" )
        {
            obj.style.display = "none";
        }
        else
        {
            obj.style.display = "block";
        }
        return false;
}   


