    <footer>© <?php echo date("Y"); ?>
      World Education Foundation | All Rights Reserved
      </footer>
	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
