document.addEventListener('DOMContentLoaded', function () {
    loadCartItems();
});

function loadCartItems() {
    const cartTableBody = document.querySelector('#cartTable tbody');
    const totalPriceElement = document.getElementById('totalPrice');
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartTableBody.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.name}</td>
            <td>R$ ${item.price.toFixed(2)}</td>
            <td>${item.quantity}</td>
            <td>R$ ${(item.price * item.quantity).toFixed(2)}</td>
            <td><button class="remove-btn" onclick="removeItem('${item.name}')">Remover</button></td>
        `;
        cartTableBody.appendChild(row);
        total += item.price * item.quantity;
    });

    totalPriceElement.textContent = total.toFixed(2);
}

function addItem(name, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let itemIndex = cart.findIndex(item => item.name === name);

    if (itemIndex > -1) {
        cart[itemIndex].quantity += 1;
    } else {
        cart.push({ name: name, price: price, quantity: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    loadCartItems();
}

function removeItem(name) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(item => item.name !== name);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCartItems();
}
