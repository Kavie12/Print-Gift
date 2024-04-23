document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("addProductForm");

    form.addEventListener("submit", e => {

        const title = document.getElementById("addProductTitle");
        const category = document.getElementById("addProductCategory");
        const desc = document.getElementById("addProductDesc");
        const price = document.getElementById("addProductPrice");
        const image = document.getElementById("addProductImage");

        if (title.value == "" || desc.value == "" || price.value == "" || category.value == "none" || image.value == "") {
            e.preventDefault();
            document.getElementById("addProductCardMsg").innerHTML = "Please complete all the details!";
        } else {
            document.getElementById("addProductCardMsg").innerHTML = "Adding...";
        }

    });

});