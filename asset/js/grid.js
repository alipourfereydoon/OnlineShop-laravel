$(document).ready(function() {
function removeallsidebartoggleclass() {
    $('#sidbar-toggle-hide').removeClass('d-md-inline');
     $('#sidbar-toggle-hide').removeClass('d-none');
     $('#sidebar-toggle-show').removeClass('d-inline');
      $('#sidebar-toggle-show').removeClass('d-md-none');


}

$('#sidbar-toggle-hide').click(function(){
$('#sidbar').hide();
$('#main-body').show({ width :"100%"});
setTimeout(function(){
    removeallsidebartoggleclass();
     $('#sidbar-toggle-hide').addclass('d-none');
      $('#sidbar-toggle-show').removeClass('d-none');
},300);
});


$('#sidbar-toggle-show').click(function(){
$('#sidbar').show();
    removeallsidebartoggleclass();
     $('#sidbar-toggle-hide').removeClass('d-none');
      $('#sidbar-toggle-show').addClass('d-none');

});

$("#menu-toggle").click(function () { 
  $("#body-header").toggle();
    
});

$("#search-toggle").click(function () { 
  $('#search-toggle').removeClass('d-md-inline');
  $('#search-area').addClass('d-md-inline');
  $('#search-input').animate("{width:12rem}", "700");
    
});
$('#search-area-hide').click(function () { 
    setTimeout(() => {
    $('#search-toggle').addClass('d-md-inline');
    $('#search-area').removeClass('d-md-inline');
    }, 300);

});

$('#header-notification-toggle').click(function () { 
    $('#search-toggle').addClass('d-md-inline');
    $('#search-area').removeClass('d-md-inline');
    
});

$('#header-profile-toggle').click(function () { 
    $('#header-profile1').toggle();
   
});

$('.sidbar-group-link').click(function () { 
    $('.sidbar-group-link').removeClass('sidbar-group-link-active');
    $('.sidbar-group-link').children('.sidbar-dropdowntoggle').children('angle').removeClass('fa-angle-down');
    $('.sidbar-group-link').children('.sidbar-dropdowntoggle').children('angle').addClass('fa-angle-left');

    $(this).addclass('sidbar-group-link-active');
    $(this).children('.sidbar-dropdowntoggle').children('angle').removeClass('fa-angle-left');
    $(this).children('.sidbar-dropdowntoggle').children('angle').addClass('fa-angle-down');
});

$('#full-screan').click(function () { 
    togglefullscrean();
    
});
function togglefullscrean(){
    if((document.fullscreenElement && document.fullscreenElement !==null)||(!document.mozfullscrean && !document.webkitisfullscrean)){

if(document.documentElement.requestFullscreen){
    document.documentElement.requestFullscreen();
}
else if(document.documentElement.mozrequestFullscreen){
    document.documentElement.mozrequestFullscreen();
}
else if(document.documentElement.webkitrequestFullscreen){
    document.documentElement.webkitrequestFullscreen(Element.allow_keyboard_input);
}
$('#screan-compress').removeClass('d-none');
$('#screan-expand').addClass('d-none');
    }
    else{
        
    }
}

})