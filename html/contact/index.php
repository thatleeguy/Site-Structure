<? include( $_SERVER['DOCUMENT_ROOT'].'/includes/_header.php'); ?>

	<?
	if (file_exists('_local_nav.php')){
	include '_local_nav.php';
	}
	?>

<h2>Contact Us</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<form action="index_submit" method="get" accept-charset="utf-8"></p>
	<p><label for="name">Name</label><br /><input type="text" name="name" value="" id="name"></p>
	<p><label for="phone_number">Phone Number</label><br /><input type="text" name="phone_number" value="" id="phone_number"></p>
	<p><label for="email">Email</label><br /><input type="text" name="email" value="" id="email"></p>
	<p><label for="message">Message</label><br /><textarea name="message" rows="8" cols="40"></textarea></p>
	<p><input type="submit" value="Continue &rarr;"></p>
</form>

<? include $_SERVER['DOCUMENT_ROOT'].'/includes/_footer.php'; ?>