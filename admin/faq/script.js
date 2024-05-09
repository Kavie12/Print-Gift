document.addEventListener("DOMContentLoaded", () => {
    // FAQ Delete
    let faqDelete = document.querySelectorAll(".faq-item .buttons .delete");

    faqDelete.forEach(faq => {
        faq.addEventListener("click", () => {
            
            const confirmDelete = confirm("Please confirm delete FAQ!");
            if (confirmDelete == true) {
                const faqID = faq.closest(".faq-item").getAttribute("data-faq-id");

                const xhttp = new XMLHttpRequest();
                xhttp.open('GET', './sql/deletefaq.php?id=' + faqID, true);
                xhttp.send();
                
                faq.closest(".faq-item").remove();
                FAQNumbering();
            }
        });
    });



    FAQNumbering();
});



// About FAQ Numbering
function FAQNumbering() {
    let faq = document.querySelectorAll(".faq-list > div > div > button")
    for (let i = 0; i < faq.length; i++) {
        faq[i].innerHTML = i + 1;
    }
}
