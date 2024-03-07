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
    })
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
}

// Cart decrease QTY
function cartDecreaseQty(i) {
    let qty = parseInt(document.querySelectorAll('.cart_qty')[i].value)
    document.querySelectorAll('.cart_qty')[i].value = qty - 1
    cartQtyLimit(i)
}

// Cart QTY Limit
function cartQtyLimit(i) {
    let qty = parseInt(document.querySelectorAll('.cart_qty')[i].value)
    if (qty < 1) {
        document.querySelectorAll('.cart_qty')[i].value = 1
    }
}

// Remove item from cart
function removeCart(item) {
    item.remove()
    numberCartItem()
    cartItemZero()
}

// Number cart items
function numberCartItem() {
    let item = document.querySelectorAll('.cart-item .item-no')
    for (let i = 0; i < item.length; i++) {
        item[i].innerHTML = i + 1
    }
}

// Show the message if there is no items in cart
function cartItemZero() {
    if (document.querySelectorAll('.cart-item').length == 0) {
        document.querySelector('.cart-item-zero').style.display = 'flex'
        document.querySelector('.cart-tab .checkout').style.display = 'none'
        document.querySelector('.cart-tab .cart-list').style.width = '100%'
        document.querySelector('.cart-tab .cart-list').style.justifyContent = 'center'
    }
}

// Call the functions
document.addEventListener('DOMContentLoaded', () => {
    for (let i = 0; i < document.querySelectorAll('.cart-item').length; i++) {
        document.querySelectorAll('.cart_qty')[i].addEventListener('change', () => cartQtyLimit(i))
        document.querySelectorAll('.cart_increase_qty')[i].addEventListener('click', () => cartIncreaseQty(i))
        document.querySelectorAll('.cart_decrease_qty')[i].addEventListener('click', () => cartDecreaseQty(i))
    }
    if (document.querySelectorAll('.cart-item')) {
        document.querySelectorAll('.cart-item .fa-xmark').forEach((closeBtn) => {
            closeBtn.addEventListener('click', () => removeCart(closeBtn.closest('.cart-item')))
        })
    }
    if (document.querySelectorAll('.cart-item')) {
        numberCartItem()
        cartItemZero()
    }
})








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