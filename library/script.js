// Nav List Dropdown

const navListControl = document.getElementById('navListControl');

if (navListControl) {
    document.getElementById('navListControl').addEventListener('click', () => {
        const navList = document.getElementById('navList')
        const navListControl1 = document.getElementById('navListControl1')
        const navListControl2 = document.getElementById('navListControl2')
        const navListControl3 = document.getElementById('navListControl3')
        
        if (navList.style.right == '0px') {
            navList.style.right = '-100%'
            navListControl1.style.transform = 'rotate(0) translateY(0)'
            navListControl2.style.display = 'block'
            navListControl3.style.transform = 'rotate(0) translateY(0)'
        } 
        else {
            navList.style.right = '0px'
            navListControl1.style.transform = 'rotate(45deg) translateY(4.2px)'
            navListControl2.style.display = 'none'
            navListControl3.style.transform = 'rotate(-45deg) translateY(-4.2px)'
        }
    })
}






// Open/ Close Filters Sidebar

const filtersSidebarClose = document.getElementById('filtersSidebarClose')
const filtersSidebarOpen = document.getElementById('filtersSidebarOpen')

if (filtersSidebarClose) {
    filtersSidebarClose.addEventListener('click', () => {
        const productsFilters = document.getElementById('productsFilters')
        productsFilters.style.left = '-60%'
    })
}

if (filtersSidebarOpen) {
    filtersSidebarOpen.addEventListener('click', () => {
        const productsFilters = document.getElementById('productsFilters')
        productsFilters.style.left = '0px' 
    })
}






// Change Quantity in Item Page

const itemIncreaseQty = document.getElementById('itemIncreaseQty')
const itemDecreaseQty = document.getElementById('itemDecreaseQty')

if (itemIncreaseQty) {
    itemIncreaseQty.addEventListener('click', () => {
        let qty = parseInt(document.getElementById('itemQty').value)
        document.getElementById('itemQty').value = qty + 1
    });
}

if (itemDecreaseQty) {
    itemDecreaseQty.addEventListener('click', () => {
        let qty = parseInt(document.getElementById('itemQty').value)
        document.getElementById('itemQty').value = qty - 1
        itemQtyAllowedNums()
    })
}

function itemQtyAllowedNums() {
    let qty = parseInt(document.getElementById('itemQty').value)
    if (qty < 1) {
        document.getElementById('itemQty').value = 1
    }
}

if (document.getElementById('itemQty')) {
    document.getElementById('itemQty').addEventListener('change', () => itemQtyAllowedNums())
}









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
for (let i = 0; i < document.querySelectorAll('.cart_qty').length; i++) {

    const cartIncreaseQtyValue = document.querySelectorAll('.cart_increase_qty')
    const cartDecreaseQtyValue = document.querySelectorAll('.cart_decrease_qty')

    document.querySelectorAll('.cart_qty')[i].addEventListener('change', () => cartQtyLimit(i))
    document.querySelectorAll('.cart_qty')[i].addEventListener('change', () => checkoutUpdate(i, document.querySelectorAll('.cart_qty')[i]))

    cartIncreaseQtyValue[i].addEventListener('click', () => cartIncreaseQty(i))
    
    cartDecreaseQtyValue[i].addEventListener('click', () => cartDecreaseQty(i))

    document.querySelectorAll('.cart-item .fa-xmark')[i].addEventListener('click', () => removeCart(i))
}








// Login Data

const loginForm = document.getElementById('loginForm')

if (loginForm) {
    loginForm.addEventListener('submit', e => {
        e.preventDefault()
        const formEl = document.forms.loginForm
        const formData = new FormData(formEl)
    })
}





// Sign Up Data

const signupForm = document.getElementById('signupForm')

if (signupForm) {
    signupForm.addEventListener('submit', e => {
        e.preventDefault()
        const formEl = document.forms.signupForm
        const formData = new FormData(formEl)
    })    
}





// Add to Cart Data

const addToCartForm = document.getElementById('addToCartForm')

if (addToCartForm) {
    addToCartForm.addEventListener('submit', e => {
        e.preventDefault()
        const formEl = document.forms.addToCartForm
        const formData = new FormData(formEl)
    
        // console.log(formData.get('printing_text'))
        // console.log(formData.get('printing_text_color'))
        // console.log(formData.get('printing_image').name)
        // console.log(formData.get('item_wrap'))
        // console.log(formData.get('additional_info'))
        // console.log(formData.get('item_qty'))
    })
}