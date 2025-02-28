
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

document.querySelectorAll('.confirmdelete').forEach(function (element) {
    element.addEventListener("click", function (event) {
        if (!confirm("Êtes-vous sûr de supprimer cet élément ?")) {
            event.preventDefault();
        }
    });
});