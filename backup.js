// Cart Increase QTY
function cartIncreaseQty(i) {
    let qty = parseInt(document.querySelectorAll('.cart_qty')[i].value)
    document.querySelectorAll('.cart_qty')[i].value = qty + 1
    checkoutUpdate(i, document.querySelectorAll('.cart_qty')[i].value)
}

// Cart decrease QTY
function cartDecreaseQty(i) {
    let qty = parseInt(document.querySelectorAll('.cart_qty')[i].value)
    document.querySelectorAll('.cart_qty')[i].value = qty - 1
    cartQtyLimit(i)
    checkoutUpdate(i, document.querySelectorAll('.cart_qty')[i].value)
}

// Cart QTY Limit
function cartQtyLimit(i) {
    let qty = parseInt(document.querySelectorAll('.cart_qty')[i].value)
    if (qty < 1) {
        document.querySelectorAll('.cart_qty')[i].value = 1
    }
}

// Update Checkout QTY & Price
function checkoutUpdate(i, qty) {
    let checkoutQty = document.querySelectorAll('.cart-content .checkout-items-list .qty')[i]
    let oldQty = document.querySelectorAll('.cart-content .checkout-items-list .qty')[i].innerHTML.slice(0, -1)
    let checkoutPrice = document.querySelectorAll('.cart-content .checkout-items-list .price')[i]
    checkoutQty.innerHTML = qty + 'x'
    checkoutPrice.innerHTML = checkoutPrice.innerHTML / oldQty * qty

    calcTotalPriceCheckout()
}

// Update Total Price in Checkout
function calcTotalPriceCheckout() {
    let itemPrice = document.querySelectorAll('.cart-content .checkout-items-list .price')
    let totalPrice = document.querySelector('.cart-content .total-price-value')
    let total = 0
    for (let i = 0; i < itemPrice.length; i++) {
        total += parseInt(itemPrice[i].innerHTML)
    }
    totalPrice.innerHTML = total
}

// Calculate Total Price when Document Loads
document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.cart-content .total-price-value')) {
        calcTotalPriceCheckout()
    }
})

// Remove item from cart
function removeCart(i) {
    document.querySelectorAll('.cart-item')[i].remove()
    numberCartItem()
}

// Number cart items
function numberCartItem() {
    let item = document.querySelectorAll('.cart-item .item-no')
    for (let i = 0; i < item.length; i++) {
        item[i].innerHTML = i + 1
    }
}
document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelectorAll('.cart-item .item-no')) {
        numberCartItem()
    }
})

// Call the functions
document.addEventListener('DOMContentLoaded', () => {
    for (let i = 0; i < document.querySelectorAll('.cart-item').length; i++) {
    
        document.querySelectorAll('.cart_qty')[i].addEventListener('change', () => cartQtyLimit(i))
        document.querySelectorAll('.cart_qty')[i].addEventListener('change', () => checkoutUpdate(i, document.querySelectorAll('.cart_qty')[i]))
    
        document.querySelectorAll('.cart_increase_qty')[i].addEventListener('click', () => cartIncreaseQty(i))
        document.querySelectorAll('.cart_decrease_qty')[i].addEventListener('click', () => cartDecreaseQty(i))
    
        document.querySelectorAll('.cart-item .fa-xmark')[i].addEventListener('click', () => removeCart(i))
    }
})