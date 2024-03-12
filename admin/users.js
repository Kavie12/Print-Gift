// Admin Users Search

document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".admin-content .users .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });
});




// Delete Users

document.addEventListener("DOMContentLoaded", () => {

    let deleteProfile = document.querySelectorAll(".delete-profile");

    deleteProfile.forEach(del => {
        let userId = del.closest(".user-info").getAttribute("data-user-id");

        del.addEventListener("click", () => {

            console.log(userId + " - delete");
            
        });
    });

});