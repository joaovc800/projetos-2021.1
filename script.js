var porcent = document.querySelector('.porcent');
var count = 4;
//var load = setInterval(animate, 25);
if(window.location == "https://wit-solutions.herokuapp.com/loading.php"){
    var load = setInterval(animate, 25);
    }
function animate(){
    if(count == 100){
        window.location = "https://wit-solutions.herokuapp.com/menu.php";
        clearInterval(load);        
    }
    else{
        count = count + 1;
        porcent.textContent = count + '%';
    }
}
