<?php
/*
https://themarklee.com/2014/10/05/better-simple-slideshow/
https://github.com/leemark/better-simple-slideshow
*/
$string = file_get_contents("../include/data/slideshow.json");
$slideshow = json_decode($string, true);

//-----------------------------------------------
function get_slideshow_by_name($projectname)
{
  global $slideshow;
  foreach ($slideshow as $key => $val) {
    if ($val['name'] == $projectname) {
        return $val;
    }
  }
  return null;
}
//find -iname "WE\-*IRAQ*"  | sed 's/.*\/\(.*\)/{"order": , "img":"projects\/\1"},/' >> ../../../../../components/include/data/slideshow.json

//find -iname WE\-*IRAQ* | grep "\-[0-7]*.jpg$" | xargs -I {} cp {} ~/code/worldef/newSite/builds/development/public/images/projects/


include("../include/layouts/header.php");
/*
echo "<script>";
echo "(function(){\n";
echo "var opts = {\n";
echo "    auto :  {\n";
echo "    speed : 1000, \n";
echo "    pauseOnHover : false \n";
echo "  }, \n";
echo "  fullScreen : false,  \n";
echo "  swipe : true \n";
echo "};\n";

echo "makeBSS('.wesolve', opts);\n";
echo "})\n";
echo "</script>\n\n\n";

echo "<pre>";
$subset = get_slideshow_by_name("wesolve");
foreach ($subset['images'] as $val) {
  print_r($val);
}
echo "</pre>";
*/
function projectSlideshowBlock($name='')
{
  $subset = get_slideshow_by_name("$name");

  $results .= "<div class='bss-slides'>";
  foreach ($subset['images'] as $val) {
    $path = "images/" . $val['img'];
    $results .= "<figure>";
    $results .= "<img src='$path'  />";
    $results .= "<figcaption>". $val['caption'] . "</figcaption> ";
    $results .= "</figure>";
  }
  //    <!-- more figures here as needed -->
  $results .= "</div>";
  return "$results";
}

include("../include/layouts/footer.php");
?>
