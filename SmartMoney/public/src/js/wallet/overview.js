const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// header
const _3C1k = $('._3C1k');
const selected = _3C1k.querySelectorAll('._3WuR._1gOp');
selected.forEach(function(value,index){
    if(index == 1){
        value.classList.add('selected');
    }
})

// Thêm giao dịch
const UzPn = $('.UzPn._10vh');
const addInverse = UzPn.querySelector('.egUi.addInverse._3SdL._2_oj._1mpn._3dgm');
const _2XTe1 = UzPn.querySelector('._2XTe');
let check2 = false;
const addTranslation = {
    handleEvents: function () {
        addInverse.onclick = function () {
            UzPn.classList.add('_3Eyk');
            _2XTe1.classList.add('_2Gxn');
        }
    },
    start: function(){
        this.handleEvents();
    }
}

addTranslation.start();


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

    if(check2){
        const egUi = UzPn.querySelector('.egUi.B8bm');      // nút x
        const closeSecondary  = UzPn.querySelector('.egUi.closeSecondary._3SdL._3zVS._1mpn._3dgm');   // nút đóng
        if(_2XTe1 == e.target || egUi.contains(e.target) || closeSecondary.contains(e.target)){
            _2XTe1.classList.remove('_2Gxn');
            UzPn.classList.remove('_3Eyk');
            check2 = false;
        }
    }else{
        if(addInverse.contains(e.target)){
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



// Theo số tiền
const rc_slider = $('.rc-slider');
const rc_slider_track = $('.rc-slider-track.rc-slider-track-1');
const rc_slider_handle1 = $('.rc-slider-handle.rc-slider-handle-1');
const rc_slider_handle2 = $('.rc-slider-handle.rc-slider-handle-2');
const _261b = $('._261b');
const _3RqA = $('._3RqA');

const _261bGia = _261b.innerText;

rc_slider.addEventListener('click', function (e) {
    // Get the target
    const target = e.target;

    // Get the bounding rectangle of target
    const rect = target.getBoundingClientRect();

    // Mouse position
    const x = e.clientX - rect.left;
    const offsetWidth = rc_slider.offsetWidth;
    const pasent = (x/offsetWidth)*100;
    rc_slider_track.style.left = pasent+"%";
    rc_slider_track.style.width = (100-pasent)+"%";
    rc_slider_handle1.style.left = pasent+"%";
    const giaMax = _261bGia * -1;
    const giaMin = _3RqA.innerText * -1;
    let thaydoi = (giaMax - (giaMax-giaMin)/100*pasent);
    thaydoi = parseInt(thaydoi);
    thaydoi = thaydoi*-1;
    _261b.innerText = thaydoi;
});


//  scroll
const Top = UzPn.offsetTop;
document.onscroll = function(){
    if(window.scrollY > Top){
        UzPn.classList.add('zpcn');
    }else{
        UzPn.classList.remove('zpcn');
    }
}