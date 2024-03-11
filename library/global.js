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