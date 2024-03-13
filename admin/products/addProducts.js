document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("addproductForm");

    form.addEventListener("submit", e => {
        e.preventDefault();

        const title = document.getElementById("addProductTitle");
        const desc = document.getElementById("addProductDesc");
        const price = document.getElementById("addProductPrice");
        const image = document.getElementById("addProductImage");


        if (title.value == "" || desc.value == "" || price.value == "") {
            document.getElementById("addProductCardMsg").innerHTML = "Please complete relavant details!"
        }

        console.log(title.value);
        console.log(desc.value);
        console.log(price.value);
        // console.log(image.files[0].name);
    });
});