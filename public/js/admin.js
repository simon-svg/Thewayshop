const adminNavItems = document.querySelectorAll(".admin__nav_item");
const adminNavHeaderLists = document.querySelectorAll(".admin__nav_header_list");
const adminNavIcons = document.querySelectorAll(".admin__nav_icon ");


let selectedElem = null;

adminNavItems.forEach((item, i) => {
    item.addEventListener("click", () => {
        adminNavItems.forEach((item2, j) => {
            if (i != j) {
                adminNavHeaderLists[j].style.height = "0px";
                adminNavIcons[j].style.transform = "rotate(0)";
            }
            else {
                adminNavHeaderLists[i].style.height = "auto";
                adminNavIcons[i].style.transform = "rotate(180deg)";
            }
        })
        if (selectedElem == item) {
            adminNavHeaderLists[i].style.height = "0px";
            adminNavIcons[i].style.transform = "rotate(0)";
            selectedElem = null;
        } else {
            selectedElem = item;
        }
    })
})