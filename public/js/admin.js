const adminNavHeaders = document.querySelectorAll(".admin__nav_header");
const adminNavHeaderLists = document.querySelectorAll(".admin__nav_header_list");
const adminNavIcons = document.querySelectorAll(".admin__nav_icon ");

let adminNavHeaderBool = true;
adminNavHeaders.forEach((item, i) => {
    item.addEventListener("click", () => {
        adminNavHeaders.forEach((item2, j) => {
            if(i != j){
                adminNavHeaderLists[j].style.height = "0px";
            }
        })
        if(adminNavHeaderBool){
            adminNavHeaderLists[i].style.height = "120px";
            adminNavIcons[i].style.transform = "rotate(180deg)";
        }
        else{
            adminNavHeaderLists[i].style.height = "0px";
            adminNavIcons[i].style.transform = "rotate(00deg)";
        }
        adminNavHeaderBool = !adminNavHeaderBool;
    })
})