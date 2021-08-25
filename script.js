//////////////////////////////////////////////////////////////////////////
// Get today's date
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

today = mm + '-' + dd + '-' + yyyy;
document.getElementById("today").innerHTML = today;

// onclick close panels
function changeLeft(event) {
    var el = document.getElementById("content");
    var el2 = document.getElementById("forumBtn");
    const style = getComputedStyle(el).getPropertyValue('padding-left')
    if (style == '290px'){
        el2.innerHTML = "Forums &#xf0da";
        el.style.paddingLeft = '0px';
    }else{
        el2.innerHTML = "&#xf0d9 Forums";
        el.style.paddingLeft = '290px';
    }
}

function changeRight(event) {
    var el = document.getElementById("content");
    var el2 = document.getElementById("newBtn");
    var el3 = document.getElementById("right");
    const style = getComputedStyle(el).getPropertyValue('padding-right')
    if (style == '300px'){
        el2.innerHTML = "&#xf0d9 News";
        el3.style.paddingLeft = '20px';
        el.style.paddingRight = '0px';
    }else{
        el2.innerHTML = "News &#xf0da";
        el3.style.paddingLeft = '10px';
        el.style.paddingRight = '300px';
    }
}

// Difficulty vote
function voteDiff(event) {
    var slider = document.getElementById("slider");
    var slideValue = document.querySelector("span");
    slider.disabled = true
    slideValue.style.marginLeft = (slider.value*12.05)+"px";
    slideValue.classList.add("show");
    //do the rest of the action...
};