document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("addProductForm");

    form.addEventListener("submit", e => {
        e.preventDefault();

        const title = document.getElementById("addProductTitle");
        const category = document.getElementById("addProductCategory");
        const desc = document.getElementById("addProductDesc");
        const price = document.getElementById("addProductPrice");
        const image = document.getElementById("addProductImage");


        if (title.value == "" || desc.value == "" || price.value == "" || category.value == "none") {
            document.getElementById("addProductCardMsg").innerHTML = "Please complete relavant details!";
        } else {
            document.getElementById("addProductCardMsg").innerHTML = "Adding...";
        };

        console.log(title.value);
        console.log(category.value);
        console.log(desc.value);
        console.log(price.value);
        // console.log(image.files[0].name);
    });
});