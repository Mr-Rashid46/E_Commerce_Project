<?php session_start(); ?>


<!doctype html>
<html lang="en">

<head>
  <title>FOOTWEAR</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome 6 Free CDN (includes fa-solid icons) -->
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar bg-body-tertiary d-flex justify-content-start align-item-center">
    <div class="container-fluid">
      <section id="logo">
        <a href="#"><img src="images/logo.jpg" class="logo mx-50px" alt="" style="height:4vw;"></a>
      </section>
      <form class="d-flex justify-content-center align-item-center">
        <div class="container d-flex align-item-center justify-content-center w-100">
         <select class="form-select width=" aria-label="Default select example">
           <option selected>Available Brands</option>
          <option value="1">Puma </option>
            <option value="2">Addidas</option>
            <option value="3">Nike</option>
          </select>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="login.php" class="b1">Login</a> 
        </div>
        <div>
<a href="cart.php" class="cart">
  <i class="fa-solid fa-cart-shopping" style="color: black; font-size: 2vw; padding: 6px;"></i>
</a>        </div>
    </div>
      </form>
    </div>
  </nav>
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/logoimg.jpg" class="d-block w-100" alt="Image 1" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/logoimg2.jpg" class="d-block w-100" alt="Image 2"  style="height: 400px;">
  </div>
  <div class="carousel-item">
      <img src="images/logoimg3.jpg" class="d-block w-100" alt="Image 2"  style="height: 400px;">
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

  <!--fIRST cARD-->
  <div class="card-group">
    <div class="card mx-2">
      <img src="./images/img1.jpeg" class="card-img-top" alt="..." style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Addidas</h3>
          <p class="shoe-price">&#8377;1340.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> BLUE</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>

            <div>
              <!-- <a href="card1.html"><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button></a> -->
              <form method="POST" action="buy_now.php">
                  <input type="hidden" name="name" value="Addidas">
                  <input type="hidden" name="price" value="1340.99">
                  <input type="hidden" name="image" value="images/img1.jpeg">
                  <button type="submit" 
                    style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Buy Now
                  </button>
              </form>


            <button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img2.jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Puma</h3>
          <p class="shoe-price">&#8377;555.00</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Black/Brown</p>
            <p><strong>Material:</strong> Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div> 
              <form action="buy_now.php" method="POST">
                  <input type="hidden" name="name" value="Nike Air Max 270">
                  <input type="hidden" name="price" value="550.99">
                  <input type="hidden" name="image" value="images/img13 (1).jpeg">
                  <button type="submit" class="btn btn-success">Buy Now</button>
              </form>

              <!-- <a href="cart.html"><button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart -->
              <!-- </button></a> -->

              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="name" value="Nike Air Max 270">
                <input type="hidden" name="price" value="550.99">
                <input type="hidden" name="image" value="images/img13 (1).jpeg">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img3 (1).jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title"> Air Max 270</h3>
          <p class="shoe-price">&#8377;1450.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong>  White</p>
            <p><strong>Material:</strong>Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div>

            <form action="buy_now.php" method="POST">
                <input type="hidden" name="name" value="Air Max 270">
                <input type="hidden" name="price" value="1450.99">
                <input type="hidden" name="image" value="images/img3 (1).jpeg">
                <button type="submit" class="btn btn-success">Buy Now</button>
            </form>


             <!-- <a href="cart.html"> <button
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a> -->
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="name" value="Air Max 270">
                <input type="hidden" name="price" value="1450.99">
                <input type="hidden" name="image" value="images/img3 (1).jpeg">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SECOND CARD    -->

  <div class="card-group">
    <div class="card mx-2">
      <img src="./images/img4 (1).jpeg" class="card-img-top" alt="..." style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Nike Air Max 720</h3>
          <p class="shoe-price">&#8377;1209.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Brown</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="name" value="Nike Air Max 270">
                <input type="hidden" name="price" value="550.99">
                <input type="hidden" name="image" value="images/img13 (1).jpeg">
                <button type="submit" class="add-to-cart"
                  style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                  Add to Cart
                </button>
             </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img5.jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Puma 100</h3>
          <p class="shoe-price">&#8377;889.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Dark Blue</p>
            <p><strong>Material:</strong> Rubber, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <a href="cart.html"> <button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img6.jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Addidas</h3>
          <p class="shoe-price">&#8377;759.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Black </p>
            <p><strong>Material:</strong>Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

              <a href="cart.html"> <button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--THIRD CARD-->

  <div class="card-group">
    <div class="card mx-2">
      <img src="./images/img7(4).jpeg" class="card-img-top" alt="..." style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Nike Air</h3>
          <p class="shoe-price">&#8377;999.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Brown / White</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <a href="cart.html"> <button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img8 (1).jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Puma 700</h3>
          <p class="shoe-price">&#8377;529.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Red / White</p>
            <p><strong>Material:</strong> Pure Leather</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <a href="cart.html"> <button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img9 (5).jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Nike Air 200</h3>
          <p class="shoe-price">&#8377;800.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Black/White</p>
            <p><strong>Material:</strong> Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <a href="cart.html"><button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a> 
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--Fourth CARD-->

  <div class="card-group">
    <div class="card mx-2">
      <img src="./images/img10 (1).jpeg" class="card-img-top" alt="..." style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Puma</h3>
          <p class="shoe-price">&#8377;1999.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong>Blue / Silver</p>
            <p><strong>Material:</strong> Rubber, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

              <a href="cart.html"><button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img11 (1).jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Addidas</h3>
          <p class="shoe-price">&#8377;1200 </p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Blue/White</p>
            <p><strong>Material:</strong> Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

               <a href="cart.html"><button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img12 (1).jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Air Jordan</h3>
          <p class="shoe-price">&#8377;750.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Green/White</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <a href="cart.html"> <button class="add-to-cart" 
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Fifth CARD-->

  <div class="card-group">
    <div class="card mx-2">
      <img src="./images/img13 (1).jpeg" class="card-img-top" alt="..." style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Nike Air Max 270</h3>
          <p class="shoe-price">&#8377;550.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Blue/White</p>
            <p><strong>Material:</strong> Leather, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <a href="cart.html"> <button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img14 (1).jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">Addidas </h3>
          <p class="shoe-price">&#8377;1899.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Blue/White</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

             <a href="cart.html">  <button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mx-2">
      <img src="./images/img15 (1).jpeg" class="card-img-top" alt="" style="height:15rem;">
      <div class="card-body">
        <div class="shoe-info">
          <h3 class="shoe-title">PUMA </h3>
          <p class="shoe-price">&#8377;1298.99</p>

          <div class="shoe-attributes">
            <p><strong>Color:</strong> Black/White</p>
            <p><strong>Material:</strong> Mesh upper, Rubber sole</p>
            <p><strong>Type:</strong> Casual / Athletic</p>
          </div>

          <div class="shoe-sizes">
            <strong>Available Sizes:</strong>
            <span class="size">7</span>
            <span class="size">8</span>
            <span class="size">9</span>
            <span class="size">10</span>
            <span class="size">11</span>
            <div><button
                style="padding: 9px 25px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
              </button>

              <a href="cart.html"><button class="add-to-cart"
                style="padding: 9px 25px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Add to Cart
              </button></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="main.js"></script>
<script src="cart.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>