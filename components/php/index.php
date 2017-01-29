<?php $layout_context = "public"; ?>
<?php include("../include/layouts/header.php"); ?>

<div id="main">
	<div style="height:130px; background-color: black" >
		<div class="caption">
			<p style="color: white; font-size: 170%;">
				<img src='images/newWElogo_transparent_white.png'
				style="width:100px; vertical-align: middle;"/>
				World Education Foundation
			</p>
		</div>
	</div>
	<?php //<div class="bgimg-1">	</div> ?>
	<div class="bgimg-1">	</div> 

	<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
		<?php include("../include/layouts/partials/WeMission.php"); ?>
	</div>

	<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
		<?php include("../include/layouts/partials/WeVision.php"); ?>
	</div>

	<div class="bgimg-2">
	</div>

	<div style="position:relative;">
	  <div style="text-align:center;padding:50px 80px;text-align: justify;">
			<?php include("../include/layouts/WeProjects.php"); ?>
	  </div>
	</div>

	<div class="bgimg-3">
		<div class="caption">
	    <span class="border" style="vertical-align: top; color: black;">
				<p style="color: white; font-size: 150%;">
					"By believing passionately in something that still does not exist, <strong>WE create it"</strong>
				</p>
			</span>
				<img class="aligncenter  wp-image-242"
				src="images/150px-Franz_Kafkas_signature.png"
				alt="Franz_Kafka's signature" width="202" height="75">

		</div>
	</div>

	<div style="color: #777; text-align:center;text-align: justify;">
		<?php include("../include/layouts/WhatWeOffer.php"); ?>
	</div>
	<hr />
		<div style="color: #777; text-align:center;text-align: justify;">
			<?php include("../include/layouts/WeCollaborators.php"); ?>
		</div>

	<hr />

		<div style="color: #777; text-align:center;text-align: justify;">
			<?php include("../include/layouts/WeTeam.php"); ?>
		</div>

</div>



<?php include("../include/layouts/footer.php"); ?>
