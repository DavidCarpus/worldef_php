<?php
if (!isset($layout_context)) {
	$layout_context = "public";
}
if (!isset($rootPathAdjustment)) {
	$rootPathAdjustment = "";
}
$cssPath="$rootPathAdjustment/css/style.css";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>World Education Foundation &#8211; Building Peace Through Education</title>
		<link href="<?php echo $cssPath ?>" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
