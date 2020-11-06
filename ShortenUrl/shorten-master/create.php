<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Url shortener</title>
    <link rel="stylesheet" href="styles.css"/>
  </head>
  <body>
    <center>
    <div id="center">
    <div id="header"><h1>SHORTENER</h1></div>
    <div id="paragrapf"><p>Paste your url and hit the enter!</p></div>

<br><br>


<form  action="create.php">
<input type="text" name="urls" placeholder="Paste your url here">
</form>


<?php

if(isset($_GET['urls'])){
  $url = $_GET['urls'];
  shorten_url($url);
}

function shorten_url($url){
  include 'shorten.php';

  $outputurl = Shortener($url);

 ?>
 <input type="text" onClick="msg()" value="<?php echo $outputurl;?>"/>
<?php
}

?>
</div>
  </center>
  </body>
</html>
