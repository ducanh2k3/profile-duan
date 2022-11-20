var men=document.getElementById('menu');
console.log(men);

window.onscroll = function() {
    myFunction()
};
function myFunction() {
    if (document.documentElement.scrollTop > 50) {
        men.classList.add("test");

    } else {
        men.classList.remove("test");
    }
}

