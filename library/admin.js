document.addEventListener("DOMContentLoaded", () => {
    
    // Close / Open Sidebar

    const sidebar = document.querySelector(".admin-sidebar");
    const content = document.querySelector(".admin-content");

    let sidebarState = (sidebar.style.left == 0) ? 1 : 0;

    document.querySelector(".admin-sidebar .sidebar-closer").addEventListener("click", () => {
        sidebarState = 0;
        if (window.matchMedia("(max-width: 1100px)").matches) {
            sidebar.style.left = "-60%";
        } else {
            sidebar.style.left = "-18%";
            content.style.marginLeft = 0;
        }
    });
    document.querySelector(".admin-nav .sidebar-opener").addEventListener("click", () => {
        sidebarState = 1;
        if (window.matchMedia("(max-width: 1100px)").matches) {
            sidebar.style.left = 0;
        } else {
            sidebar.style.left = 0;
            content.style.marginLeft = "18%";
        }
    });


    window.addEventListener("resize", () => {
        if (window.matchMedia("(max-width: 1100px)").matches) {
            content.style.marginLeft = 0;
            if (!sidebarState) {
                sidebar.style.left = "-60%";
            }
        } else {
            if (sidebarState) {
                content.style.marginLeft = "18%";
            }
        }
    });





    // Active page
    const pageName = document.body.getAttribute('data-page');
    const activeColor = 'rgb(0, 109, 96)';
    switch(pageName) {
        case 'neworders':
            document.getElementById("newOrdersLink").style.color = activeColor;
            break;
        case 'pastorders':
            document.getElementById("pastOrdersLink").style.color = activeColor;
            break;
        case 'users':
            document.getElementById("usersLink").style.color = activeColor;
            break;
        case 'products':
            document.getElementById("productsLink").style.color = activeColor;
            break;
        case 'statics':
            document.getElementById("staticsLink").style.color = activeColor;
            break;
        case 'faq':
            document.getElementById("faqLink").style.color = activeColor;
            break;
        default:
            console.log('Error');
    }

});