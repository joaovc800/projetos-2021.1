var porcent = document.querySelector('.porcent');
var count = 4;
var load = setInterval(animate, 25);

function animate(){
    if(count == 100){
        window.location.href('https://wit-solutions.herokuapp.com/menu.php')
        clearInterval(load);
    }
    else{
        count = count + 1;
        porcent.textContent = count + '%';
    }
}
