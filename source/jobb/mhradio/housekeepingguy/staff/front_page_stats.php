<font color="#FFFFFF"><?php

// Shoutcast Server Stats

// Parses shoutcasts xml to make an effective stats thing for any website

include('config_radio.php');  //you may edit this path to fit your server environment otherwise leave it alone

$scfp = fsockopen("$scip", $scport, &$errno, &$errstr, 30);

 if(!$scfp) {

  $scsuccs=1;

echo'<font face="Verdana" size="1" color="black"><b>Incorrect SHOUTcast Information or it is down. Please contact an administrator to get this fixed.</b></font>';

 }

if($scsuccs!=1){

 fputs($scfp,"GET /admin.cgi?pass=$scpass&mode=viewxml HTTP/1.0\r\nUser-Agent: SHOUTcast Song Status (Mozilla Compatible)\r\n\r\n");

 while(!feof($scfp)) {

  $page .= fgets($scfp, 1000);

 }

######################################################################################################################

/////////////////////////part 1 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

//define  xml elements

 $loop = array("STREAMSTATUS", "BITRATE", "SERVERTITLE", "CURRENTLISTENERS");

 $y=0;

 while($loop[$y]!=''){

  $pageed = ereg_replace(".*<$loop[$y]>", "", $page);

  $scphp = strtolower($loop[$y]);

  $$scphp = ereg_replace("</$loop[$y]>.*", "", $pageed);

  if($loop[$y]==SERVERGENRE || $loop[$y]==SERVERTITLE || $loop[$y]==SONGTITLE || $loop[$y]==SERVERTITLE)

   $$scphp = urldecode($$scphp);



// uncomment the next line to see all variables

//echo'$'.$scphp.' = '.$$scphp.'<br>';

  $y++;

 }

//end intro xml elements

######################################################################################################################

######################################################################################################################

/////////////////////////part 2\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

//get song info and history

 $pageed = ereg_replace(".*<SONGHISTORY>", "", $page);

 $pageed = ereg_replace("<SONGHISTORY>.*", "", $pageed);

 $songatime = explode("<SONG>", $pageed);

 $r=1;

 while($songatime[$r]!=""){

  $t=$r-1;

  $playedat[$t] = ereg_replace(".*<PLAYEDAT>", "", $songatime[$r]);

  $playedat[$t] = ereg_replace("</PLAYEDAT>.*", "", $playedat[$t]);

  $song[$t] = ereg_replace(".*<TITLE>", "", $songatime[$r]);

  $song[$t] = ereg_replace("</TITLE>.*", "", $song[$t]);

  $song[$t] = urldecode($song[$t]);

  $dj[$t] = ereg_replace(".*<SERVERTITLE>", "", $page);

  $dj[$t] = ereg_replace("</SERVERTITLE>.*", "", $pageed);

$r++;

 }

//end song info



fclose($scfp);

}

?>
</font>