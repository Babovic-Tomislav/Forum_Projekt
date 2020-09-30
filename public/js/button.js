const btnScrollToTop=document.querySelector("#back-to-top");

btnScrollToTop.addEventListener("click", function(){
    window.scrollTo(0,0);
});

window.addEventListener('scroll', (e) => {
    var scrollTopBtn = document.getElementById('back-to-top');
    if (window.scrollY >= 200) {
        scrollTopBtn.style.visibility = "visible";
    } else {
        scrollTopBtn.style.visibility = "hidden";
    }
});
