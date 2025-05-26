const scriptURL = "https://script.google.com/macros/s/AKfycbwT-GdhGoUOMnmG6VXoeD5OjA7GpYSeehSnheBSqmX43JGg-xSG8sBR__gm7znrIsZs/exec";
const form = document.forms["contact_form"];

form.addEventListener("submit", (e) => {
    e.preventDefault();
    var formData = new FormData(form);

    fetch(scriptURL, { method: "POST", body: formData })
        .then((response) => {
            alert("Done", "Submitted Successfully.", "success");
            form.reset();
        })
        .catch((error) => {
            alert("Error", "Something went wrong. Please try again!", "error");
        });
});
