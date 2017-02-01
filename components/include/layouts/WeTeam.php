<?php include("../include/teamFunctions.php"); ?>

<h3 style="text-align: center;">WE TEAM</h3>
<div class='teammembers'>
<?php
foreach (find_active_team() as $teamMemberID) {
  echo team_member_thumbnail($teamMemberID);
}

?>
</div>
