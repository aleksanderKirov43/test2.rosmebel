
let burgerOpen = document.getElementById("burger");
let sidebar = document.getElementById("mySidebar");
let closeBtn = document.querySelector(".closebtn");

burgerOpen.addEventListener("click", function() {
    openNav();
});

function openNav() {
    sidebar.style.width = "100%";
}

function closeNav() {
    closeBtn.classList.add("rotate");
        setTimeout(() => {
            closeBtn.classList.remove("rotate");
            sidebar.style.width = "0";
        }, 350);
           
}