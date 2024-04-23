document.addEventListener("DOMContentLoaded", () => {

    // Product Search
    const search = document.querySelector(".admin-content .products .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });




    // Products Status
    let statusList = document.querySelectorAll(".products .item .status");

    statusList.forEach(item => {
        let productID = item.closest(".item").getAttribute("data-product-id");

        item.addEventListener("submit", e => {

            e.preventDefault();

            let formData = new FormData(item);
            let status = formData.get("product-status-" + productID);

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    // Change button to 'Saved!'
                    saveBtn.style.background = "black";
                    saveBtn.style.color = "white";
                    saveBtn.value = "Saved!";
                }
            }
            xhttp.open('POST', './sql/changeproductstatus.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('id='+productID+'&status='+status);
        });


        // Change button back to 'Save'
        let inStock = document.getElementById("productStatusInStock" + productID);
        let outOfStock = document.getElementById("productStatusOutOfStock" + productID);
        let hide = document.getElementById("productStatusHide" + productID);

        let switches = [inStock, outOfStock, hide];

        let saveBtn = document.getElementById("productStatusSave" + productID);

        switches.forEach(switchItem => {
            switchItem.addEventListener("change", () => {
                saveBtn.style.background = "none";
                saveBtn.style.color = "black";
                saveBtn.value = "Save";
            });
        });


    });



    // Delete Products
    let deleteProduct = document.querySelectorAll(".item-info .delete");

    deleteProduct.forEach(del => {
        let productID = del.closest(".item").getAttribute("data-product-id");

        del.addEventListener("click", () => {
            const confirmDelete = confirm("Please confirm delete product!");
            if (confirmDelete == true) {
                let xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        del.closest(".item").remove();
                    }
                }
                xhttp.open('POST', './sql/changeproductstatus.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('id='+productID+'&status=removed');
            }
        });
    });



});