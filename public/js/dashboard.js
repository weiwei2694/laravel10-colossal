// start: Sidebar
const sidebarToggle = document.querySelector(".sidebar-toggle");
const sidebarOverlay = document.querySelector(".sidebar-overlay");
const sidebarMenu = document.querySelector(".sidebar-menu");
const main = document.querySelector(".main");

sidebarToggle.addEventListener("click", function (e) {
    e.preventDefault();
    main.classList.toggle("active");
    sidebarOverlay.classList.toggle("hidden");
    sidebarMenu.classList.toggle("-translate-x-full");
});
sidebarOverlay.addEventListener("click", function (e) {
    e.preventDefault();
    main.classList.add("active");
    sidebarOverlay.classList.add("hidden");
    sidebarMenu.classList.add("-translate-x-full");
});
document.querySelectorAll(".sidebar-dropdown-toggle").forEach(function (item) {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        const parent = item.closest(".group");
        if (parent.classList.contains("selected")) {
            parent.classList.remove("selected");
        } else {
            document
                .querySelectorAll(".sidebar-dropdown-toggle")
                .forEach(function (i) {
                    i.closest(".group").classList.remove("selected");
                });
            parent.classList.add("selected");
        }
    });
});
// end: Sidebar

// start: Tab
document.querySelectorAll("[data-tab]").forEach(function (item) {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        const tab = item.dataset.tab;
        const page = item.dataset.tabPage;
        const target = document.querySelector(
            '[data-tab-for="' + tab + '"][data-page="' + page + '"]'
        );
        document
            .querySelectorAll('[data-tab="' + tab + '"]')
            .forEach(function (i) {
                i.classList.remove("active");
            });
        document
            .querySelectorAll('[data-tab-for="' + tab + '"]')
            .forEach(function (i) {
                i.classList.add("hidden");
            });
        item.classList.add("active");
        target.classList.remove("hidden");
    });
});
// end: Tab

// start: Path
let currentPath = window.location.pathname;
let pathArray = currentPath.split("/").filter(Boolean);
let rootUrl = window.location.origin;

let htmlResult = "";
let tempPath = "";

for (let i = 0; i < pathArray.length; i++) {
    tempPath += `/${pathArray[i]}`;

    if (i === pathArray.length - 1) {
        htmlResult += `<li class="mr-2"><span class="text-gray-600 mr-2 font-medium">${pathArray[i]}</span></li>`;
    } else {
        htmlResult += `<li class="mr-2"><a href="${rootUrl}${tempPath}" class="text-gray-400 hover:text-gray-600 font-medium">${pathArray[i]}</a></li>`;
    }

    if (i < pathArray.length - 1) {
        htmlResult += `<li class="text-gray-600 mr-2 font-medium">/</li>`;
    }
}

document.getElementById("navbar-path").innerHTML = htmlResult;
// end: Path
