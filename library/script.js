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
    if (document.querySelectorAll('.cart-item').length > 0) {
        document.querySelectorAll('.cart-item .fa-xmark').forEach((closeBtn) => {
            closeBtn.addEventListener('click', () => removeCart(closeBtn.closest('.cart-item')))
        })
        numberCartItem()
        cartItemZero()
    }
})







// Sign Up Data

const signupForm = document.getElementById('signupForm')

document.addEventListener('DOMContentLoaded', () => {
    if (signupForm) {
        signupForm.addEventListener('submit', e => {
            const fName = document.getElementById('signUpFName')
            const lName = document.getElementById('signUpLName')
            const tel = document.getElementById('signUpTel')
            const dob = document.getElementById('signUpDOB')
            const address = document.getElementById('signUpAddress')
            const city = document.getElementById('signUpCity')
            const postalCode = document.getElementById('signUpPostalCode')
            const email = document.getElementById('signUpEmail')
            const password = document.getElementById('signUpPassword')
            const confirmPassword = document.getElementById('signUpConfirmPassword')
            const agreeTerms = document.getElementById('signUpAgreeTerms')

            if (password.value !== confirmPassword.value) {
                e.preventDefault()
                document.getElementById('signUpCardMsg').innerHTML = 'Password does not match!'
            }
        })
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






// Products In Stock Filter

function inStockFilterOn() {
    if (document.getElementById('productsinStockFilter').checked) {
        for (let i = 0; i < document.querySelectorAll('.product-item.out-of-stock').length; i++) {
            document.querySelector('.product-item.out-of-stock').style.display = 'none'
        }
    }
}

function inStockFilterOff() {
    if (!(document.getElementById('productsinStockFilter').checked)) {
        for (let i = 0; i < document.querySelectorAll('.product-item.out-of-stock').length; i++) {
            document.querySelector('.product-item.out-of-stock').style.display = 'flex'
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('productsinStockFilter')) {
        document.getElementById('productsinStockFilter').addEventListener('change', () => {
            inStockFilterOn()
            inStockFilterOff()
        })
    }
})







// Product Categories Filter

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.categories-list')) {
        let radio = document.querySelectorAll('.categories-list div input').productCategories

        let mugs = document.querySelectorAll('.product-item.mug')
        let pens = document.querySelectorAll('.product-item.pen')
        let tShirts = document.querySelectorAll('.product-item.t-shirt')
        let bands = document.querySelectorAll('.product-item.band')

        document.getElementById('productCategoriesAll').addEventListener('change', () => {
            if (document.getElementById('productCategoriesAll').checked) {
                for (let i = 0; i < mugs.length; i++) {
                    mugs[i].style.display = 'flex'
                }
                for (let i = 0; i < pens.length; i++) {
                    pens[i].style.display = 'flex'
                }
                for (let i = 0; i < tShirts.length; i++) {
                    tShirts[i].style.display = 'flex'
                }
                for (let i = 0; i < bands.length; i++) {
                    bands[i].style.display = 'flex'
                }
            }
            inStockFilterOn()
        })
        document.getElementById('productCategoriesMugs').addEventListener('change', () => {
            if (document.getElementById('productCategoriesMugs').checked) {
                for (let i = 0; i < mugs.length; i++) {
                    mugs[i].style.display = 'flex'
                }
                for (let i = 0; i < pens.length; i++) {
                    pens[i].style.display = 'none'
                }
                for (let i = 0; i < tShirts.length; i++) {
                    tShirts[i].style.display = 'none'
                }
                for (let i = 0; i < bands.length; i++) {
                    bands[i].style.display = 'none'
                }
            }
            inStockFilterOn()
        })
        document.getElementById('productCategoriesPens').addEventListener('change', () => {
            if (document.getElementById('productCategoriesPens').checked) {
                for (let i = 0; i < mugs.length; i++) {
                    mugs[i].style.display = 'none'
                }
                for (let i = 0; i < pens.length; i++) {
                    pens[i].style.display = 'flex'
                }
                for (let i = 0; i < tShirts.length; i++) {
                    tShirts[i].style.display = 'none'
                }
                for (let i = 0; i < bands.length; i++) {
                    bands[i].style.display = 'none'
                }
            }
            inStockFilterOn()
        })
        document.getElementById('productCategoriesTShirts').addEventListener('change', () => {
            if (document.getElementById('productCategoriesTShirts').checked) {
                for (let i = 0; i < mugs.length; i++) {
                    mugs[i].style.display = 'none'
                }
                for (let i = 0; i < pens.length; i++) {
                    pens[i].style.display = 'none'
                }
                for (let i = 0; i < tShirts.length; i++) {
                    tShirts[i].style.display = 'flex'
                }
                for (let i = 0; i < bands.length; i++) {
                    bands[i].style.display = 'none'
                }
            }
            inStockFilterOn()
        })
        document.getElementById('productCategoriesBands').addEventListener('change', () => {
            if (document.getElementById('productCategoriesBands').checked) {
                for (let i = 0; i < mugs.length; i++) {
                    mugs[i].style.display = 'none'
                }
                for (let i = 0; i < pens.length; i++) {
                    pens[i].style.display = 'none'
                }
                for (let i = 0; i < tShirts.length; i++) {
                    tShirts[i].style.display = 'none'
                }
                for (let i = 0; i < bands.length; i++) {
                    bands[i].style.display = 'flex'
                }
            }
            inStockFilterOn()
        })
    }
})







// About FAQ Numbering

function FAQNumbering() {
    let faq = document.querySelectorAll('.faq-list > div > div > button')
    for (let i = 0; i < faq.length; i++) {
        faq[i].innerHTML = i + 1
    }
}

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelectorAll('.faq-list')) {
        FAQNumbering()
    }
})







// Close / Open Sidebar

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.admin-sidebar')) {
        const sidebar = document.querySelector('.admin-sidebar')
        const content = document.querySelector('.admin-content')
        document.querySelector('.admin-sidebar .sidebar-closer').addEventListener('click', () => {
            if (window.matchMedia("(max-width: 1100px)").matches) {
                sidebar.style.left = '-60%'
            } else {
                sidebar.style.left = '-18%'
                content.style.marginLeft = 0  
            }
        })
        document.querySelector('.admin-nav .sidebar-opener').addEventListener('click', () => {
            if (window.matchMedia("(max-width: 1100px)").matches) {
                sidebar.style.left = 0
            } else {
                sidebar.style.left = 0
                content.style.marginLeft = '18%'
            }
        })
    }
})







// New order accept or decline

document.addEventListener('DOMContentLoaded', () => {
    if(document.querySelector('.new-orders-list')) {
        const orders = document.querySelectorAll('.new-orders-list .item')
        const orderID = document.querySelectorAll('.new-orders-list .order-id')
        const accept = document.querySelectorAll('.new-orders-list .item .accept')
        const decline = document.querySelectorAll('.new-orders-list .item .decline')
        for (let i = 0; i < orders.length; i++) {
            accept[i].addEventListener('click', () => {
                let orderIDNo = parseInt(orderID[i].innerHTML.substring(10))
                console.log(orderIDNo + ' - Accept')
                orders[i].remove()
            })
            decline[i].addEventListener('click', () => {
                let orderIDNo = parseInt(orderID[i].innerHTML.substring(10))
                console.log(orderIDNo + ' - Decline')
                orders[i].remove()
            })
        }
    }
})