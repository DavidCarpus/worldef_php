<?php
if (!isset($layout_context)) {
	$layout_context = "public";
}
if (!isset($rootPathAdjustment)) {
	$rootPathAdjustment = "";
}
$cssPath="$rootPathAdjustment"."css/style.css";
$faviconPath="$rootPathAdjustment"."favicon.ico";
// href="favicon.ico"

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>World Education Foundation &#8211; Building Peace Through Education</title>
		<link href="<?php echo $cssPath ?>" media="all" rel="stylesheet" type="text/css" />
		<link rel='stylesheet' id='tp-opensans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&#038;ver=4.6.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tt-easy-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%7CLa+Belle+Aurore%3Aregular&#038;subset=latin%2Call%2Call&#038;ver=4.6.3' type='text/css' media='all' />
		<link rel='stylesheet' id='body-fonts-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400italic%2C600&#038;ver=4.6.3' type='text/css' media='all' />
		<link rel='stylesheet' id='headings-fonts-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C500%2C600&#038;ver=4.6.3' type='text/css' media='all' />
		<link rel="shortcut icon"
		href="<?php echo $faviconPath ?>"
		>

	<body>
		<!-- sizes="16x16 32x32 48x48 64x64"
		href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico"
		href="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico?v=4f32ecc8f43d"
		type="image/vnd.microsoft.icon"
-->
