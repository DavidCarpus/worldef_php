<?php
if (!isset($rootPathAdjustment)) {
	$rootPathAdjustment = "";
}
$jsPath=$rootPathAdjustment."js/script.js";
?>

    <footer>© <?php echo date("Y"); ?>
      World Education Foundation | All Rights Reserved
      </footer>

			<script src="<?php echo $jsPath ?>"></script><script src="<?php echo $jsPath ?>"></script>

			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>


	</body>
</html>
<?php

  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
