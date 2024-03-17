document.addEventListener("DOMContentLoaded", () => {
    const deleteBtn = document.querySelector(".account-section .details .buttons .delete");
    deleteBtn.addEventListener("click", () => {
        const userID = deleteBtn.closest(".details").getAttribute("data-user-id");

        console.log("Delete - " + userID);
    });
});