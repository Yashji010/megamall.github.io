
<div class="container-fluid py-5 mt-2" style="background-color: black;">
	<div class="row">
		<div class="col-md-7">
			<div class="row">
				<div class="col-md-2">
					<ul style="list-style-type: none;">
						<li><a href="" class="" style="text-decoration: none; color: orange;">ABOUT</a></li><br>
						<li><a href="" class="text-white" style="text-decoration: none;">Contact Us</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">About Us</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Careers</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Press</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Corporate information</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul style="list-style-type: none;">
						<li><a href="" class="" style="text-decoration: none; color: orange;">HELP</a></li><br>
						<li><a href="" class="text-white" style="text-decoration: none;">Payments</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Shipping</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Cancellation & Returns</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">FAQ</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Report infringment</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul style="list-style-type: none;">
						<li><a href="" class="" style="text-decoration: none; color: orange;">SOCIAL</a></li><br>
						<li><a href="" class="text-white" style="text-decoration: none;">Facebook</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Twitter</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">YouTube</a></li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul style="list-style-type: none;">
						<li><a href="" class="" style="text-decoration: none; color: orange;">Registered Office Address:</a></li><br>
						<li><a href="" class="text-white" style="text-decoration: none;">A-1/541, Street Number 8, Harsh Vihar</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Delhi-93, India</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">CIN : U51109KA2012PTC066107</a></li>
						<li><a href="" class="text-white" style="text-decoration: none;">Telephone: 044-45614700</a></li>
					</ul>
					<ul style="list-style-type: none;">
						<li><a href="" class="" style="text-decoration: none; color: orange;">Mail Us:</a></li><br>
						<li><a href="" class="text-white" style="text-decoration: none;">MegaMallinfo@gmail.com</a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<iframe style="border-radius: 2%;" class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.534140353!2d77.32278167538357!3d28.70357907562601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfbc9ea3915a1%3A0x96e97d8965b3db1f!2sHarsh%20Vihar%2C%20Gagan%20Vihar%2C%20Ghaziabad%2C%20Delhi%20110093!5e0!3m2!1sen!2sin!4v1686219760260!5m2!1sen!2sin"width="300" height="300" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>		
	</div>	
</div>

<div style="background-color: orange; color: black;" class="container-fluid text-center pt-4 pb-4">
	  Developed By: Yogesh Kumar Gupta <br>
		2022-2023, MegaMall.com, Inc. or its affilitates
</div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/custom.js"></script>

<!-- Alertify JS -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
	alertify.set('notifier','position', 'top-right');
  <?php
  if (isset($_SESSION['message'])) {
  ?>
    alertify.success('<?= $_SESSION['message']; ?>');
    <?php
    unset($_SESSION['message']);
  }
  ?>
</script>


</body>
</html>