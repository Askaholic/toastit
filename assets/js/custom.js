

/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */


(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            /*====================================
               CUSTOM LINKS SCROLLING FUNCTION 
              ======================================*/

            $('a[href*=#]').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
               && location.hostname == this.hostname) {
                    var $target = $(this.hash);
                    $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
                    if ($target.length) {
                        var targetOffset = $target.offset().top;
                        $('html,body')
                        .animate({ scrollTop: targetOffset }, 800); //set scroll speed here
                        return false;
                    }
                }
            });
            //SLIDE SHOW SCRIPT

            $('.carousel').carousel({
                interval: 3000 //TIME IN MILLI SECONDS
            })

          
            /*====================================
               WRITE YOUR SCRIPTS BELOW 
			======================================*/
		   
			//Run when the page loads
			$.post("auth.php", {
				func: "getUser"
				})
			.done(function(data, status) {
			   if(status == 0) {
				   $("#loginbar").html('Welcome ' + data + '! <a id="logout">Log Out</a>');
			   }
			   else {
				   $("#loginbar").html('<a id="loginform">Login</a> | <a id="registerform">Register</a>');
			   }
			});
			//Event handlers
			
			$("#login").click(function() {
				//Call login with Ajax
				$.post( "auth.php", { 
					func: "login",
					username: $("#loginname").val(), 
					password: $("#loginpass").val()
					})
				.done(function( data, status ) {
					//Check if an error occurred
					if(status == 0) {
						$(".login").hide();
					}
					else {
						alert(data);
					}
				});
			});
			
			$("#register").click(function() {
				//Call register with Ajax
			});
			
            $('#loginform').click(function(){
              $('#loginPopup').fadeToggle('slow');
			  $('#registerPopup').hide();
            });
			
			$('#registerform').click(function(){
              $('#registerPopup').fadeToggle('slow');
			  $('#loginPopup').hide();
            });

            $(document).mouseup(function (e)
            {
                var container = $(".login");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.hide();
                }
            });

        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
    });

}(jQuery));



