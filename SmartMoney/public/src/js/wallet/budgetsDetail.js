const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// header
const _3C1k = $('._3C1k');
const selected = _3C1k.querySelectorAll('._3WuR._1gOp');
selected.forEach(function(value,index){
    if(index == 2){
        value.classList.add('selected');
    }
})


// Chỉnh sửa ngân sách
const _2AsN = $$('._2AsN');
const _3SdL = _2AsN.item(1).querySelector('._3SdL._3j13');
const ReactModal__Overlay = $('.ReactModal__Overlay');
let check2 = false;
const _3EUw = ReactModal__Overlay.querySelector('._3EUw');
const egUi = ReactModal__Overlay.querySelector('.egUi.B8bm');
const _3qcS = ReactModal__Overlay.querySelector('._3WuR._3SdL._3qcS');
const _2_oj = ReactModal__Overlay.querySelector('._3WuR._3SdL._2_oj')
const _U5w = ReactModal__Overlay.querySelectorAll('._U5w');

_3EUw.onclick = function(e){
    if(egUi.contains(e.target) || _3qcS.contains(e.target)){
        ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
        check2 = false;
    }
}

_U5w.forEach(function(item){
    item.oninput = function(){
        _2_oj.disabled = false;
    }
})

// Chỉnh sửa giao dich
const _1BwG = $$('._1BwG._1tO1');
let _2k7K;
let _2XTe3;
let jcQj;
let check1 = false;

//   Su li account
const account = $('.dropdownWrap');
const _2XTe = account.querySelector('._2XTe');
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
        const egUi = jcQj.querySelector('.egUi.B8bm');      // nút đóng
        const _3SdL = jcQj.querySelector('._3SdL._3qcS');   // nút hủy
        if(_2XTe3 == e.target || egUi.contains(e.target) || _3SdL.contains(e.target)){
            _2XTe3.classList.remove('_2Gxn');
            jcQj.classList.remove('_1Mlv');
            check1 = false;
        }
    }else{
        _1BwG.forEach(function(value){
            if(value.contains(e.target)){
                value.querySelector('._2XTe').classList.add('_2Gxn');
                jcQj = value.querySelector('.jcQj');
                jcQj.classList.add('_1Mlv');
                _2XTe3 = value.querySelector('._2XTe._2Gxn');
                check1 = true;     
            }          
        })
    }

    if(check2){
        if(!_3EUw.contains(e.target)){
            ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
            check2 = false;
        }
    }else{
        if(_3SdL.contains(e.target)){
            ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
            check2 = true;
        }
    }
}

//  Lịch
const _2pOY = $('._6Szy._2pOY');
const _2sWB = $('._6Szy._2sWB');
const Olv6 = $('.Olv6');

function getDate(month,year){
    const firstDate = new Date(year,month,1).getDate();
    const lastDate = new Date(year,month,0).getDate();
    return 'Th' + month + ' 0' + firstDate + ', ' + year + ' - ' + 'Th' + month + ' ' + lastDate + ', ' + year;
}
var currentdate = new Date();
let currentmonth = currentdate.getMonth()+1;
let currentyear = currentdate.getFullYear();
Olv6.innerText = getDate(currentmonth,currentyear);

_2sWB.onclick = function () {
    if(currentmonth == 12){
        currentmonth = 1;
        currentyear += 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }else{
        currentmonth += 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }
}

_2pOY.onclick = function () {
    if(currentmonth == 1){
        currentmonth = 12;
        currentyear -= 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }else{
        currentmonth -= 1;
        Olv6.innerText = getDate(currentmonth,currentyear);
    }
}


//  scroll
const UzPn = $('.UzPn._10vh');
const Top = UzPn.offsetTop;
document.onscroll = function(){
    if(window.scrollY >= Top){
        UzPn.classList.add('zpcn');
    }else{
        UzPn.classList.remove('zpcn');
    }
}
