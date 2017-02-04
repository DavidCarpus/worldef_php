<?php
include("../include/projectFunctions.php");
?>

<?php
$rootPathAdjustment='../';
include("../include/layouts/header.php");
 ?>

<div id="main">
	<div id="subDirHeader"  >
		<div class="caption">
			<p ><a href="../#weprojects"><img src='../images/newWElogo_transparent_white.png' /></a>World Education Foundation</p>
		</div>
	</div>

	<?php $projectID=$_REQUEST[id]; ?>
  <?php
    echo project_detail($projectID);
  ?>

</div>



<?php include("../include/layouts/footer.php"); ?>
