<?php include("../include/projectFunctions.php"); ?>

<h3 style="text-align:center;">WE Projects</h3>
<?php
foreach (find_active_projects() as $projectID) {
  echo project_thumbnail($projectID);
}
?>
