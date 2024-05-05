// Delivery Data

document.addEventListener("DOMContentLoaded", () => {

    document.getElementById("loginForm").addEventListener('submit', e => {
        const dp = document.getElementById("wrap");
        if (isNaN(dp.value) || dp.value <= 0 ) {
            e.preventDefault();
            document.getElementById('msg').innerHTML = "Enter a valid price!";
        }
    });

});