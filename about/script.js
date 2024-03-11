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