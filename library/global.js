// Nav List Dropdown

const navListControl = document.getElementById("navListControl");

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("navListControl").addEventListener("click", () => {
        const navList = document.getElementById("navList");
        const navListControl1 = document.getElementById("navListControl1");
        const navListControl2 = document.getElementById("navListControl2");
        const navListControl3 = document.getElementById("navListControl3");
        
        if (navList.style.right == "0px") {
            navList.style.right = "-100%";
            navListControl1.style.transform = "rotate(0) translateY(0)";
            navListControl2.style.display = "block";
            navListControl3.style.transform = "rotate(0) translateY(0)";
        } 
        else {
            navList.style.right = "0px";
            navListControl1.style.transform = "rotate(45deg) translateY(4.2px)";
            navListControl2.style.display = "none";
            navListControl3.style.transform = "rotate(-45deg) translateY(-4.2px)";
        }
    });
});






// Login state Control

document.addEventListener("DOMContentLoaded", () => {
    let loginState = 0;

    const loginBtn = document.querySelector(".navbar .login-btn");
    const signBtn = document.querySelector(".navbar .sign-btn");
    const navProfile = document.querySelector(".navbar .nav-profile");

    if (loginState) {
        loginBtn.style.display = "none";
        signBtn.style.display = "none";
        navProfile.style.display = "flex";
    } else {
        loginBtn.style.display = "flex";
        signBtn.style.display = "flex";
        navProfile.style.display = "none";
    }
});





// Account Dropdown

document.addEventListener("DOMContentLoaded", () => {
    const navProfile = document.querySelector(".navbar .nav-profile");
    const menu = document.querySelector(".navbar .nav-profile-list");

    navProfile.addEventListener("click", () => {
        if (menu.style.display !== "flex") {
            menu.style.display = "flex";
        } else {
            menu.style.display = "none";
        }
    });
});






// Nav Cart Orders Count

document.addEventListener("DOMContentLoaded", () => {
    const cart = document.querySelector(".navbar .nav-cart > a > i > span");

    cart.innerHTML = 2;
});