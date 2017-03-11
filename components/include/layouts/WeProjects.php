<?php include("../include/projectFunctions.php"); ?>

<h2 style="text-align:center;">WE Projects</h2>
<?php
foreach (find_active_projects() as $projectID) {
  echo project_thumbnail($projectID);
}
?>
