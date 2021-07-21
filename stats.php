<?php
include 'd.php';
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="../assets/sweetalert/sweetalert.min.css">
	<link rel="stylesheet" type="text/css" href="css/datatables.css"/>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
.effect1{
    -webkit-box-shadow: 0 10px 6px -6px #777;
       -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;
}
@media print {
		.no-printme  {
			display: none;
		}
		.printme  {
			display: block;
		}
	}

	</style>
</head>
<body style="background-color: beige">
	<div class="container-fluid no-printme">
		<div class="row">
			<div style="background-color: black; color: white"><marquee behavior="" direction="">Contact the admin on whatsapp: 08179487522 or 07017286923 for corrections</marquee></div>
		</div>
		<hr style="border: 2px solid black">
	</div>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			<div class="col-md-10 printme">
				<div class="card effect1">
					<h5 class="card-header">Bio-data records of GOUni Students</h5>
					<div class="card-body">
						<table class="table table-responsive table-striped table-hover" >
						  <thead class="table-dark" style="border-top-right-radius: 50%; border-top-left-radius: 50%">
						    <tr class="text-center">
						      <th scope="col">ID</th>
						      <th scope="col">Name</th>
						      <th scope="col">Address</th>
						      <th scope="col">Phone No.</th>
						      <th scope="col">Faculty</th>
						      <th scope="col">Level</th>
						      <th scope="col">D.O.B</th>
                              <th scope="col" class="no-printme">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						      <?php 
				            $var = getFromDb("students");
				            if (count($var) > 0) {
				            foreach ($var as $key => $value) {
				        	?>
						    <tr class="text-center">
						      <th scope="row"><?php echo $value['id']; ?></th>
						      <td><?php echo $value['fullname']; ?></td>
						      <td><?php echo $value['address']; ?></td>
						      <td><?php echo $value['phone']; ?></td>
						      <td><?php echo $value['faculty']; ?></td>
						      <td><?php echo $value['level']; ?></td>
						      <td>SAVED</td>
                              <td class="no-printme"><a href="profile.php?id=<?php echo $value['id'];?>"><i class="fa fa-eye btn text-success" title="view progress" aria-hidden="true"></i></a></td>
						    </tr>
						    <?php }} ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <section class="text-center mt-5 printme">
        <footer>
            <p>- <i class="fa fa-plug" aria-hidden="true"></i>  by Upsilion Academy -</p>
        </footer>
    </section>




	<!--===============================================================================================-->	
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<!--sweetalerts-->
    <script type="text/javascript" src="../assets/sweetalert/sweetalert.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/datatables.min.js"></script>
    <script type="text/javascript">
	    $(document).ready( function () {
            $('.table').DataTable();
        } );
	</script>
<!--===============================================================================================-->
</body>
</html>