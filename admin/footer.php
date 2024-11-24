 		</div>
 	</div>
 </main>
		<!-- Logout Section -->
		<div class="nav-item">
			<a class="nav-link px-3" href="#" onclick="return confirmLogout()">
				<i class="bi bi-power"></i>
				Logout
			</a>
		</div>

		<!-- Footer Section -->
		<footer class="text-center py-3 mt-auto bg-dark text-white">
			<p><h4>&copy; <?php echo date("Y"); ?> Admin Mthree. All Rights Reserved.</h4></p>
		</footer>

	</div> <!-- End of main content -->

	<script src="../assets/js/bootstrap.bundle.js"></script>
	<script src="../assets/js/jquery-3.5.1.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#thetable').DataTable();
		});
	</script>
</body>
</html>
