function activeLink(name) {
    localStorage.setItem("name",name);
}

window.onload = function(){
    var name2 = localStorage.getItem("name");
    
    var tab = document.getElementById(name2);
    tab.classList.add("active");

}