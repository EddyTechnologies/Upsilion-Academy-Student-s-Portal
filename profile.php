<?php include 'd.php'; 
if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile on cards</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	background-color: #38d39f;
	font-family: Montserrat, sans-serif;
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 100vh;
	margin: 0;
}

h3 {
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
	background-color: #0b855b;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: white;
	padding-top: 30px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}

.card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
}

.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
}

button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #076645;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #03BFCB;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
	</style>
</head>
<body>
	<?php 
		$data = getFromDb("students", $id);
		foreach ($data as $key => $value) {
	 ?>
	<div class="card-container">
	<span class="pro">NEWBIE</span>
	<img class="round" src="img/gouni.jpg" alt="user" />
	<h3><?php echo strtoupper($value['fullname']);?></h3>
	<h6>ADDRESS: <?php echo $value['address'];?></h6>
    <p>D.O.B: <?php echo $value['dob'];?></p>
	<p>LEVEL: <?php echo $value['level'];?> <br/>CONTACT: <?php echo $value['phone'];?></p>
	<div class="buttons">
		<button class="primary">
			Message
		</button>
		<button class="primary ghost">
			Following
		</button>
	</div>
	<div class="skills">
		<h6>Skills</h6>
		<ul>
			<li>Hardware</li>
            <li style="opacity: 20%">HTML</li>
			<li style="opacity: 20%">CSS</li>
			<li style="opacity: 20%">UI / UX</li>
			<li style="opacity: 20%">JavaScript</li>
            <li style="opacity: 20%">Front End Development</li>
            <li style="opacity: 20%">Back End Development</li>
			<li style="opacity: 20%">React</li>
			<li style="opacity: 20%">Node</li>
            <li style="opacity: 20%">App Development</li>
		</ul>
	</div>
</div>
<?php } ?>

<footer>
	<p>
		- Design made by
		<a target="_blank" href="">Eddy</a> -
	</p>
</footer>
</body>
</html>