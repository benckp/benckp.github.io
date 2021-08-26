//////////////////////////////////////////////////////////////////////////
// onclick close panels

function changeLeft(event) {
    let el = document.getElementById("content");
    let el2 = document.getElementById("forumBtn");
    let els = document.getElementsByClassName("forumMenu");
    const style = getComputedStyle(el).getPropertyValue('padding-left')
    if (style == '290px'){
        el2.innerHTML = "Forums &#xf0da";
        el.style.paddingLeft = '0px';
        for (let i = 0; i < els.length; i++) {
            let el3 = els[i];
            el3.style.display = 'none';
        }
    }else{
        el2.innerHTML = "&#xf0d9 Forums";
        el.style.paddingLeft = '290px';
        for (let i = 0; i < els.length; i++) {
            let el3 = els[i];
            el3.style.display = 'block';
        }
    }
}

function changeRight(event) {
    let el = document.getElementById("content");
    let el2 = document.getElementById("newBtn");
    let el3 = document.getElementById("right");
    const style = getComputedStyle(el).getPropertyValue('padding-right')
    if (style == '300px'){
        el2.innerHTML = "&#xf0d9 News";
        el3.style.paddingLeft = '20px';
        el3.style.width = '20px';
        el.style.paddingRight = '0px';
    }else{
        el2.innerHTML = "News &#xf0da";
        el3.style.paddingLeft = '10px';
        el3.style.width = '290px';
        el.style.paddingRight = '300px';
    }
}

// Difficulty vote
function voteDiff(event) {
    let slider = document.getElementById("slider");
    let slideValue = document.querySelector("span");
    //slider.disabled = true
    slideValue.style.marginLeft = (slider.value*12.05)+"px";
    slideValue.classList.add("show");
    //do the rest of the action...
};

// Open a Question
$(document).ready(function(){
    $("#open").click(function(){
        $("#middle").load('createQuestion.php');
    });
});

$(document).ready(function(){
    $("#home").click(function(){
        $("#middle").load('currentQuestion.php');
    });
});

// Editor
CKEDITOR.replace('editor', {
    on: {
        change: function() {
            document.getElementById('preview').style.display = 'block';
            document.getElementById('preview').innerHTML = '<b style="font-size: 20px">Preview of content</b> <hr> ' + CKEDITOR.instances['editor'].getData();
            MathJax.Hub.Queue(["Typeset", MathJax.Hub, document.getElementById("preview")]);
        }
    }
});
