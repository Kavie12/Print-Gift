// Admin Users Search

document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".admin-content .users .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });
});