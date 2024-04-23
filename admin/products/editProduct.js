document.addEventListener("DOMContentLoaded", () => {

    const title = document.getElementById("editProductTitle");
    const category = document.getElementById("editProductCategory");
    const desc = document.getElementById("editProductDesc");
    const price = document.getElementById("editProductPrice");
    const image = document.getElementById("editProductImage");

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id');

    // Display data
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            
            title.value = data[0].title;
            category.value = data[0].category;
            desc.value = data[0].description;
            price.value = data[0].price;
        }
    }
    xhttp.open("GET", "./sql/productdata.php?id=" + id, true);
    xhttp.send();

    // Submit data validate
    const form = document.getElementById("editProductForm");
    form.addEventListener("submit", e => {
        if (title.value == "" || category.value == "" || desc.value == "" || price.value == "") {
            document.getElementById("editProductCardMsg").innerHTML = "Please complete relavant details!";
            e.preventDefault();
        }
    });
});