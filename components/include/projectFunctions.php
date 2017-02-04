<?php
$string = file_get_contents("../include/data/projects.json");
$projects = json_decode($string, true);
$string = file_get_contents("../include/data/slideshow.json");
$slideshow = json_decode($string, true);

//-----------------------------------------------
function find_all_projects(){
  global $projects;
  return $projects;
}
//-----------------------------------------------
function find_active_projects()
{
  $filtered = array_filter(find_all_projects(), function ($u) {
    return $u['active'] == 1;
  });
  return array_map(function ($u) {  return $u['id']; }, $filtered);
}
//-----------------------------------------------
function find_projects_member($id)
{
  global $projects;
  foreach ($projects as $key => $val) {
    if ($val['id'] == $id) {
        return $val;
    }
  }
  return null;
}
//-----------------------------------------------
function project_thumbnail($projectID)
{
  $project = find_projects_member($projectID);
  $results = "<div class='project'>";
  $results .= "<a href='weProjects/" . $projectID . "'>";
  if ($project['img'] != null) {
    $results .=  "<img src='images/projects/" . $project['img'] . ".png'";
    $results .=   "onmouseover='style=\"opacity:1;\"'";
    $results .=   "onmouseout='style=\"opacity:0.5;\"'";
    $results .=  " />";
  }
//  $results .= "<div class='shortDesc'>" . $project['shortDesc'] . "</div>";
  $results .=  "</a>";
  $results .=  "</div>\n";
  return $results;
}

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
//-----------------------------------------------
function projectSlideshowBlock($name='')
{
  $subset = get_slideshow_by_name("$name");

  $results .= "<div id='projectSlideshow' >";
  $results .= "<div class='bss-slides' >";
  foreach ($subset['images'] as $val) {
    $path = "../images/" . $val['img'];
    $caption = $val['caption'] != "" ? $val['caption']: $val['img'];
    $results .= "<figure>";
    $results .= "<img src='$path'  style='width:100%;' />";
    $results .= "<figcaption>$caption</figcaption> ";
    $results .= "</figure>";
  }
  $results .= "</div>";
  $results .= "</div>";
  return "$results";
}
//-----------------------------------------------
function project_detail($projectID)
{
  $project = find_projects_member($projectID);
  $results =  "<h1>". $project['shortDesc'] ."</h1>\n";
  if ($project['slideshow'] != null) {
    $results .=  projectSlideshowBlock($project['slideshow']);
  }
  else {
    if ($project['img'] != null) {
      $results .=  "<img src='../images/projects/" . $project['img'] . ".png'";
      $results .=  " />";
    }
  }

  $path = "../include/data/projects/" . $projectID . ".php";

  if( file_exists ( $path ) )
  {
    $myfile = fopen($path, "r") or die("Unable to open file!");
    $text = fread($myfile,filesize($path));
    fclose($myfile);
    $results .= "<div >";
    $results .= $text;
    $results .=  "</div>\n";
  }

  return $results;
}


//https://www.addedbytes.com/articles/for-beginners/url-rewriting-for-beginners/
?>
