document.addEventListener("DOMContentLoaded", () => {

    // Admin Users Search
    const search = document.querySelector(".admin-content .users .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });



    // Delete Users
    let deleteProfile = document.querySelectorAll(".delete-profile");

    deleteProfile.forEach(del => {
        let id = del.closest(".user-info").getAttribute("data-user-id");

        del.addEventListener("click", () => {
            const confirmDelete = confirm("Please confirm delete user!");
            if (confirmDelete == true) {
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', './sql/deleteuser.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('id=' + id);
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        del.closest(".user-info").remove();
                    }
                }
            }
        });
    });

});