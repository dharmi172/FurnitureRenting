<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurnitureRenting</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- styling css -->
    <link rel="stylesheet" href="style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome-5/fontawesome-css/all.css">
</head>
<body>

    <!-- navbar -->
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <a href="" class="fw-bold logo" >VastuRent</a>
      <!-- user -->
      <a href= "login.php">
      <i class="bi bi-person-circle" id="userLogo"></i></a>
      <!-- search -->
      <a href=""><i class="bi bi-search" id="searchBar"></i></button></a>
      <!-- add cart -->
      <a href="">
           <i class="bi bi-bag-dash" id="cartBag"></i></button></a>

      
      
    </a>
  </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h1 class="modal-title fs-5 d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Login
            </h1>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" class="btn btn-dark shadow-none">Login</button>
                <a href="javascript: void(0)" class="text-secondary text-decoration-none ">Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

    <!-- main page -->
    <div class="container">
        <img src="images/IMG-20240629-WA0009.JPG" class="homePage">
    </div>

    <!-- category -->
    <ul class="indicator">
				<li data-filter="all" class="active"><a href="#">All</a></li>
				<li data-filter="Sofa"><a href="#">Sofa</a></li>
				<li data-filter="Bed"><a href="#">Bed</a></li>
				<li data-filter="Dining table"><a href="#">Dining Table</a></li>
				<li data-filter="Bed side desk"><a href="#">Bed side desk</a></li>
			</ul>

			<div class="filter-condition">
				<span>View As a</span>
				<select name="" id="select">
					<option value="Default">Default</option>
					<option value="LowToHigh">Low to high</option>
					<option value="HighToLow">High to low</option>
				</select>
			</div>
		</header>

    
		<div class="product-field">
			<ul class="items">
				<li data-category="" data-price="">
					<picture>
						<img src="image/s1..png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Sofa</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$45.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/b1.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Bed</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$35.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/s2.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Sofa</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$40.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/b2.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Bed</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$42.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/s4.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Sofa</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$46.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/b3.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Bed</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$55.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/d3.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Dining table</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$25.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/d2.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Dining table</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$20.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/d1.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Dining table</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$15.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/d4.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Dining table</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$22.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/z1.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Bed side desk</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Rent now</small>
					</div>
					<h4>$33.78</h4>
				</li>
			</ul>


    <!-- chat button -->
    <button type="button" class="btn message-us-button" id="messageUsButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <a href="" class="text-decoration-none text-white"><i class="bi bi-chat-left-dots"></i>Message</a>
    </button>
    
    

    <!-- footer -->
    <div class="container bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">Furtinure</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, debitis!
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h3>
      <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      
      <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
      <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
      <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow Us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter-x"></i> Twitter
      </a>
      <br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram"></i> Instagram
      </a>
      <br>
     <a href="#" class="d-inline-block text-dark text-decoration-none">
      <i class="bi bi-facebook"></i> Facebook
      </a>

    </div>
  </div>
 </div>

<div class="text-center p-3" id="footer"> 
  Designed and Developed by XYZ
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

<!-- bootstrap javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- <script src="script.js"></script> -->



</body>
</html>
