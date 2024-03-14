document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("addFAQForm");

    form.addEventListener("submit", e => {
        e.preventDefault();

        let q = document.getElementById("addFAQQ");
        let a = document.getElementById("addFAQA");

        if (q.value == "" || a.value == "") {
            document.getElementById("addFAQMsg").innerHTML = "All fields must be completed!";
        } else {
            console.log(q.value);
            console.log(a.value);
        }

    });
});