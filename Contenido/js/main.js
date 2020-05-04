let data=document.querySelectorAll("#Salir");
data.forEach(function(moverle){
    moverle.addEventListener("click",function(eventosshow){
        eventosshow.preventDefault();
        let a=document.querySelector('.con');
        a.classList.remove("animated");
        a.classList.remove("bounceInDown");
        a.classList.add("animated");
        a.classList.add("bounceOutUp");
        setTimeout(function(){
            location.href="../../index.html"
        },700);
        return false;
    });
});
let data2 = document.querySelectorAll("a");
data2.forEach(function(objecto){
    objecto.addEventListener("click",function(Enlaces){
        Enlaces.preventDefault();
        console.log("que");
        let a=document.querySelector('.con');
        a.classList.remove("animated");
        a.classList.remove("fadeInDown");
        a.classList.add("animated");
        a.classList.add("bounceOutUp");
        setTimeout(function(){
        
            location.href="Contenido/Html/restauran.html";
        },700); 
    });
})