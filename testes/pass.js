let input_1 = document.querySelector("#password_1");
let input_2 = document.querySelector("#password_2");
let icon = document.getElementById("ver_pass");
var id = 0;

function pwrd1(){

    if(id == 0){
    icon.src = 'img/icon/eye-off.png';
    input_1.type ='text';
    id = 1;
    }else{
        icon.src = 'img/icon/eye-on.png';
        input_1.type ='password';
        id = 0;
    }
}

function pwrd2(){

    if(id == 0){
    icon.src = 'img/icon/eye-off.png';
    input_1.type ='text';
    input_2.type ='text';
    id = 1;
    }else{
        icon.src = 'img/icon/eye-on.png';
        input_1.type ='password';
        input_2.type ='password';
        id = 0;
    }
}