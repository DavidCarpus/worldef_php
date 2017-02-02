<?php include("../include/layouts/header.php"); ?>

<div id="main">
	<div id="mainMenuHeader"  >
		<div class="caption">
			<p ><img src='images/newWElogo_transparent_white.png' />World Education Foundation</p>
		</div>
	</div>
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
		<div id='kafkaQuote'>
				<quote >"By believing passionately in something that still does not exist, <strong>WE create it"</strong>
				</quote>
				<br />
				<div >
					<img style="display:block;margin:0 auto;"
					src="images/FranzKafkasSignature.png"
					alt="Franz_Kafka's signature" width="202" height="75">
			</div>
		</div>
	</div>

	<div id='whatweoffer'>
		<?php include("../include/layouts/WhatWeOffer.php"); ?>
	</div>

		<div style="color: #777; text-align:center;">
			<?php include("../include/layouts/WeCollaborators.php"); ?>
		</div>

		<div style="color: #777; text-align:center;text-align: justify;">
			<?php include("../include/layouts/WeTeam.php"); ?>
		</div>

</div>



<?php include("../include/layouts/footer.php"); ?>
