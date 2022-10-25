//Get the button
var mybutton = document.getElementById("scroltoTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    document.documentElement.style.scrollBehavior = "smooth"

}


// This is for the click to reach stretch function on stretching page

function scrollto1(x){
    var x = document.getElementById("backStretch");
    x.scrollIntoView();
}
function scrollto2(){
  var x = document.getElementById("hamstringStretch");
  x.scrollIntoView("shoulderStretch");
}
function scrollto3(){
  var x = document.getElementById("shoulderStretch");
  x.scrollIntoView();
}
function scrollto4(){
  var x = document.getElementById("chestStretch");
  x.scrollIntoView();
}

