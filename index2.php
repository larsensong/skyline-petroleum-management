
<!DOCTYPE html>
<html lang="en">
<head>
	<title>skyline</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';

		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">The home of high quality petroleum</h2>
				<h4 class="caption" style="text-align-last: center;">Your petroleum needs is our speciality. we produce and deliver high quality petroleum at affordable price.</h4>
			</section>
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_product.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="products/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_product.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Product Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>product Name: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section 
 -->
 <!-- Jquery for Slide show on the middle -->
        <!-- <div id='content_wrapper'>
            <div class="slider">
                <ul class="slides">

                    <li class="Slide"><img src="3.jpg" alt="pic1" /></li>
                
                </ul>
            </div> -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links" >
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Location</a></li>
					</ul>

				</li>
						<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Admin Login</a></li>
					</ul>
				</li>

			

				
<?php include_once "includes/footer.php"; ?>
