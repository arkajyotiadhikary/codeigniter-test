// const click = document.querySelector(".page-widget-expand");

const handleClick = (e) => {
    const expandDiv = e.parentNode.parentNode.childNodes[3];
    if (expandDiv.style.height === "0px") {
        expandDiv.style.height = "168px";
    } else {
        expandDiv.style.height = "0px";
    }
};
