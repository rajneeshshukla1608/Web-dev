<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$text = "Hello this is a test for voice api of google";
$text = urlencode($text);
$lang = urldecode("en");
$file  = "audio/" . md5($text) .".mp3";
   if (!file_exists($file) || filesize($file) == 0) {
     $mp3 = file_get_contents('http://translate.google.com/translate_tts?ie=UTF-8&q='.$text.'&tl='.$lang.'&total=2&idx=0&textlen='.strlen($text).'&prev=input');
     if(file_put_contents($file, $mp3)){
        echo "Saved<br>";
     }else{
        echo "Wasn't able to save it !<br>";
     }
   } else {
     echo "Already exist<br>";
   }
?>
<audio controls="controls" autoplay="autoplay">
  <source src="<?php echo $file; ?>" type="audio/mpeg" />
</audio>
</body>
</html>
