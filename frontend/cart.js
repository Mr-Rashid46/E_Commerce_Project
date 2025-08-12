// Read cart from localStorage or empty array if none
const cart = JSON.parse(localStorage.getItem('cart')) || [];

const cartItemsDiv = document.getElementById('cart-items');
const cartTotalSpan = document.getElementById('cart-total');

let total = 0;

// Display cart items
cart.forEach((item, index) => {
  // Convert price string like "₹1340.99" to number
  let priceNum = parseFloat(item.price.replace(/[^\d.]/g, ''));

  total += priceNum;

  const itemDiv = document.createElement('div');
  itemDiv.classList.add('cart-item');

  itemDiv.innerHTML = `
    <img src="${item.image}" alt="${item.title}" />
    <div>
      <h5>${item.title}</h5>
      <p>Price: ${item.price}</p>
    </div>
  `;

  cartItemsDiv.appendChild(itemDiv);
});

// Show total price (2 decimal places)
cartTotalSpan.innerText = total.toFixed(2);
