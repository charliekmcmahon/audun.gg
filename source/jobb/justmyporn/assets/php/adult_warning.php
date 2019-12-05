<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script type="text/javascript">$(".closeThis").click(function(){ $("#warning").fadeOut('700'); });</script>

<section id="warning">
    <a href="#" class="closeThis">✕</a>
    <section class="warningContent">
      <span>!</span>
      <h5 class="wHeading">Adult content ahead!</h5>
      <p>By clicking this out, you <strong>agree</strong> on being above the age of 18 years old. If you're not, we can show you some games instead?</p>
    </section>
  </section>
  <style>
  #warning { z-index:99999;position:fixed; top:0px; bottom:0px; left:0px; right:0px; background:#E91E70; font-family:"Arial",sans-serif; }
      #warning a.closeThis { position:absolute; top:20px; right:20px; display:block; width:20px; height:20px; font-size:30px; line-height:20px; text-align:center; color:#fff; text-decoration:none; text-shadow:-1px -1px #a63922; }
      #warning .warningContent { position:absolute; top:50%; left:50%; margin:-40px 0px 0px -170px; display:block; width:380px; height:80px; color:#f6e2dd; text-shadow:-1px -1px #a63922; }
        #warning .warningContent span { font-size:81px; font-weight:bold; line-height:93px; display:block; width:20px; float:left; margin-right:5px; }
        #warning .warningContent .wHeading { font-size:38px; font-weight:bold; line-height:45px; margin:0px; letter-spacing:-2px; }
        #warning .warningContent p { font-size:14px; font-weight:regular; line-height:16px; letter-spacing:0px; margin:0px; padding:0px; }
        #warning .warningContent p a { font-size:14px; font-weight:regular; color:#ff5559; text-decoration:underline; }
        </style>
