$(document).ready(function(){
    $("input").focus(function(){
      $(this).css("background-color", "#ccffcc");
    });
    $("input").blur(function(){
      $(this).css("background-color", "#ffffcc");
    });
});