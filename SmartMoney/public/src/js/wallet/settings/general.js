const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// header
const _3C1k = $('._3C1k');
const selected = _3C1k.querySelectorAll('._3WuR._1gOp');

selected.forEach(function(value,index){
    if(index == 3){
        value.classList.add('selected');
    }
})

// sidebar
const _2tYm = $('._2tYm');
const selectedSb = _2tYm.querySelectorAll('._3WuR._1gOp');

selectedSb.forEach(function(value,index){
    if(index == 0){
        value.classList.add('selected');
    }
})

// cập nhập cài đặt
const _3AQP = $('._3AQP');
const _3Iet = $$('._3Iet.IhHS');
const _3SdL = $$('._3SdL._2_oj');
const xoaVi = _3AQP.querySelector('._3WuR._1gOp ')
const ReactModal__Overlay = $('.ReactModal__Overlay');
const _2ZwS = ReactModal__Overlay.querySelector('._2ZwS');
const egUi = ReactModal__Overlay.querySelector('.egUi.B8bm');
const huy = ReactModal__Overlay.querySelector('._3WuR._1gOp ');
let check1 = false;

_3Iet.forEach(function(item,index){
    item.oninput = function(){
        if(index == 0 || index == 1){
            _3SdL.item(0).disabled = false;
        }else if(index == 3){
            _3SdL.item(1).disabled = false;
        }
    }
})

//   Su li account
const account = $('.dropdownWrap');
const _2XTe = $('._2XTe');
const uZrZ = $('.uZrZ');
const _1zUK = $('._1zUK');
const _1WaF = $('._1WaF');
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

    if(check1){
        if(!_2ZwS.contains(e.target) || egUi.contains(e.target) || huy.contains(e.target)){
            ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
            check1 = false;
        }
    }else{
        if(xoaVi.contains(e.target)){
            e.preventDefault();
            ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
            check1 = true;
        }
    }
}