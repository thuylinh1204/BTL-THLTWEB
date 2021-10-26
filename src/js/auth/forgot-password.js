const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const email = $('#email');
const _3SdL = $('._3SdL._2_oj');

let check1 = false;

email.oninput = function(){
    if(email.value != ""){
        check1 = true;
    }else{
        check1 = false;
    }

    if(check1){
        _3SdL.disabled = false;
    }else{
        _3SdL.disabled = true;
    }
}



