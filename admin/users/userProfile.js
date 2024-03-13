// Delete Users

document.addEventListener("DOMContentLoaded", () => {

    let deleteProfile = document.querySelectorAll(".profile-details .buttons .delete");

    deleteProfile.forEach(del => {
        let userId = del.closest(".profile-details").getAttribute("data-user-id");

        del.addEventListener("click", () => {

            console.log(userId + " - delete");
            
        });
    });

});