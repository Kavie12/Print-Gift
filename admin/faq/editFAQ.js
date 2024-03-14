document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("editFAQForm");
    const faqID = form.getAttribute("data-faq-id");

    form.addEventListener("submit", e => {
        e.preventDefault();

        let q = document.getElementById("editFAQQ");
        let a = document.getElementById("editFAQA");

        if (q.value == "" || a.value == "") {
            document.getElementById("editFAQMsg").innerHTML = "All fields must be completed!";
        } else {
            console.log(faqID);
            console.log(q.value);
            console.log(a.value);
        }

    });
});