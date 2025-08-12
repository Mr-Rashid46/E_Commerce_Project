//  <script>
//   // On page load, update cart count
//   document.addEventListener("DOMContentLoaded", function () {
//     let cart = JSON.parse(localStorage.getItem('cart')) || [];
//     document.querySelector('.fa-cart-shopping').innerText = cart.length;
//   });

//   // Add click event to all Add to Cart buttons
//   document.querySelectorAll('.add-to-cart').forEach(button => {
//     button.addEventListener('click', function () {
//   const card = button.closest('.card');
//   const title = card.querySelector('.shoe-title').innerText;
//   const price = card.querySelector('.shoe-price').innerText;
//   const image = card.querySelector('img').src;

//   let cart = JSON.parse(localStorage.getItem('cart')) || [];
//   cart.push({ title, price, image });
//   localStorage.setItem('cart', JSON.stringify(cart));

//   // Update cart count icon (if you have one)
//   document.querySelector('.fa-cart-shopping').innerText = cart.length;

//   alert(`${title} added to cart!`);

//   // Redirect to cart page AFTER adding to cart
//   window.location.href = 'cart.html';
// });

// </script>

/////////////////////
// {* <script>
  // On page load, update cart count
//   document.addEventListener("DOMContentLoaded", function () {
//     let cart = JSON.parse(localStorage.getItem('cart')) || [];
//     document.querySelector('.fa-cart-shopping').innerText = cart.length;
//   });

//   // Add click event to all Add to Cart buttons
//   document.querySelectorAll('.add-to-cart').forEach(button => {
//     button.addEventListener('click', function () {
//       const card = button.closest('.card');
//       const title = card.querySelector('.shoe-title').innerText;
//       const price = card.querySelector('.shoe-price').innerText;
//       const image = card.querySelector('img').src;

//       let cart = JSON.parse(localStorage.getItem('cart')) || [];
//       cart.push({ title, price, image });
//       localStorage.setItem('cart', JSON.stringify(cart));

//       // Update cart count icon (if you have one)
//       document.querySelector('.fa-cart-shopping').innerText = cart.length;

//       alert(`${title} added to cart!`);

//       // Redirect to cart page AFTER adding to cart
//       window.location.href = 'cart.html';
//     });
//   });
// </script> */}
