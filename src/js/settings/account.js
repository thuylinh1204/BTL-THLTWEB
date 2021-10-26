const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

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


//  ngày tháng năm
let string = "<option disabled selected>Chọn năm</option>";
for(var j = 1990; j < 2020 ; j++){
    string += '<option value="'+j+'">'+j+'</option>';
}

year.innerHTML = string;
let yearVal;
year.onchange = function(){
    yearVal = parseInt(this.value);
    month.disabled = false;
    let monthop = "";
    for(j = 1; j <= 12 ; j++){
        monthop += '<option value="'+j+'">'+j+'</option>';
    }    
    month.innerHTML = monthop;
}

month.onchange = function(){
    day.disabled = false;
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


// end Tài khoản