let cart = [];


function addToCart(productName) {
    cart.push(productName);
    updateCart();
}


function updateCart() {
    let cartCount = document.getElementById("cart-count");
    let cartItemsList = document.getElementById("cart-items");

    
    cartCount.innerText = cart.length;
    cartCount.style.display = cart.length > 0 ? "inline-block" : "none";

 
    cartItemsList.innerHTML = "";
    cart.forEach((item) => {
        let li = document.createElement("li");
        li.textContent = item;
        cartItemsList.appendChild(li);
    });
}


function toggleCart() {
    let cartDropdown = document.getElementById("cart-dropdown");
    cartDropdown.style.display = cartDropdown.style.display === "block" ? "none" : "block";
}


function clearCart() {
    cart = [];
    updateCart();
    toggleCart();
}