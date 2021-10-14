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



// size ----------------------------------

function create(what, where, className) {
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}


const moreSizeGroupPlus = document.querySelector(".more__size_group_plus");
const adminInps = document.querySelector(".admin__inps_with_plus");

if (moreSizeGroupPlus) {
    moreSizeGroupPlus.addEventListener("click", () => {
        let moreInfoGroup = create("input", adminInps, `admin__inp`);
        moreInfoGroup.classList.add("admin__inp_header");
        moreInfoGroup.classList.add("form-control");
        moreInfoGroup.classList.add("admin__inp_with_plus");
        moreInfoGroup.setAttribute("name", `size[]`);
        moreInfoGroup.setAttribute("type", `text`);
        moreInfoGroup.setAttribute("placeholder", `Size`);
    });
}



// img ----------------------------------




const moreImgGroupPlus = document.querySelector(".more__img_group_plus");
const adminImgs = document.querySelector(".admin__imgs_with_plus");

if (moreImgGroupPlus) {
    moreImgGroupPlus.addEventListener("click", () => {
        let moreInfoGroup = create("input", adminImgs, `admin__inp`);
        moreInfoGroup.classList.add("admin__inp_header");
        moreInfoGroup.classList.add("form-control");
        moreInfoGroup.classList.add("admin__inp_with_plus");
        moreInfoGroup.setAttribute("name", `imgs[]`);
        moreInfoGroup.setAttribute("type", `file`);
    });
}