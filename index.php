<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Tilmeld dig til vores nyhedsbrev - Diving 2000</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link id="ctl00_favicon" rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<style type="text/css">	
		html { 
		  background: url(images/bg.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  background-size: cover;
		  font-family: 'Raleway', 'Arial', 'Helvetica', sans-serif;
		  font-size:18px;
		}
		body {margin-top:40px;}

		#formcontainer {
			margin:0 auto;
			width:500px;
			background-color:rgba(255,255,255,0.7);
			padding:20px 30px 20px 30px;			
			border: 2px solid rgba(255,255,255,0.2);
    	border-radius: 3px;		
		}
		#formcontainer h1 {
			padding-top:0px;
			margin-top:0px;
		}
		#formcontainer label {
			font-weight:bold;
			display:block;
			margin: 20px 0px 5px 0px;
		}
		#formcontainer input, #formcontainer select {
			display:block;
			font-size:18px;
			width:100%;
			box-sizing:border-box;
		}
		#formcontainer #submit {
			margin-top:30px;
			width:148px;
		}

		p#footer {
			font-size:14px;
			font-weight:bold;
		}

		a {color:#000;}
		
		.form-row {
			display:flex;
			justify-content:space-between;
		}
		.form-row > * {
			width:48%;
		}
	</style>
	<script type="text/JavaScript">
	function validate(myform) {
		if (myform.data_Navn.value == '') {
			alert('Please fill in your name');
			myform.data_Navn.focus();
			return false;
		}
		if (myform.email_address.value == '') {
			alert('Please fill in your email address');
			myform.data_Navn.focus();
			return false;
		}
		return true;
	}
	</script>
</head>
<body>
	<div id="formcontainer">
		<?php
		if (isset($_GET['signedup'])) {
		?>
		<h1>Du er blevet tilmeldt</h1>
		<p id="intro">Vi ser frem til at sende dig vores næste nyhedsbrev.</p>
		<p>&raquo; <a href="http://nyhedsbrev.diving2000.dk/">Tilbage til formularen</a>
		<script type="text/JavaScript">		
		setTimeout("location.href = 'http://nyhedsbrev.diving2000.dk/';",5000);
		</script>
		<?php
		} else {
		?>
		<h1>Tilmeld dig vores nyhedsbrev</h1>
		<p id="intro">Så vil du få nyheder om Diving 2000, vores tilbud og events.</p>

		<form style="text-align:left;" method="POST" action="HLhandler.php" onsubmit="return validate(this);">
			<label for="email_id">E-mail adresse</label>
			<input type="email" name="email_address" id="email_id">

			<div class="form-row">
				<div>
					<label for="firstname_id">Fornavn</label>
					<input type="text" name="data_Fornavn" id="firstname_id">
				</div>
				<div>
					<label for="lastname_id">Efternavn</label>
					<input type="text" name="data_Efternavn" id="lastname_id">
				</div>
			</div>

			<label for="country_id">Land</label>
			<select name="data_Land" id="country_id">
				<option value="Albania">Albania</option>
				<option value="Andorra">Andorra</option>
				<option value="Austria">Austria</option>
				<option value="Azerbaijan">Azerbaijan</option>
				<option value="Belarus">Belarus</option>
				<option value="Belgium">Belgium</option>
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Croatia">Croatia</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czech Republic">Czech Republic</option>
				<option value="Denmark" selected>Danmark</option>
				<option value="Estonia">Estonia</option>
				<option value="Finland">Finland</option>
				<option value="France">France</option>
				<option value="Georgia">Georgia</option>
				<option value="Germany">Germany</option>
				<option value="Greece">Greece</option>
				<option value="Hungary">Hungary</option>
				<option value="Iceland">Iceland</option>
				<option value="Republic of Ireland">Republic of Ireland</option>
				<option value="Italy">Italy</option>
				<option value="Kazakhstan">Kazakhstan</option>
				<option value="Kosovo">Kosovo</option>
				<option value="Latvia">Latvia</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lithuania">Lithuania</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Republic of Macedonia">Republic of Macedonia</option>
				<option value="Malta">Malta</option>
				<option value="Moldova">Moldova</option>
				<option value="Monaco">Monaco</option>
				<option value="Netherlands">Netherlands</option>
				<option value="Norway">Norway</option>
				<option value="Poland">Poland</option>
				<option value="Portugal">Portugal</option>
				<option value="Romania">Romania</option>
				<option value="Russia">Russia</option>
				<option value="San Marino">San Marino</option>
				<option value="Serbia">Serbia</option>
				<option value="Slovakia">Slovakia</option>
				<option value="Slovenia">Slovenia</option>
				<option value="Spain">Spain</option>
				<option value="Sweden">Sweden</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Turkey">Turkey</option>
				<option value="Ukraine">Ukraine</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="Other">Other</option>
			</select>

			<input type="submit" id="submit" value="Tilmeld">

			<p id="footer">Vi deler ikke dine informationer med andre.</p>
		</form>
		<?php 
		}
		?>
	</div>
</body>
</html>
