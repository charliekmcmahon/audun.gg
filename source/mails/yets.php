<?php
$to = 'audunhilden@live.no';

$subject = 'I want to advertise on JustMyPorn';
$from = 'newad@justmyporn.com';
$name = $_POST['name']; // required
$email = $_POST['email']; // required
$messagefromsender = $_POST['messagefromsender']; // required
$type = $_POST['type']; // required
$admethod = $_POST['admethod']; // required
$fromvalue = $_POST['fromvalue']; // required
$tovalue = $_POST['tovalue']; // required




// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Compose a simple HTML email message

$message .= '<html><body><div class="bg" style="background-color:#f7f7f7;padding:10px;">';
$message .= '<div class="container" style="text-align:left;margin-left:auto;margin-right:Auto;max-width:500px";><div class="content" style="background:white;padding:50px;"><h1 style="color:#2b2c2b;text-align:center;">JustMy<div style="background:#f8c333;padding: 0px 5px 0px 5px;height: 50px;vertical-align: middle;color: white;border-radius:.3em;display:inline-block;">porn</div></h1>';
$message .= '<span style="color:#808080;font-size:18px;margin-top:25px;">New email from '.$name.'!<div style="margin-top:20px"><strong>Message:</strong> '.$messagefromsender.'<div style="margin-top:20px"><strong>'.$name.' would like to advertise with:</strong> '.$admethod.'<div style="margin-top:20px">Budget:</strong> '.$fromvalue.' to '.$tovalue.'<div style="margin-top:20px"><strong style="color:#f8c333;font-size:25px;"></strong><div style="margin-top:40px">Email: '.$email.', <br>JustMyPorn.com</span></div></div></div></div>';
$message .= '</div></body></html>';


// Sending email
if(mail($to, $subject, $message, $headers)){
    echo '<h1>Your mail has been sent successfully12.</h1>';
} else{
    echo '<h1>Unable to send email. Please try again.</h1>';
}
?>
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')
@include('_partials.universal-header')
    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <noscript>
        <style>
            .lqip {
                display: none !important;
            }
        </style>
    </noscript>

@endpush


@section('title', 'JMP - About Premium')

@section('body')

<style>
.pot-header2{
  position: relative;
  z-index: 2;
  /* background-position: center center; */
  background-repeat: no-repeat !important;
  background-size: cover !important;
  background-image: url(/img/new-hero.png) !important;
}
.header{
  background-color:#1d1d1d !important;
}
body{background-color: #1d1d1d !important;}
li a {
    color: white !important;
}
</style>
<script>

(function ($) {
    "use strict";


    /*==================================================================
    [ Validate after type ]*/
    $('.validate-input .input100').each(function(){
        $(this).on('blur', function(){
            if(validate(this) == false){
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })
    })


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
           $(this).parent().removeClass('true-validate');
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

        $(thisAlert).append('<span class="btn-hide-validate">&#xf136;</span>')
        $('.btn-hide-validate').each(function(){
            $(this).on('click',function(){
               hideValidate(this);
            });
        });
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
        $(thisAlert).find('.btn-hide-validate').remove();
    }



})(jQuery);
</script>
<div class="container">
  <div class="content">
    <h3 style="text-transform: uppercase;font-weight:800;">Advertising Request Form</h3>
      <span id="smol2" style="color:#8c8c8c">
        Need more visitors on your page? Send us details about what you'd like to advertise, <br>and we'll see what we can do to increase your exposure to our viewers.
        <p><br>
          	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
          	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
          	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
          	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
          	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
          	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
          	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
          	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
          	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
          	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
          	<link rel="stylesheet" type="text/css" href="css/util.css">
          	<link rel="stylesheet" type="text/css" href="css/main.css">


          	<div class="container-contact100">
          		<div class="wrap-contact100">
          			<form class="contact100-form validate-form" name="contact" method="POST">
          				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
          					<span class="label-input100">FULL NAME *</span>
          					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
          				</div>

                  <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Email">
                    <span class="label-input100">Email *</span>
                    <input class="input100" type="text" name="email" placeholder="Enter Your Email">
                  </div>

          				<div class="w-full dis-none js-show-service">
          					<div class="wrap-contact100-form-radio">
          						<span class="label-input100">What type of products do you sell?</span>

          						<div class="contact100-form-radio m-t-15">
          							<input class="input-radio100" id="radio1" type="radio" name="admethod" value="Banner under video" checked="checked">
          							<label class="label-radio100" for="radio1">
          								Video Banner. <i>(Banner under every video page)</i>
          							</label>
          						</div>

          						<div class="contact100-form-radio">
          							<input class="input-radio100" id="radio2" type="radio" name="admethod" value="Fake Video Thumbnail">
          							<label class="label-radio100" for="radio2">
          								Fake Video Thumbnail. <i>Looks like a video, but redirects to your link.</i>
          							</label>
          						</div>

          						<div class="contact100-form-radio">
          							<input class="input-radio100" id="radio3" type="radio" name="admethod" value="Navigation Link">
          							<label class="label-radio100" for="radio3">
            							Own link in navigation.
          							</label>
          						</div>
          					</div>

          					<div class="wrap-contact100-form-range">
          						<span class="label-input100">Budget *</span>

          						<div class="contact100-form-range-value">
          							$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
          							<input type="radio" name="fromvalue">
          							<input type="radio" name="tovalue">
          						</div>

          						<div class="contact100-form-range-bar">
          							<div id="filter-bar"></div>
          						</div>
          					</div>
          				</div>

          				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
          					<span class="label-input100">Message</span>
          					<textarea class="input100" name="messagefromsender" placeholder="Your message here..."></textarea>
          				</div>

          				<div class="container-contact100-form-btn">
          					<button class="contact100-form-btn" type="submit">
          						<span>
          							Submit
          							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
          						</span>
          					</button>
          				</div>
          			</form>
          		</div>
          	</div>
          <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
          <script src="vendor/animsition/js/animsition.min.js"></script>
          <script src="vendor/bootstrap/js/popper.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
          <script src="vendor/select2/select2.min.js"></script>
          <script>
            $(".js-select2").each(function(){
              $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
              });


              $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                  if($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                  }
                  else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                  }
                });
              });
            })
          </script>
          <script src="vendor/daterangepicker/moment.min.js"></script>
          <script src="vendor/daterangepicker/daterangepicker.js"></script>
          <script src="vendor/countdowntime/countdowntime.js"></script>
          <script src="vendor/noui/nouislider.min.js"></script>
          <script>
              var filterBar = document.getElementById('filter-bar');

              noUiSlider.create(filterBar, {
                  start: [ 300, 750 ],
                  connect: true,
                  range: {
                      'min': 300,
                      'max': 2500
                  }
              });

              var skipValues = [
              document.getElementById('value-lower'),
              document.getElementById('value-upper')
              ];

              filterBar.noUiSlider.on('update', function( values, handle ) {
                  skipValues[handle].innerHTML = Math.round(values[handle]);
                  $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
                  $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
              });
          </script>
        <!--===============================================================================================-->
          <script src="js/main.js"></script>



  </div>
</div>
<style>




/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Montserrat-Regular;
  src: url('../fonts/montserrat/Montserrat-Regular.ttf');
}

@font-face {
  font-family: Montserrat-Bold;
  src: url('../fonts/montserrat/Montserrat-Bold.ttf');
}

@font-face {
  font-family: Montserrat-Black;
  src: url('../fonts/montserrat/Montserrat-Black.ttf');
}

@font-face {
  font-family: Montserrat-SemiBold;
  src: url('../fonts/montserrat/Montserrat-SemiBold.ttf');
}

@font-face {
  font-family: Montserrat-Medium;
  src: url('../fonts/montserrat/Montserrat-Medium.ttf');
}



/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

input[type="number"] {
    -moz-appearance: textfield;
    appearance: none;
    -webkit-appearance: none;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}

textarea::-webkit-input-placeholder { color: #adadad;}
textarea:-moz-placeholder { color: #adadad;}
textarea::-moz-placeholder { color: #adadad;}
textarea:-ms-input-placeholder { color: #adadad;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*---------------------------------------------*/
.container {
	max-width: 1200px;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/

.bg0 {background-color: #fff;}
.bg1 {background-color: #f7f7f7;}


/*//////////////////////////////////////////////////////////////////
[ Contact ]*/

.container-contact100 {
  width: 100%;
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;

}

.wrap-contact100 {
  width: 920px;
  border-radius: 10px;
  overflow: hidden;
  padding: 62px 55px 90px 55px;
}


/*------------------------------------------------------------------
[  ]*/

.contact100-form {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.contact100-form-title {
  display: block;
  width: 100%;
  font-family: Montserrat-Black;
  font-size: 39px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 59px;
}



/*------------------------------------------------------------------
[  ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border: 1px solid #e6e6e6;
  border-radius: 13px;
  padding: 10px 30px 9px 22px;
  margin-bottom: 20px;
}

.rs1-wrap-input100 {
  width: calc((100% - 30px) / 2);
}

.label-input100 {
  font-family: Montserrat-SemiBold;
  font-size: 10px;
  line-height: 1.5;
  text-transform: uppercase;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  color: #555555;
  line-height: 1.2;
  padding-right: 15px;
}


/*---------------------------------------------*/
input.input100 {
  height: 40px;
}


textarea.input100 {
  min-height: 120px;
  padding-top: 9px;
  padding-bottom: 13px;
}


.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 20px;
  width: 100%;
}

.contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  background-color: #333333;
  border-radius: 25px;

  font-family: Montserrat-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact100-form-btn i {
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact100-form-btn:hover {
  background-color: #00ad5f;
}

.contact100-form-btn:hover i {
  -webkit-transform: translateX(10px);
  -moz-transform: translateX(10px);
  -ms-transform: translateX(10px);
  -o-transform: translateX(10px);
  transform: translateX(10px);
}

/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 768px) {
  .rs1-wrap-input100 {
    width: 100%;
  }

}

@media (max-width: 576px) {
  .wrap-contact100 {
    padding: 62px 15px 90px 15px;
  }

  .wrap-input100 {
    padding: 10px 10px 9px 10px;
  }
}



/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  width: 100%;
  min-height: 40px;
  background-color: #f7f7f7;
  top: 35px;
  left: 0px;
  padding: 0 45px 0 22px;
  pointer-events: none;

  font-family: Montserrat-SemiBold;
  font-size: 18px;
  color: #fa4251;
  line-height: 1.2;
}

.btn-hide-validate {
  font-family: Material-Design-Iconic-Font;
  font-size: 18px;
  color: #fa4251;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 40px;
  height: 40px;
  top: 35px;
  right: 12px;
}

.rs1-alert-validate.alert-validate::before {
  background-color: #fff;
}

.true-validate::after {
  content: "\f26b";
  font-family: Material-Design-Iconic-Font;
  font-size: 18px;
  color: #00ad5f;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 40px;
  height: 40px;
  top: 35px;
  right: 10px;
}

/*---------------------------------------------*/
@media (max-width: 576px) {
  .alert-validate::before {
    padding: 0 10px 0 10px;
  }

  .true-validate::after,
  .btn-hide-validate {
    right: 0px;
    width: 30px;
  }
}


/*==================================================================
[ Restyle Select2 ]*/

.select2-container {
  display: block;
  max-width: 100% !important;
  width: auto !important;
}

.select2-container .select2-selection--single {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  background-color: transparent;
  border: none;
  height: 40px;
  outline: none;
  position: relative;
}

/*------------------------------------------------------------------
[ in select ]*/
.select2-container .select2-selection--single .select2-selection__rendered {
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  color: #555555;
  line-height: 1.2;
  padding-left: 0px ;
  background-color: transparent;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
  height: 100%;
  top: 50%;
  transform: translateY(-50%);
  right: 0px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.select2-selection__arrow b {
  display: none;
}

.select2-selection__arrow::before {
  content: '\f312';
  font-family: Material-Design-Iconic-Font;
  font-size: 18px;
  color: #555555;
}


/*------------------------------------------------------------------
[ Dropdown option ]*/
.select2-container--open .select2-dropdown {
  z-index: 1251;
  width: calc(100% + 2px);
  border: 0px solid transparent;
  border-radius: 10px;
  overflow: hidden;
  background-color: white;
  left: -24px;

  box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
}

@media (max-width: 576px) {
  .select2-container--open .select2-dropdown {
    left: -12px;
  }
}

.select2-dropdown--above {top: -38px;}
.select2-dropdown--below {top: 10px;}

.select2-container .select2-results__option[aria-selected] {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 24px;
}

@media (max-width: 576px) {
  .select2-container .select2-results__option[aria-selected] {
    padding-left: 12px;
  }
}

.select2-container .select2-results__option[aria-selected="true"] {
  background: #00ad5f;
  color: white;
}

.select2-container .select2-results__option--highlighted[aria-selected] {
  background: #00ad5f;
  color: white;
}

.select2-results__options {
  font-family: Montserrat-SemiBold;
  font-size: 14px;
  color: #555555;
  line-height: 1.2;
}

.select2-search--dropdown .select2-search__field {
  border: 1px solid #aaa;
  outline: none;
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #333333;
  line-height: 1.2;
}

.wrap-input100 .dropDownSelect2 .select2-container--open {
  width: 100% !important;
}

.wrap-input100 .dropDownSelect2 .select2-dropdown {
  width: calc(100% + 2px) !important;
}

/*==================================================================
[ Restyle Radio ]*/
.wrap-contact100-form-radio {
  width: 100%;
  padding: 15px 25px 0 25px;
}

.contact100-form-radio {
  padding-bottom: 5px;
}

.input-radio100 {
  display: none;
}

.label-radio100 {
  display: block;
  position: relative;
  padding-left: 28px;
  cursor: pointer;
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  color: #afafaf;
  line-height: 1.2;
}

.label-radio100::before {
  content: "";
  display: block;
  position: absolute;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 1px solid #cdcdcd;
  background: #fff;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

.label-radio100::after {
  content: "";
  display: block;
  position: absolute;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 6px solid transparent;
  background: #00ad5f;
  -moz-background-clip: padding;
  -webkit-background-clip: padding;
  background-clip: padding-box;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  display: none;

}

.input-radio100:checked + .label-radio100::after {
  display: block;
}


/*==================================================================
[ rs NoUI ]*/
.wrap-contact100-form-range {
  width: 100%;
  padding: 20px 25px 57px 25px;
}

.contact100-form-range-value {
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  color: #bdbdbd;
  line-height: 1.2;
  padding-top: 10px;
  padding-bottom: 30px;
}

.contact100-form-range-value input {
  display: none;
}

#filter-bar {
  height: 20px;
  border: 1px solid #e6e6e6;
  border-radius: 9px;
  background-color: #f7f7f7;
}
#filter-bar .noUi-connect {
  border: 1px solid #e6e6e6;
  border-radius: 9px;
  background-color: #f8c333;
  box-shadow: none;
}
#filter-bar .noUi-handle {
  width: 40px;
  height: 36px;
  border: 1px solid #cccccc;
  border-radius: 9px;
  background: #f5f5f5;
  cursor: pointer;
  box-shadow: none;
  outline: none;
  top: -8px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
}

#filter-bar .noUi-handle.noUi-handle-lower {
  left: -1px;
}

#filter-bar .noUi-handle.noUi-handle-upper {
  left: -39px;
}

#filter-bar .noUi-handle:before {
  content: "";
  display: block;
  position: unset;
  height: 12px;
  width: 9px;
  background-color: transparent;
  border-left: 2px solid #cccccc;
  border-right: 2px solid #cccccc;
}
#filter-bar .noUi-handle:after {
  display: none;
}

@media (max-width: 576px) {
  .wrap-contact100-form-range {
    padding: 20px 0px 57px 0px;
  }

  .wrap-contact100-form-radio {
    padding: 15px 0px 0 0px;
  }
}
</style>

@endsection
