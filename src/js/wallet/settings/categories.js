const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

//  tạo category 
const _33IL = $('._33IL._3TLW');
const _2_oj = _33IL.querySelector('._3SdL._2_oj');
const _3Iet = _33IL.querySelectorAll('._3Iet.IhHS');
const _2XTe1 = _33IL.querySelector('._2XTe');
const _3PIU = _33IL.querySelector('._3PIU');
const _33BO = _33IL.querySelector('._33BO');
const _3fS2 = _33IL.querySelector('._3fS2.o-cw._1B3o1');
let open,bieutuong;
let Select_menu;
let check1 = false;
let count1 = false,count2 = false,count3=false;

function addCategory(){
    if(count1 && count2 && count3){
        _2_oj.disabled = false;
    }else{
        _2_oj.disabled = true;
    }
}

_3Iet.forEach(function(item,index){
    if(index == 0){
        bieutuong = item.querySelector('._3-9b._2_Bp');
    }
    item.onclick = function(e){
        _2XTe1.classList.add('_2Gxn');
        _33BO.classList.add('_1j3Q');
        _3fS2.classList.add('_259J');
        check1 = true;
        if(open){
            open.classList.remove('open');
            Select_menu.style.display = 'none';
        }
        if(index == 0 || index == 1){
            open = item.querySelector('._1BZ3');
            if(open.contains(e.target)){
                open.classList.add('open');
                Select_menu = item.querySelector('.Select-menu-outer-wrapper');
                Select_menu.style.display = 'grid';
                Select_menu.querySelectorAll('._2s9x').forEach(function(item1){
                    item1.onclick = function(){
                        if(index == 0){
                            open.querySelector('svg').innerHTML = item1.querySelector('svg').innerHTML;
                            count1 = true;
                            addCategory();
                        }else{
                            open.querySelector('svg path').style.fill = item1.querySelector('span').style.backgroundColor;
                            bieutuong.style.backgroundColor = item1.querySelector('span').style.backgroundColor;
                            count2 = true;
                            addCategory();
                        }
                        Select_menu.style.display = 'none';
                    }
                });
            }
        }else if(index == 2){
            open =  item.querySelector('input');
            Select_menu = item.querySelector('.rong');
            open.oninput = function(){
                open.classList.add('open');
                if(item.querySelector('input').value != ''){
                    count3 = true;
                    addCategory();
                }else{
                    count3 = false;
                    addCategory();
                }
            }
        }else if(index == 3){
            open = item.querySelector('.Select-control');
            if(open.contains(e.target)){
                open.classList.add('open');
                Select_menu = item.querySelector('.Select-menu-outer-wrapper');
                Select_menu.style.display = 'block';
                Select_menu.querySelectorAll('.Select-value').forEach(function(item1){
                    item1.onclick = function(){
                        Select_menu.querySelector('.Select-value-label.selected').classList.remove('selected');
                        item.querySelector('.Select-control .Select-value-label span').innerText = item1.querySelector('.Select-value-label span').innerText;
                        item1.querySelector('.Select-value-label').classList.add('selected');
                        Select_menu.style.display = 'none';
                    }
                });
            }
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
        if(!_3PIU.contains(e.target)){
            _2XTe1.classList.remove('_2Gxn');
            _33BO.classList.remove('_1j3Q');
            _3fS2.classList.remove('_259J');
            if(open){
                open.classList.remove('open');
            }
            Select_menu.style.display = 'none';
            check1 = false;
        }
        if(!open.classList.contains('open')){
            Select_menu.style.display = 'none';
        }
    }
}

//  xóa, hợp nhất, Thêm
const UzPn = $('.UzPn._2pdK');
const DfeI = UzPn.querySelector('._3SdL.DfeI ');  //nút xóa
const _3j13 = UzPn.querySelector('._3SdL._3j13'); // nút hợp nhất 
const Top = UzPn.offsetTop;  // độ cao của UzPn
const _3SdL = UzPn.querySelector('._3SdL._2_oj');

document.onscroll = function(){
    if(window.scrollY >= Top){
        UzPn.classList.add('_2i1J');
        _3SdL.classList.add('_1rIk');
    }else{
        UzPn.classList.remove('_2i1J');
        _3SdL.classList.remove('_1rIk');
    }
}

//  category
const category1 = $('.category1');
const childcategory1 = category1.querySelectorAll('.childcategory');
const jcQj1 = category1.querySelectorAll('.jcQj');
let _3FsX1;
let dragSrcEl;

childcategory1.forEach(function(value){
    value.addEventListener('dragstart', function(e){
        e.stopPropagation(); 
        dragSrcEl = this;
        console.log(this);
        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/html', this.innerHTML);
    });
    value.addEventListener('dragend', function (e){
        e.stopPropagation(); 
    });
    value.addEventListener('dragover',function (e){
        if (e.preventDefault) {
            e.preventDefault();
          }
    });
    value.addEventListener('drop', function(e){
        console.log(this);
        e.stopPropagation(); // stops the browser from redirecting.
        if (dragSrcEl !== this) {
            dragSrcEl.innerHTML = this.innerHTML;
            this.innerHTML = e.dataTransfer.getData('text/html');
        }
    });
})


jcQj1.forEach(function(value){
    value.onclick = function(e){
        if(value.querySelector('._2k7K').contains(e.target)){
            value.querySelector('._2k7K').querySelector('._17Fo').classList.toggle('_3FsX');
        }

        _3FsX1 = $$('._17Fo._3FsX').length;
        if(_3FsX1 > 1){
            _3j13.disabled = false;
            DfeI.disabled = false;
        }else if(_3FsX1 > 0){
            _3j13.disabled = true;
            DfeI.disabled = false;
        }else{
            _3j13.disabled = true;
            DfeI.disabled = true;
        }
    }
})

const category2 = $('.category2');
const jcQj2 = category2.querySelectorAll('.jcQj');
let _3FsX2;

jcQj2.forEach(function(value){
    value.onclick = function(e){
        if(value.querySelector('._2k7K').contains(e.target)){
            value.querySelector('._2k7K').querySelector('._17Fo').classList.toggle('_3FsX');
        }

        _3FsX2 = $$('._17Fo._3FsX').length;
        if(_3FsX2 > 1){
            _3j13.disabled = false;
            DfeI.disabled = false;
        }else if(_3FsX2 > 0){
            _3j13.disabled = true;
            DfeI.disabled = false;
        }else{
            _3j13.disabled = true;
            DfeI.disabled = true;
        }
    }
})
