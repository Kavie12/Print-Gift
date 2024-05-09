document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("addFAQForm");

    form.addEventListener("submit", e => {
        let q = document.getElementById("addFAQQ");
        let a = document.getElementById("addFAQA");

        if (q.value == "" || a.value == "") {
            e.preventDefault();
            document.getElementById("addFAQMsg").innerHTML = "All fields must be completed!";
        } else {
            document.getElementById("addFAQMsg").innerHTML = "Adding...";
        }

    });
});