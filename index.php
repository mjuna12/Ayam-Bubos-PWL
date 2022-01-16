
<?php 
include 'koneksi/connection.php';
session_start(); 

$id_customer = isset($_POST['id_customer']) ? $_POST['id_customer'] : '';
$query = "SELECT * from customer where id_customer = '$id_customer'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

isset($nama['nama_customer'])
?>



								<?php include("partials/header.php"); ?>
								<div class="header_extra ml-auto">
									<div class="shopping_cart">
										<a href="cart.php">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
												<g>
													<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z" />
												</g>
											</svg>
											<div>Cart <span>(
													<?php if(isset($_SESSION["nomor"])){ echo $_SESSION["nomor"]; } else{ echo 0;} ?>)</span></div>
										</a>
									</div>


									<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header_social">
				<nav class="main_nav">
					<ul>
						<?php if($id_customer == ""){ ?>
						<li><a href="admin/index.php">Login</a>
							<?php }  
						else 
						{?>
						<li class="hassubs">
							<a>Hi!
								<?php echo $nama ?></a>
							<ul>
								<li><a href="admin/process/logout.php">Logout</a></li>
							</ul>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</header>

		

		<div class="menu menu_mm trans_300">
			<div class="menu_container menu_mm">
				<div class="page_menu_content">

					<div class="page_menu_search menu_mm">
						<form action="#">
							<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
						</form>
					</div>
					<ul class="page_menu_nav menu_mm">
						<li class="page_menu_item menu_mm">
							<a href="index.php">Home</a>
						</li>
						<li class="page_menu_item has-children menu_mm">
							<a href="categories.html">Kategori<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<?php
									$query = 
									"SELECT * from kategori order by nama_kategori";
									
									$result = mysqli_query($con, $query);

									if (mysqli_num_rows($result) > 0)
									{
										$index = 1;

										while($row = mysqli_fetch_assoc($result))
										{
											$id_kategori = $row['id_kategori'];
											echo "
												<li class='page_menu_item menu_mm'><a href='categories.php?id_kategori=$id_kategori'>".$row['nama_kategori']."</a></li>
											";
										}
									}
								?>
							</ul>
						</li>
						<?php if($id_customer == ""){ ?>
						<li class="page_menu_item menu_mm">
							<a href="admin/index.php">Login</a>
						</li>
						<?php }  
						else 
						{?>
						<li class="page_menu_item has-children menu_mm">
							<a href="categories.html">
								<?php echo $nama; ?><i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<li class='page_menu_item menu_mm'><a href='admin/process/logout.php'>Logout</a></li>
							</ul>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>

		

		<div class="home">
			<div class="home_slider_container">

				
				<div class="owl-carousel owl-theme home_slider">

					
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(images/fotoayam.jpg)"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
											<div class="home_slider_title">
												<font size="5px">Ayam Bubos</font>
												<br> Buy 1 Get 1.
											</div>
											<div class="home_slider_subtitle">Grab Now!</div>
											<div class="button button_light home_button"><a href="#produk">
													<font color="black">Beli Sekarang</font>
												</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		
		<section id="produk">
			<div class="products">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="product_grid">
								<?php
								$query = 
								"select * from makanan";
								
								$result = mysqli_query($con, $query);

								if (mysqli_num_rows($result) > 0)
								{
									$index = 1;

									while($row = mysqli_fetch_assoc($result))
									{
										$id_makanan = $row['id_makanan'];
										echo "
										<div class='product'>
										<a href='product.php?id_makanan=$id_makanan'>
											<div class='product_image'><img src='images/". $row['gambar'] ."' alt=''></div>
											<div class='product_content'>
												<div class='product_title'>".$row['nama_makanan']."</a></div>
												<div class='product_price'>Rp.".$row['harga'].",-</div>
												<br>
											</div>
										</div>
										";
									}
								}
                            ?>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		

		<div class="icon_boxes">
			<div class="container">
				<div class="row icon_box_row">

					
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/payment-method.png" alt=""></div>
							<div class="icon_box_title">Harga Murah Dijamin Kenyang</div>
							<div class="icon_box_text">
								<p>Pesan Makanan Disini Auto Kenyang, Ambil Makan Sepuasnya</p>
							</div>
						</div>
					</div>

					
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/roasted-chicken.png" alt=""></div>
							<div class="icon_box_title">Nikmat, Lezat, dan Menggelegar</div>
							<div class="icon_box_text">
								<p>Khawatir rasa tidak enak? Jangan khawatir, karena Ayam Bubos menyediakan banyak varian rasa!</p>
							</div>
						</div>
					</div>

					
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/stopwatch.png" alt=""></div>
							<div class="icon_box_title">24 Jam Customer Service</div>
							<div class="icon_box_text">
								<p>Pemesanan Katering Hubungi Kami 085226374676</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<?php include("partials/footer.php"); ?>
