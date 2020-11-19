<?php
    require "header.php";
?>
	<main>
	<section>
		<div class="mail">
			<form action="https://formspree.io/f/mnqozpdd" method="POST" id="my-form">
				
			<div class="form-group">
				<label for="firstName">First-Name</label>
				<input type="text" id="firstName" name="firstName">
				</div>
				
				<div class="form-group">
				<label for="lastName">Last-Name</label>
				<input type="text" id="lastName" name="lastName">
				</div>
				
				<div class="form-group">
				<label for="phoneNumber">Phone-Number</label>
				<input type="text" id="phoneNumber" name="phoneNumber">
				</div>
				
				<div class="form-group">
				<label for="email">Email</label>
				<input type="text" id="email" name="email">
				</div>
				
	            <div class="form-group">
				<label for="message">Description</label>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
				</div>
				
				<input type="file" id="myFile" name="filename">
 
				<button type="submit">Submit</button>
			</form>
			</div>
			<div id="status"></div>
		</section>
		<script src="js/main.js"></script>
	<br><br>
	<br>
	</main>
</body>
</html>
<?php
    require "footer.php";
?>

