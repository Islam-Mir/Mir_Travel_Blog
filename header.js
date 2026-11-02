document.addEventListener("DOMContentLoaded", function () {

    const menuIds = ["destinationsToggle", "aboutToggle"];

    menuIds.forEach(function(id) {

        const toggle = document.getElementById(id);

        if (!toggle) return;

        const menu = toggle.nextElementSibling;

        toggle.addEventListener("click", function(e) {

            e.preventDefault();

            // Chiude gli altri menu
            document.querySelectorAll(".dropdown-menu.show").forEach(function(otherMenu) {
                if (otherMenu !== menu) {
                    otherMenu.classList.remove("show");
                }
            });

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