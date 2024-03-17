// About FAQ Numbering

function FAQNumbering() {
    let faq = document.querySelectorAll(".faq-list > div > div > button")
    for (let i = 0; i < faq.length; i++) {
        faq[i].innerHTML = i + 1;
    }
}

document.addEventListener("DOMContentLoaded", () => {
    FAQNumbering();
});





// FAQ Delete

document.addEventListener("DOMContentLoaded", () => {
    let faqDelete = document.querySelectorAll(".faq-item .buttons .delete");

    faqDelete.forEach(faq => {
        faq.addEventListener("click", () => {
            
            const confirmDelete = confirm("Please confirm delete FAQ!");
            if (confirmDelete == true) {
                faqID = faq.closest(".faq-item").getAttribute("data-faq-id");
                console.log(faqID);
                faq.closest(".faq-item").remove();
                FAQNumbering();
            }
        });
    });
});