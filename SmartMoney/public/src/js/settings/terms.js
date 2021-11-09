const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const account = $('.dropdownWrap');
const _2XTe = $('._2XTe');
const uZrZ = $('.uZrZ');
const _1zUK = $('._1zUK');
const _1WaF = $('._1WaF');

const mgcW = $('.mgcW');
const _1yjd = $('._1yjd');
const _3SdL = $('._3SdL._2_oj');
const input = $('.check');


const LWqP = $('.LWqP');
const selected = LWqP.querySelectorAll('._3WuR._1gOp')

//  SideBarLeft
selected.forEach(function(value,index){
    if(index == 4){
        value.classList.add('selected');
    }
})


//   Su li account
let check = false;

document.onclick = function(e){
    if(check){
        if(!_1zUK.contains(e.target)){
            _2XTe.classList.remove('_2Gxn');
            uZrZ.classList.remove('_1z7D');
            _1zUK.classList.remove('_1z7D');
            _1WaF.classList.remove('_1z7D');
            check = false;
        }
    }else{
        if(account.contains(e.target)){
            _2XTe.classList.add('_2Gxn');
            uZrZ.classList.add('_1z7D');
            _1zUK.classList.add('_1z7D');
            _1WaF.classList.add('_1z7D');
            check = true;
        }
    }
}

//   post
mgcW.onclick = function(){
    _1yjd.classList.toggle('notchecked');
    _3SdL.disabled = false;
    if(_1yjd.classList.contains('notchecked')){
        input.value = false;
    }else{
        input.value = true;
    }
}