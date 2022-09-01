// const click = document.querySelector(".page-widget-expand");

const handleClick = (e) => {
    const expandDiv = e.parentNode.parentNode.childNodes[3];
    if (expandDiv.style.height === "0px") {
        // console.log(e.childNodes[1].innerHTML);
        e.childNodes[1].innerHTML = "remove";
        expandDiv.style.height = "168px";
        expandDiv.childNodes[1].style.display = "block";
    } else {
        expandDiv.style.height = "0px";
        e.childNodes[1].innerHTML = "add";
        expandDiv.childNodes[1].style.display = "none";
    }
};
