/*
 * Snackbar.js
 * Copyright 2016
 * Authors: Bram Korsten
 * All Rights Reserved.
 * Use, reproduction, distribution, and modification of this code is subject to the terms and
 * conditions of the MIT license, available at http://www.opensource.org/licenses/mit-license.php
 *
 */
function snackbar() {
  
  var type = 'message';
  
  this.success = function(message) {
    this.type = "message";
    createContainer(message, this.type);
  };
  
  this.error = function(message) {
    this.type = "error";
    createContainer(message, this.type);
  };
  
  function createContainer(message, type) {
    var snackbarcontainer = document.createElement("div");
    snackbarcontainer.className = "snackbar-wrapper";
   // snackbarcontainer.className(this.type);
    snackbarcontainer.innerHTML = '<p>' + message + '</p><a>okay</a>';
    document.body.appendChild(snackbarcontainer);
    $( ".snackbar-wrapper a" ).click(function() {
            $('.snackbar-wrapper').stop().animate(
                    { // map of the properties to animate
                        bottom: '-50px'
                    },
                    500, // animation duration
                    function() { // function to execute when animation is completed
                        $('.snackbar-wrapper').remove();
                    }
                );
    });
    $(".snackbar-wrapper").addClass(type);
    $(".snackbar-wrapper").stop().animate({ bottom:'0' }, 500);
    setTimeout(function(){
      $('.snackbar-wrapper').stop().animate(
                    { // map of the properties to animate
                        bottom: '-50px'
                    },
                    500, // animation duration
                    function() { // function to execute when animation is completed
                        $('.snackbar-wrapper').remove();
                    }
                );
    }, 5000);

  }
}

var snackbar = new snackbar();