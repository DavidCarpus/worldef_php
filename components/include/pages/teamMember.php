<?php
include("../include/teamFunctions.php");
?>

<?php
$rootPathAdjustment='../';
include("../include/layouts/header.php");
?>

<div id="main">
  <div id="subDirHeader">
		<div class="caption">
			<p ><a href="../#weteam"><img src='../images/newWElogo_transparent_white.png' /></a>World Education Foundation</p>
		</div>
	</div>

  <?php $teamMemberID=$_REQUEST[id]; ?>
  <?php
    echo team_member_detail($teamMemberID);
  ?>
</div>


<?php include("../include/layouts/footer.php"); ?>

<?php
/*
http://serverfault.com/questions/604181/nginx-rewrite-rule-for-file-within-folder-not-working
*/

?>
