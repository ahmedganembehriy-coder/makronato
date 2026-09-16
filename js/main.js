document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav");
    if (toggle && nav) toggle.addEventListener("click", () => nav.classList.toggle("open"));

    const filters = document.querySelectorAll(".filter");
    const items = document.querySelectorAll(".menu-item");
    filters.forEach(button => {
        button.addEventListener("click", () => {
            filters.forEach(b => b.classList.remove("active"));
            button.classList.add("active");
            const value = button.dataset.filter;
            items.forEach(item => {
                item.style.display = value === "all" || item.dataset.category === value ? "grid" : "none";
            });
        });
    });

    const date = document.querySelector('input[type="date"]');
    if (date) date.min = new Date().toISOString().split("T")[0];
});