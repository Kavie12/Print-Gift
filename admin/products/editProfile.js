document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("editProductForm");

    form.addEventListener("submit", e => {
        e.preventDefault();

        const title = document.getElementById("editProductTitle");
        const desc = document.getElementById("editProductDesc");
        const price = document.getElementById("editProductPrice");
        const image = document.getElementById("editProductImage");


        if (title.value == "" || desc.value == "" || price.value == "") {
            document.getElementById("editProductCardMsg").innerHTML = "Please complete relavant details!"
        }

        console.log(title.value);
        console.log(desc.value);
        console.log(price.value);
        // console.log(image.files[0].name);
    });
});