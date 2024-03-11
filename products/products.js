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
}

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("productsinStockFilter").addEventListener("change", () => {
        inStockFilterOn();
        inStockFilterOff();
    })
})





// Product Categories Filter

document.addEventListener("DOMContentLoaded", () => {
    const mugs = document.querySelectorAll(".product-item.mug");
    const pens = document.querySelectorAll(".product-item.pen");
    const tShirts = document.querySelectorAll(".product-item.t-shirt");
    const bands = document.querySelectorAll(".product-item.band");

    const products = [mugs, pens, tShirts, bands];

    const allBtn = document.getElementById("productCategoriesAll");
    const mugsBtn = document.getElementById("productCategoriesMugs");
    const pensBtn = document.getElementById("productCategoriesPens");
    const tShirtsBtn = document.getElementById("productCategoriesTShirts");
    const bandsBtn = document.getElementById("productCategoriesBands");

    const categoriesSwitch = [allBtn, mugsBtn, pensBtn, tShirtsBtn, bandsBtn];

    const displayPattern = [
        ["flex", "flex", "flex", "flex"],
        ["flex", "none", "none", "none"],
        ["none", "flex", "none", "none"],
        ["none", "none", "flex", "none"],
        ["none", "none", "none", "flex"]
    ];

    categoriesSwitch.forEach((switchBtn, switchIndex) => {
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
});