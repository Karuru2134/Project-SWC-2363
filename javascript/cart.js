// Sample cart items array
let cartItems = [
    { id: 1, name: 'Product 1', price: 10.00 },
    { id: 2, name: 'Product 2', price: 15.00 },
    // Add more items as needed
];

// Toggle the cart dropdown display
function toggleCartDropdown() {
    const cartDropdown = document.getElementById('cart-dropdown');
    if (cartDropdown.classList.contains('show')) {
        cartDropdown.classList.remove('show');
        setTimeout(() => { cartDropdown.style.display = 'none'; }, 500);
    } else {
        cartDropdown.style.display = 'block';
        setTimeout(() => { cartDropdown.classList.add('show'); }, 10);
    }
}

// Render the cart items and "Erase" buttons
function renderCartItems() {
    const cartItemsContainer = document.getElementById('cartItemsContainer');
    cartItemsContainer.innerHTML = ''; // Clear the container

    cartItems.forEach((item, index) => {
        const itemElement = document.createElement('li');
        itemElement.textContent = `${item.name} - $${item.price.toFixed(2)}`;

        // Create "Erase" button
        const eraseButton = document.createElement('button');
        eraseButton.textContent = 'Erase';
        eraseButton.onclick = () => eraseItem(index); // Bind click to erase function
        itemElement.appendChild(eraseButton);

        cartItemsContainer.appendChild(itemElement);
    });
}

// Erase item from cart
function eraseItem(index) {
    cartItems.splice(index, 1); // Remove item from cartItems array
    renderCartItems(); // Re-render cart items
}

// Open the Payment Modal
function openModal() {
    document.getElementById("paymentModal").style.display = "flex";
}

// Close the Payment Modal
function closeModal() {
    document.getElementById("paymentModal").style.display = "none";
}

// Handle Payment Method Selection
function handlePaymentSelection() {
    const paymentMethod = document.getElementById("paymentMethod").value;
    if (paymentMethod === "card") {
        openModal();
    } else if (paymentMethod === "paypal") {
        alert("You selected PayPal. You will be redirected to the PayPal payment page.");
    }
}

// Place Order
function placeOrder() {
    const paymentMethod = document.getElementById("paymentMethod").value;
    if (cartItems.length === 0) {
        alert("Your cart is empty!");
    } else if (paymentMethod === "none") {
        alert("Please select a payment method.");
    } else if (paymentMethod === "card") {
        alert("Please complete your card payment.");
    } else if (paymentMethod === "paypal") {
        alert("Redirecting to PayPal...");
        // Add any additional PayPal integration here if needed
    }
}

// Initial render of cart items
renderCartItems();
