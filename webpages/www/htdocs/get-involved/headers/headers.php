<?php
	// echo "<B>Decrypted Line:</B> " .  $_SERVER['DOCUMENT_URI'] .  "<UL>$Decrypted_k</UL>";
	if ( ! empty ($k) && $SystemUser_ID > 0 ) { $MenuLogin = "logged"; }
	$imgtoshow = "RepMyBlock.png";
?><!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
	<HEAD>
		<META charset="UTF-8">
		<TITLE>Rep My Block - Represent My Block - Nominate A Candidate</TITLE>
		<link rel="icon" href="/pics/favicon/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/pics/favicon/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="/pics/icons/css/all.min.css" >		
		<link rel="stylesheet" type="text/css" href="/font/montserrat.css">
		<link rel="stylesheet" type="text/css" href="/get-involved/css/RepMyBlock.css">		
	</HEAD>
	
	<BODY>
		<DIV class="header">
		 <div class="header-left">
			  <a href="/" class="logo"><IMG SRC="/pics/RepMyBlock.png" height=70 class="header-logo"></a>
		</DIV>
		  <div class="header-right">
  	  	<a href="/contact">CONTACT</a>
		  	<?php if ( $MenuLogin == "logged") { ?>
					 <a href="/get-involved/?k=<?= $NewKToEncrypt ?>" class="right<?php if ($BigMenu == "profile") { echo " active"; } ?>">LOGOUT</a>
				<?php } else { ?>
		    	<a href="/get-involved/login">LOGIN</a>
		    <?php } ?>  
		   
		  </DIV>
		</DIV> 

<?php $NewKToEncrypt = EncryptURL("SystemUser_ID=" . $SystemUser_ID); ?>

<div class="navbar">
<?php if ( $MenuLogin == "logged") { ?>
  <a href="/get-involved/profile/?k=<?= $NewKToEncrypt ?>" class="right<?php if ($BigMenu == "profile") { echo " active"; } ?>">PROFILE</a>
  <a href="/get-involved/nominate/?k=<?= $NewKToEncrypt ?>"<?php if ($BigMenu == "nominate") { echo " class=\"active\""; } ?>>NOMINATE</a>
  <a href="/get-involved/list/?k=<?= $NewKToEncrypt ?>"<?php if ($BigMenu == "represent") { echo " class=\"active\""; } ?>>REPRESENT</a>
  <a href="/about/?k=<?= $NewKToEncrypt ?>"<?php if ($BigMenu == "home") { echo " class=\"active\""; } ?>>ABOUT</a>
<?php } else { ?>
  <a href="/where-to-file/prepare-to-file-your-petition-to-the-board-of-elections.html" class="right<?php if ($BigMenu == "profile") { echo " active"; } ?>">HOW TO</a>
  <a href="/get-involved/propose"<?php if ($BigMenu == "nominate") { echo " class=\"active\""; } ?>>NOMINATE</a>
  <a href="/get-involved/interested"<?php if ($BigMenu == "represent") { echo " class=\"active\""; } ?>>REPRESENT</a>
  <a href="/about/"<?php if ($BigMenu == "home") { echo " class=\"active\""; } ?>>ABOUT</a>
<?php } ?>  
</div>
