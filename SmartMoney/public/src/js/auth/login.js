const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const email = $('#email');
const password = $('#password');
const _3SdL = $('._3SdL._2_oj');

let check1 = false;
let check2 = false;

email.oninput = function(){
    if(email.value != ""){
        check1 = true;
    }else{
        check1 = false;
    }

    if(check1 && check2){
        _3SdL.disabled = false;
    }else{
        _3SdL.disabled = true;
    }
}

password.oninput = function(){
    if(email.value != ""){
        check1 = true;
    }

    if(password.value != ""){
        check2 = true;
    }else{
        check2 = false;
    }

    if(check1 && check2){
        _3SdL.disabled = false;
    }else{
        _3SdL.disabled = true;
    }
}



