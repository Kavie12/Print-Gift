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

function itemQtyAllowedNums() {
    let qty = parseInt(document.getElementById('itemQty').value)
    if (qty < 1) {
        document.getElementById('itemQty').value = 1
    }
}

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





// Change Quantity in Cart Page

const cartIncreaseQty = document.getElementById('cartIncreaseQty')
const cartDecreaseQty = document.getElementById('cartDecreaseQty')

function cartQtyAllowedNums() {
    let qty = parseInt(document.getElementById('cartQty').value)
    if (qty < 1) {
        document.getElementById('cartQty').value = 1
    }
}

if (cartIncreaseQty) {
    cartIncreaseQty.addEventListener('click', () => {
        let qty = parseInt(document.getElementById('cartQty').value)
        document.getElementById('cartQty').value = qty + 1
    });
}

if (cartDecreaseQty) {
    cartDecreaseQty.addEventListener('click', () => {
        let qty = parseInt(document.getElementById('cartQty').value)
        document.getElementById('cartQty').value = qty - 1
        cartQtyAllowedNums()
    })
}
