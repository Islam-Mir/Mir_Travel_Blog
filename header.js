
document.addEventListener("DOMContentLoaded", function () {

    const menuIds = ["destinationsToggle", "aboutToggle"];

    menuIds.forEach(function(id) {

        const toggle = document.getElementById(id);

        if (!toggle) return;

        // Cerca il dropdown nel contenitore LI
        const menu = toggle.closest(".nav-item.dropdown")
                           .querySelector(".dropdown-menu");

        if (!menu) return;

        toggle.addEventListener("click", function(e) {

            e.preventDefault();

            // Chiude gli altri menu
            document.querySelectorAll(".dropdown-menu.show").forEach(function(otherMenu) {
                if (otherMenu !== menu) {
                    otherMenu.classList.remove("show");
                }
            });

            // Apre o chiude il menu selezionato
            menu.classList.toggle("show");

        });

    });

    // Chiude i menu cliccando fuori
    document.addEventListener("click", function(e) {

        if (!e.target.closest(".nav-item.dropdown")) {
            document.querySelectorAll(".dropdown-menu.show").forEach(function(menu) {
                menu.classList.remove("show");
            });
        }

    });

});
