<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <?php require_once ('assets/php/head.php');?>
  <body>
    <div class="container">
      <?php require_once ('assets/php/header.php');?>
      <div class="content">
        <h2>Contact us!</h2>
          <div class="infobox">
            <div class="thin">
               We suggest our users to reach out to us on social media instead of email, depending on the cause.
                <i class="fas fa-thumbtack maincolor bold" style="float:right;"></i>
            </div>
          </div>
          <div class="span_2 column">
            <span class="contact100-form-title">
              <div class="green-color"><i class="fas fa-thumbs-up"></i> &nbsp;Suggested!
              <br>Estimated time (1 day)</div>
            </span>
              <a href="https://twitter.com/theofficialporn" class="socialmedia">
                <img class="media-icon"src="assets/images/twitter.png"> @theofficialporn
              </a>
              <a href="https://www.facebook.com/theofficialporn/" class="socialmedia">
                <img class="media-icon"src="assets/images/facebook.png"> @theofficialporn
              </a>
              <a href="http://instagram.com/theofficialpor.n" class="socialmedia">
                <img class="media-icon"src="assets/images/instagram.png"> @theofficialpor.n
              </a>
            </div>
          <div class="span_1 column">
            <form class="contact100-form validate-form">
              <span class="contact100-form-title">
                <div class="red-color"><i class="fas fa-thumbs-down"></i> Not suggested
                <br>Estimated time (2 days)</div>
              </span>
              <label class="label-input100" for="first-name">Tell us your name *</label>
              <div class="wrap-input100 validate-input" data-validate="Type first name">
              <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
              <span class="focus-input100"></span>
              </div>

              <label class="label-input100" for="email">Enter your email *</label>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                <span class="focus-input100"></span>
              </div>

                <label class="label-input100" for="message">Message *</label>
                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                  <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                   <span class="focus-input100"></span>
                  </div>
                  <div class="container-contact100-form-btn">
                  <button class="contact100-form-btn">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
            <div class="after_float">s</div>
  				</div>
        </div>
    <!--end of page -->
  </body>
</html>
<script>

(function ($) {
    "use strict";





    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


})(jQuery);
</script>
