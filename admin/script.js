// Close / Open Sidebar

document.addEventListener("DOMContentLoaded", () => {
    const sidebar = document.querySelector(".admin-sidebar");
    const content = document.querySelector(".admin-content");
    document.querySelector(".admin-sidebar .sidebar-closer").addEventListener("click", () => {
        if (window.matchMedia("(max-width: 1100px)").matches) {
            sidebar.style.left = "-60%";
        } else {
            sidebar.style.left = "-18%";
            content.style.marginLeft = 0  ;
        }
    })
    document.querySelector(".admin-nav .sidebar-opener").addEventListener("click", () => {
        if (window.matchMedia("(max-width: 1100px)").matches) {
            sidebar.style.left = 0;
        } else {
            sidebar.style.left = 0;
            content.style.marginLeft = "18%";
        }
    });
});