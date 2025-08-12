<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <title>FOOTWEAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .navbar {
      background: linear-gradient(90deg, #292E49, #536976);
      padding: 1rem;
    }
    .navbar a {
      color: white !important;
      font-weight: 600;
    }
    .navbar .cart i {
      color: #ffc107 !important;
    }
    .card {
      transition: transform 0.3s ease-in-out;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
      transform: scale(1.02);
    }
    .shoe-title {
      color: #333;
    }
    .shoe-price {
      color: #28a745;
      font-weight: bold;
    }
    .add-to-cart, .btn-success {
      margin-top: 10px;
    }
    .carousel-inner img {
      object-fit: cover;
    }
body {
  background-color: #0e0e0e;
  color: #f0f0f0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.navbar {
  background: linear-gradient(to right, #000000, #4a3f35);
  box-shadow: 0px 4px 10px rgba(255, 215, 0, 0.1);
}
.navbar a.nav-link,
.navbar a.navbar-brand {
  color: #ffd700 !important;
  transition: color 0.3s ease;
}
.navbar a.nav-link:hover {
  color: #ffffff !important;
}
.form-select {
  background-color: #1e1e1e;
  color: #ffd700;
  border: 1px solid #ffd700;
}
.carousel-inner img {
  border-radius: 10px;
  box-shadow: 0 6px 20px rgba(255, 215, 0, 0.15);
}
.card {
  background-color: #1a1a1a;
  border: 1px solid #2c2c2c;
  border-radius: 15px;
  color: #fff;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}

.card:hover {
  transform: scale(1.04);
  box-shadow: 0 10px 25px rgba(255, 215, 0, 0.2);
}

.card-img-top {
  height: 220px;
  object-fit: cover;
  border-bottom: 1px solid #333;
}
.shoe-title {
  color: #ffd700;
  font-size: 1.2rem;
  font-weight: bold;
}

.shoe-price {
  color: #00ff95;
  font-size: 1.1rem;
  margin-bottom: 0.5rem;
}

.btn-success, .btn-primary {
  width: 100%;
  font-weight: 600;
  border-radius: 25px;
  transition: background-color 0.3s ease;
}

.btn-success {
  background-color: #28a745;
  border: none;
}

.btn-success:hover {
  background-color: #1e7e34;
}

.btn-primary {
  background-color: #ffc107;
  border: none;
  color: #000;
}
.btn-primary:hover {
  background-color: #e0a800;
  color: #fff;
}
footer.bg-dark {
  background-color: #111 !important;
  color: #d4d4d4;
  border-top: 1px solid #333;
}

footer h5 {
  font-weight: bold;
  color: #ffd700;
}

footer a {
  color: #d4d4d4;
  transition: color 0.3s ease;
}

footer a:hover {
  color: #ffc107;
}
footer .border-top {
  border-top: 1px solid #333 !important;
}
@media (max-width: 576px) {
  .navbar .navbar-brand img {
    height: 35px !important;
  }
  .form-select {
    margin-bottom: 10px;
  }
}
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.jpg" alt="Logo" style="height: 4vw;">
      </a>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <select class="form-select me-3">
              <option selected>Available Brands</option>
              <option value="1">Puma</option>
              <option value="2">Addidas</option>
              <option value="3">Nike</option>
            </select>
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="fa-solid fa-user"></i> Profile
            </a>
          </li>
          <li class="nav-item">
            <a href="cart.php" class="nav-link cart">
              <i class="fa-solid fa-cart-shopping fa-xl"></i>
            </a>
          </li>
          <li>
            <a class="nav-link" href="my_orders.php">My Orders</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/logoimg.jpg" class="d-block w-100" alt="..." style="height: 400px;">
      </div>
      <div class="carousel-item">
        <img src="images/logoimg2.jpg" class="d-block w-100" alt="..." style="height: 400px;">
      </div>
      <div class="carousel-item">
        <img src="images/logoimg3.jpg" class="d-block w-100" alt="..." style="height: 400px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- PRODUCTS SECTION -->
  <div class="container">
    <h2 class="text-center mb-4">Top Footwear Picks</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- You can include product cards dynamically here -->
      <!-- Example Product Card -->
      <div class="col">
        <div class="card h-70">
          <img src="images/img1.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Addidas</h5>
            <p class="shoe-price">&#8377;1340.99</p>
            <p><strong>Color:</strong> BLUE</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="Addidas">
              <input type="hidden" name="price" value="1340.99">
              <input type="hidden" name="image" value="images/img1.jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="Addidas">
              <input type="hidden" name="price" value="1340.99">
              <input type="hidden" name="image" value="images/img1.jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images/img2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Puma</h5>
            <p class="shoe-price">&#8377;555.00</p>
            <p><strong>Color:</strong> Black Brown</p>
            <p><strong>Material:</strong> Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="puma">
              <input type="hidden" name="price" value="555.00">
              <input type="hidden" name="image" value="images/img2.jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="puma">
              <input type="hidden" name="price" value="555.00">
              <input type="hidden" name="image" value="images/img2.jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img3 (1).jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Air Max 270</h5>
            <p class="shoe-price">&#8377;1450.99</p>
            <p><strong>Color:</strong> White</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="Air Max 270">
              <input type="hidden" name="price" value="&#8377;1450.99">
              <input type="hidden" name="image" value="images/img3 (1).jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="Air Max 270">
              <input type="hidden" name="price" value="&#8377;1450.99">
              <input type="hidden" name="image" value="images/img3 (1).jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img4 (1).jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Nike Air Max 720</h5>
            <p class="shoe-price">&#8377;1209.99</p>
            <p><strong>Color:</strong>  Brown</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
            <input type="hidden" name="name" value="Nike Air Max 720">
            <input type="hidden" name="price" value="&#8377;1209.99">
            <input type="hidden" name="image" value="images\img4 (1).jpeg">
            <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            
            <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="name" value="Nike Air Max 720">
            <input type="hidden" name="price" value="&#8377;1209.99">
            <input type="hidden" name="image" value="images\img4 (1).jpeg">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img5.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Pumma</h5>
            <p class="shoe-price">&#8377;800.00</p>
            <p><strong>Color:</strong> BLACK</p>
            <p><strong>Material:</strong> Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="Pumma">
              <input type="hidden" name="price" value="&#8377;800.00">
              <input type="hidden" name="image" value="images\img5.jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="Pumma">
              <input type="hidden" name="price" value="&#8377;800.00">
              <input type="hidden" name="image" value="images\img5.jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img6.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Air Jordan</h5>
            <p class="shoe-price">&#8377;775.99</p>
            <p><strong>Color:</strong> BLUE</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="Air Jordan">
              <input type="hidden" name="price" value="&#8377;775.99">
              <input type="hidden" name="image" value="images\img6.jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="Air Jordan">
              <input type="hidden" name="price" value="&#8377;775.99">
              <input type="hidden" name="image" value="images\img6.jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img7.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">ema sports</h5>
            <p class="shoe-price">&#8377;656.99</p>
            <p><strong>Color:</strong> BLUE</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="ema sports">
              <input type="hidden" name="price" value="&#8377;656.99">
              <input type="hidden" name="image" value="images\img7.jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="ema sports">
              <input type="hidden" name="price" value="&#8377;656.99">
              <input type="hidden" name="image" value="images\img7.jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img8 (1).jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">sparx</h5>
            <p class="shoe-price">&#8377;1659.87</p>
            <p><strong>Color:</strong> BLUE</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="sparx">
              <input type="hidden" name="price" value="&#8377;1659.87">
              <input type="hidden" name="image" value="images\img8 (1).jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="sparx">
              <input type="hidden" name="price" value="&#8377;1659.87">
              <input type="hidden" name="image" value="images\img8 (1).jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img9 (1).jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Wrogon</h5>
            <p class="shoe-price">&#8377;3000.00</p>
            <p><strong>Color:</strong> BLUE</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="Wrogon">
              <input type="hidden" name="price" value="&#8377;3000.00">
              <input type="hidden" name="image" value="images\img9 (1).jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="Wrogon">
              <input type="hidden" name="price" value="&#8377;3000.00">
              <input type="hidden" name="image" value="images\img9 (1).jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="images\img11 (1).jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="shoe-title">Nike Air Max 270</h5>
            <p class="shoe-price">&#8377;1224.99</p>
            <p><strong>Color:</strong> BLUE</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
            <form method="POST" action="buy_now.php">
              <input type="hidden" name="name" value="Nike Air Max 270">
              <input type="hidden" name="price" value="&#8377;1224.99">
              <input type="hidden" name="image" value="images\img11 (1).jpeg">
              <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="name" value="Nike Air Max 270">
              <input type="hidden" name="price" value="&#8377;1224.99">
              <input type="hidden" name="image" value="images\img11 (1).jpeg">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Repeat product cards -->


    </div>
  </div>

  <!-- fotter part-->
   <footer class="bg-dark text-white pt-4 mt-5">
    <div class="container">
      <div class="row">
        <!-- Brand / About -->
        <div class="col-md-4 mb-3">
          <h5 class="text-warning">FootwearX</h5>
          <p>Step into comfort and style. Explore the latest collection of premium footwear brands with us.</p>
        </div>

        <!-- Quick Links -->
        <div class="col-md-4 mb-3">
          <h5 class="text-warning">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white text-decoration-none">Home</a></li>
            <li><a href="profile.php" class="text-white text-decoration-none">My Profile</a></li>
            <li><a href="cart.php" class="text-white text-decoration-none">Cart</a></li>
            <li><a href="orders.php" class="text-white text-decoration-none">My Orders</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-md-4 mb-3">
          <h5 class="text-warning">Contact Us</h5>
          <p>Email: support@footwearx.com</p>
          <p>Phone: +91 8856032177</p>
          <div>
            <a href="#" class="text-white me-2"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="#" class="text-white me-2"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#" class="text-white me-2"><i class="fab fa-twitter fa-lg"></i></a>
          </div>
        </div>
      </div>
      <div class="text-center py-3 border-top mt-3">
        &copy; <?= date('Y') ?> FootwearX. All rights reserved.
      </div>
    </div>
  </footer>

  <script src="main.js"></script>
  <script src="cart.js"></script>
</body>

</html>
