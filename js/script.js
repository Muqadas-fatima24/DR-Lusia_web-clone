// TO DROPDOWN
document.addEventListener('DOMContentLoaded', function () {
let dropdownMenu = document.querySelector(".nav-item .dropdown-menu");
let dropdownIcon = document.querySelector(".nav-item .nav-link svg");

if (dropdownMenu && dropdownIcon) {
    dropdownIcon.addEventListener("click", () => {
        if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
            dropdownMenu.style.display = 'initial';
        } else {
            dropdownMenu.style.display = 'none';
        }
    });
}
});
// END
// TO DROPDOWN

// END