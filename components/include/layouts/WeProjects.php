<?php
$projects = [
  ['id' => 1, 'active' => 1, 'shortDesc' => 'We Solve', 'img' => 'IRAQ32' ],
  ['id' => 2, 'active' => 1, 'shortDesc' => 'We Kolwezi', 'img' => 'KOVELZI2' ],
  ['id' => 3, 'active' => 1, 'shortDesc' => 'We Bio-Diesel', 'img' => 'TANZANIA22' ],
  ['id' => 4, 'active' => 1, 'shortDesc' => 'We Malaria', 'img' => 'WEMALARIA2' ],
  ['id' => 5, 'active' => 1, 'shortDesc' => 'We Haiti', 'img' => 'haITI22' ],
  ['id' => 6, 'active' => 1, 'shortDesc' => 'We American Football', 'img' => 'cONGOaMERICA32' ],
  ['id' => 7, 'active' => 1, 'shortDesc' => 'We Sahel Youth Development', 'img' => 'SAHARA23' ],
];
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
    if ($val['id'] === $id) {
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
  if ($project['img'] != null) {
    $results .=  "<img src='images/projects/" . $project['img'] . ".png'";
    $results .=   "onmouseover='style=\"opacity:1;\"'";
    $results .=   "onmouseout='style=\"opacity:0.5;\"'";
    $results .=  " />";

  }
//  $results .= "<div class='shortDesc'>" . $project['shortDesc'] . "</div>";
  $results .=  "</div>\n";
  return $results;
}
//============================================================================
//============================================================================
?>
<h3 style="text-align:center;">WE Projects</h3>
<?php
foreach (find_active_projects() as $projectID) {
  echo project_thumbnail($projectID);
}
?>
