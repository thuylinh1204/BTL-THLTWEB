const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const LWqP = $('.LWqP');
const selected = LWqP.querySelectorAll('._3WuR._1gOp')
const account = $('.dropdownWrap');
const _2XTe = $('._2XTe');
const uZrZ = $('.uZrZ');
const _1zUK = $('._1zUK');
const _1WaF = $('._1WaF');
const removeInverse = $('.egUi.removeInverse._3SdL.DfeI ');
const anh = $('.img');
const _2IY9 = $('._2IY9');
const ZU_i = $('.ZU-i');
const inputimg = $('.inputimg');
const input = document.getElementsByTagName('input');
const day = $('.day');
const month = $('.month');
const year = $('.year');
const select = document.getElementsByTagName('select');

//  SideBarLeft
selected.forEach(function(value,index){
    if(index == 0){
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

//  Tài khoản



// Xóa ảnh
removeInverse.onclick = function(){
    anh.src = "../../src/img/";
    _2IY9.style.display = "none";
    ZU_i.style.display = "flex";
    removeInverse.style.display = "none";
}


// Thêm ảnh
inputimg.onchange = function(){
    var reader = new FileReader();
    reader.readAsDataURL(inputimg.files[0])
    reader.onload = function(e) {
        anh.src = e.target.result;
    }
    _2IY9.style.display = "block";
    ZU_i.style.display = "none";
    removeInverse.style.display = "block";
}

// Điền đầy đủ thông tin
for(var i = 0; i < input.length;i++){
    const value = input.item(i);
    value.oninput = function(){
        $('._3SdL._2_oj').disabled = false;
    }
}

for(var i = 0; i < select.length;i++){
    const value = select.item(i);
    value.oninput = function(){
        $('._3SdL._2_oj').disabled = false;
    }
}

//  ngày tháng năm
let yearVal;
year.onchange = function(){
    yearVal = parseInt(this.value);
}

month.onchange = function(){
    let dayop = "";
    let dateVal;
    switch(parseInt(this.value)){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            dateVal = 31;
            break;
        case 2:
            if(yearVal%4 == 0){
                if(yearVal%100 == 0 && yearVal%400 == 0){
                    dateVal = 29;
                }else{
                    dateVal = 28;
                }
            }else{
                dateVal = 28;
            }
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            dateVal = 30;
            break;
    }

    for(j = 1; j <= dateVal ; j++){
        dayop += '<option value="'+j+'">'+j+'</option>';
    }    
    day.innerHTML = dayop;
}


// xóa tài khoản
const _1S3 = $('._1S3-');
const dele = _1S3.querySelector('._3WuR._1gOp');
const ReactModal__Overlay = $('.ReactModal__Overlay');

dele.onclick = function(e){
    e.preventDefault();
    ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
    document.getElementsByTagName("BODY")[0].style.overflowY = 'hidden';
}

const _3EUw = ReactModal__Overlay.querySelector('._3EUw');
const close = _3EUw.querySelector('.egUi.B8bm');
const huy = _3EUw.querySelector('._3WuR._1gOp');
const _2k7K = _3EUw.querySelectorAll('._2k7K._3fHy')
let _17Fo;
let count;
const Delete = _3EUw.querySelector('._3SdL._1_Kr')

ReactModal__Overlay.onclick = function(e){
    if(!_3EUw.contains(e.target) || close.contains(e.target) || huy == e.target){
        ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
        document.getElementsByTagName("BODY")[0].style.overflowY = 'initial';
    }
}

_2k7K.forEach(function(item){
    item.onclick = function(){
        _17Fo = item.querySelector('._17Fo._1D3_');
        _17Fo.classList.toggle('_3FsX');
        count =  _3EUw.querySelectorAll('._17Fo._1D3_._3FsX').length;

        if(count == 4){
            Delete.disabled = false;
        }else{
            Delete.disabled = true;
        }
    }
})