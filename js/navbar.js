document.addEventListener("DOMContentLoaded", function () {
    const dropdownTrigger = document.getElementById("dropdown-trigger");
    const dropdownContent = document.getElementById("dropdown-content");
    const iconDropdown = document.getElementById('icon-dropdown');

    dropdownTrigger.addEventListener("click", function (event) {
        event.stopPropagation(); // Evita que el evento llegue al documento y cierre el dropdown inmediatamente después de abrirlo
        dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
        iconDropdown.classList.toggle('active-dropdown');
    });
    document.addEventListener("click", function (event) {
        if (!dropdownContent.contains(event.target) && dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        }
        iconDropdown.classList.remove('active-dropdown');
    });
});

// --------------------------
let btn = document.querySelector("#btn");
let header = document.querySelector(".header");
let buscador  = document.querySelector(".bx-search");

btn.addEventListener("click", function() {
    header.classList.toggle("activeHeader")
});

buscador.addEventListener("click", function() {
    header.classList.toggle("activeHeader")
});