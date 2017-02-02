<?php
if (!isset($rootPathAdjustment)) {
	$rootPathAdjustment = "";
}
$jsPath="$rootPathAdjustment/js/script.js";
?>

    <footer>© <?php echo date("Y"); ?>
      World Education Foundation | All Rights Reserved
      </footer>
      <script src="<?php echo $jsPath ?>"></script>
	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
