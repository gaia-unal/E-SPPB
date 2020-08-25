
var movio=true;
function menuMap(){

    var menu= document.getElementById("flotante");
    var menuM= document.getElementById("menuC");


    if(movio){
        menu.classList.add("moveLeft");
        // menuM.classList.add("moveLeftMenu");
        // menuM.style.fontSize = '1.5rem';
        menuM.style.width = 200;
        
        movio=false;
    }else{
        menu.classList.remove("moveLeft");
        // menuM.classList.remove("moveLeftMenu");
        menuM.style.width = 0;
        // menuM.style.fontSize = '10px';
        movio=true;
    }
    

}