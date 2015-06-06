<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//***************************Begin language control *******************************
if(isset($_POST['en_x'],$_POST['en_y']))
{
$lang = fr;
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isset($_POST['fr_x'],$_POST['fr_y']))
{
$lang = en;
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}
$language='';
switch ($lang) {
  case 'en':
  $language='en_CA.utf8';
  break;
 
  case 'fr':
  $language='fr_CA.utf8';
  break;
 
  default:
  $language='en_CA.utf8';
 
}

putenv("LANG=$language");
setlocale(LC_ALL,$language);
$domain='messages';
bindtextdomain($domain,"locale");
bind_textdomain_codeset($domain,'UTF-8');
textdomain($domain);
//***************************End language control *******************************
?>