document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("editFAQForm");

    form.addEventListener("submit", e => {
        let q = document.getElementById("editFAQQ");
        let a = document.getElementById("editFAQA");

        if (q.value == "" || a.value == "") {
            e.preventDefault();
            document.getElementById("editFAQMsg").innerHTML = "All fields must be completed!";
        } else {
            document.getElementById("editFAQMsg").innerHTML = "Updating...";
        }

    });
});