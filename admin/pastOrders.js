// Past Orders Search

document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".admin-content .past-orders .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });
});