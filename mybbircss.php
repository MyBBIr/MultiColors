<?php


define("IN_MYBB", 1);
define("NO_ONLINE", 1);
define('THIS_SCRIPT', 'css.php');

require_once "./global.php";
if (isset($mybb->input['color']))
{
	my_setcookie('mybbircolor',$mybb->input['color']);
	redirect("index.php", "رنگ قالب با موفقیت تغییر یافت");
	exit;
}
if (!isset($mybb->cookies['mybbircolor']) || $mybb->cookies['mybbircolor'] == NULL)
{
	my_setcookie('mybbircolor',"brown");
}
header("Content-type: text/css");
echo "/*\n\tBy: My-BB.Ir\n\tAliReza_Tofighi\n*/\n".'@import "'.$mybb->settings['bburl'].'/images/multicolors/'.$mybb->cookies['mybbircolor'].'.css";';
echo "#mytask { text-align:center;font-size:2px;content: 'Theme By: My-BB.Ir';}";
exit;
?>