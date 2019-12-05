<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <?php require_once ('assets/php/head.php');?>
  <body>
    <div class="container">
      <?php require_once ('assets/php/header.php');?>
      <?php /*
       <?php require_once ('assets/images/header-img.php');?>
       */ ?>
      <!--content starts-->
      <div class="content">
      <h2>Categories</h2>
      <p>
        <div class="infobox">
          <div class="thin">
             We're working on the categories.
             <br>Please use our Explore page while we load in the good videoes.
              <i class="fas fa-thumbtack maincolor bold" style="float:right;"></i>
          </div>
        </div>
      <?php /*
      <?php
        $path = ".";
        $dh = opendir($path);
        $i=1;
        while (($file = readdir($dh)) !== false) {
            if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
                echo "<a href='$path'>$file</a><br /><br />";
                $i++;
            }
        }
        closedir($dh);
        $files = scandir($path);
        ?>
        */?>

        <?php require_once ('jobb/theporn/videos/');?>

        <?php /*
        <?php require_once ('assets/videos/picked-out.php');?>
        <?php require_once ('assets/videos/teens.php');?>
        <?php require_once ('assets/videos/babes.php');?>
        <?php require_once ('assets/videos/gay.php');?>
        <?php require_once ('assets/videos/anal.php');?>
        <?php require_once ('assets/videos/blowjob.php');?>
        */ ?>
      </div>
    </div>
    <!--end of page -->
  </body>
</html>
