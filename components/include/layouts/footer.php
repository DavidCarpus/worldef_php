    <footer>© <?php echo date("Y"); ?>
      World Education Foundation | All Rights Reserved
      </footer>
      <script src="js/script.js"></script>
	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
