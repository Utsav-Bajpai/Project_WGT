const scriptURL = "https://script.google.com/macros/s/AKfycbwT-GdhGoUOMnmG6VXoeD5OjA7GpYSeehSnheBSqmX43JGg-xSG8sBR__gm7znrIsZs/exec";
const form = document.forms["contact_form"];

function showPopup(id) {
    document.getElementById(id).style.display = 'flex';
}

function closePopup(id) {
    document.getElementById(id).style.display = 'none';
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(form);

    fetch(scriptURL, { method: "POST", body: formData })
        .then(response => {
            form.reset();
            showPopup('successPopup');
        })
        .catch(error => {
            console.error(error);
            showPopup('errorPopup');
        });
});