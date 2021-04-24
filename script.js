var porcent = document.querySelector('.porcent');
var count = 4;
var load = setInterval(animate, 25);

function animate(){
    if(count == 100){
        clearInterval(load);
        window.open("https://wit-solutions.herokuapp.com/menu.php");
    }
    else{
        count = count + 1;
        porcent.textContent = count + '%';
    }
}
