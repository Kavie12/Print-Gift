// Open/ Close Filters Sidebar

const filtersSidebarClose = document.getElementById("filtersSidebarClose");
const filtersSidebarOpen = document.getElementById("filtersSidebarOpen");

document.addEventListener("DOMContentLoaded", () => {
    filtersSidebarClose.addEventListener("click", () => {
        const productsFilters = document.getElementById("productsFilters");
        productsFilters.style.left = "-60%";
    });

    filtersSidebarOpen.addEventListener("click", () => {
        const productsFilters = document.getElementById("productsFilters");
        productsFilters.style.left = "0px" ;
    });
});





// Products In Stock Filter

function inStockFilterOn() {
    if (document.getElementById("productsinStockFilter").checked) {
        const outOfStockProducts = document.querySelectorAll(".product-item.out-of-stock");

        for (let i = 0; i < outOfStockProducts.length; i++) {
            outOfStockProducts[i].style.display = "none";
        }
    }
}
function inStockFilterOff() {
    const outOfStockProducts = document.querySelectorAll(".product-item.out-of-stock");

    if (!(document.getElementById("productsinStockFilter").checked)) {
        for (let i = 0; i < outOfStockProducts.length; i++) {
            outOfStockProducts[i].style.display = "flex";
        }
    }
    
    catFilter();
}

document.addEventListener("DOMContentLoaded", () => {
    const inStockFilter = document.getElementById("productsinStockFilter");

    inStockFilter.addEventListener("change", () => {
        if (inStockFilter.checked) {
            inStockFilterOn();
        } else {
            inStockFilterOff();
        }
    })
})





// Product Categories Filter

document.addEventListener("DOMContentLoaded", () => {
    catFilter();
});

function catFilter() {
    // Category Products
    const mugs = document.querySelectorAll(".product-item.mug");
    const pens = document.querySelectorAll(".product-item.pen");
    const tShirts = document.querySelectorAll(".product-item.t-shirt");
    const bands = document.querySelectorAll(".product-item.band");

    // Category Products Array
    const products = [mugs, pens, tShirts, bands];

    // Category Filter Buttons
    const allBtn = document.getElementById("productCategoriesAll");
    const mugsBtn = document.getElementById("productCategoriesMugs");
    const pensBtn = document.getElementById("productCategoriesPens");
    const tShirtsBtn = document.getElementById("productCategoriesTShirts");
    const bandsBtn = document.getElementById("productCategoriesBands");

    // Category Filter Buttons Array
    const categoriesSwitch = [allBtn, mugsBtn, pensBtn, tShirtsBtn, bandsBtn];

    // Change Filter according to URL parameters
    const url = window.location.search;
    const urlParameters = new URLSearchParams(url);
    if (urlParameters.has("filter")) {
        const filter = urlParameters.get("filter");
        
        switch(filter) {
            case 'mugs':
                categoriesSwitch[1].checked = true;
                break;
            case 'pens':
                categoriesSwitch[2].checked = true;
                break;
            case 'tshirts':
                categoriesSwitch[3].checked = true;
                break;
            case 'bands':
                categoriesSwitch[4].checked = true;
                break;
            default:
                categoriesSwitch[0].checked = true;
        }
    }

    // Pattern for products to be displayed
    const displayPattern = [
        ["flex", "flex", "flex", "flex"],
        ["flex", "none", "none", "none"],
        ["none", "flex", "none", "none"],
        ["none", "none", "flex", "none"],
        ["none", "none", "none", "flex"]
    ];

    categoriesSwitch.forEach((switchBtn, switchIndex) => {
        // If a button is already checked
        if (switchBtn.checked) {
            products.forEach((itemType, itemTypeIndex) => {
                itemType.forEach(item => {
                    item.style.display = displayPattern[switchIndex][itemTypeIndex];
                });
            });
        }
        // If a button is checked later
        switchBtn.addEventListener("change", () => {
            if (switchBtn.checked) {
                products.forEach((itemType, itemTypeIndex) => {
                    itemType.forEach(item => {
                        item.style.display = displayPattern[switchIndex][itemTypeIndex];
                    });
                });
            }
            inStockFilterOn();
        });
    });
}