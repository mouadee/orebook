/*global $, jquery, alert, console*/

$(function() {
  
    'use strict';
  
  //.main_sidebar a.toggle
  $('a.toggle').hover( function () {
    
      $('.main_sidebar').fadeOut(2000);
  
      $('a.toggle').css("right", "0");

  });
  
  }); 