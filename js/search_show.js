function show(name) {
    var elem = document.getElementById(name);
    if(elem)
        elem.style.display = "flex";
    else
        elem.style.display = "none";
}

function hide(name) {
    var elem = document.getElementById(name);
    if(elem)
        elem.style.display = "none";
    else
        elem.style.display = "block";
}
