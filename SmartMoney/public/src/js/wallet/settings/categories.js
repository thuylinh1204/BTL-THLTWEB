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
    if(index == 1){
        value.classList.add('selected');
    }
})

//  tạo category 
const _33IL = $('._33IL._3TLW');
const _2_oj = _33IL.querySelector('._3SdL._2_oj');
const _3Iet = _33IL.querySelectorAll('._3Iet.IhHS');
const _2XTe1 = _33IL.querySelector('._2XTe');
const _3PIU = _33IL.querySelector('._3PIU');
const _33BO = _33IL.querySelector('._33BO');
const _3fS2 = _33IL.querySelector('._3fS2.o-cw._1B3o1');
let open,bieutuong1,Select_menu;
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
        bieutuong1 = item.querySelector('._3-9b._2_Bp');
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
                            bieutuong1.style.backgroundColor = item1.querySelector('span').style.backgroundColor;
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

//  category
const category1 = $('.category1');
const childcategory1 = category1.querySelectorAll('.childcategory');
const jcQj1 = category1.querySelectorAll('.jcQj');
let _2XTe2,_3Iet1,tat,bieutuong2,_3FsX1,dragSrcEl,xoa;
const ReactModal__Overlay = $('.ReactModal__Overlay');
const _2ZwS = ReactModal__Overlay.querySelector('._2ZwS');
const img = ReactModal__Overlay.querySelector('._3-9b._3NXo');
const egUi = ReactModal__Overlay.querySelector('.egUi.B8bm');
const huy = ReactModal__Overlay.querySelector('._3WuR._1gOp ');
let check2 = false,check3 = false;

jcQj1.forEach(function(value){
    value.onclick = function(eve){
        if(value.querySelector('._2k7K').contains(eve.target)){
            value.querySelector('._2k7K').querySelector('._17Fo').classList.toggle('_3FsX');
        }

        // xóa category
        if(value.querySelector('.egUi.removeInverse._3SdL.DfeI').contains(eve.target)){
            xoa = value.querySelector('.egUi.removeInverse._3SdL.DfeI');
            ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
            img.innerHTML = value.querySelector('._3fS2._qSI._1Vxc ._3-9b._1Oob').innerHTML;
            img.style.backgroundColor = value.querySelector('._3fS2._qSI._1Vxc ._3-9b._1Oob').style.backgroundColor;
            ReactModal__Overlay.querySelector('strong').innerText = value.querySelector('.KKUC').innerText;
        }

        // sửa category
        if(value.querySelector('.egUi.settings._3SdL._3j13').contains(eve.target)){
            _2XTe2 = value.querySelector('._2XTe');
            _2XTe2.classList.add('_2Gxn');
            tat = value;
            tat.classList.add('_2Xou');
            _3Iet1 = value.querySelectorAll('._33BO ._3Iet.IhHS');
            check2 = true;
            let count4 = false;

            _3Iet1.forEach(function(item,index){
                if(index == 0){
                    bieutuong2 = item.querySelector('._3-9b._2_Bp');
                }
                item.onclick = function(e){
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
                                        open.querySelector('._3-9b._2_Bp').innerHTML = item1.querySelector('span').innerHTML;
                                        if(count4){
                                            value.querySelector('._3SdL._2_oj').disabled = false;
                                        }else{
                                            value.querySelector('._3SdL._2_oj').disabled = true;
                                        }
                                    }else{
                                        open.querySelector('svg path').style.fill = item1.querySelector('span').style.backgroundColor;
                                        bieutuong2.style.backgroundColor = item1.querySelector('span').style.backgroundColor;
                                        if(count4){
                                            value.querySelector('._3SdL._2_oj').disabled = false;
                                        }else{
                                            value.querySelector('._3SdL._2_oj').disabled = true;
                                        }
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
                                count4 = true;
                                if(count4){
                                    value.querySelector('._3SdL._2_oj').disabled = false;
                                }else{
                                    value.querySelector('._3SdL._2_oj').disabled = true;
                                }
                            }else{
                                count4 = false;
                                if(count4){
                                    value.querySelector('._3SdL._2_oj').disabled = false;
                                }else{
                                    value.querySelector('._3SdL._2_oj').disabled = true;
                                }
                            }
                        }
                    }
                }
            })
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
});

const category2 = $('.category2');
const jcQj2 = category2.querySelectorAll('.jcQj');
let _3FsX2;

jcQj2.forEach(function(value){
    value.onclick = function(eve){
        if(value.querySelector('._2k7K').contains(eve.target)){
            value.querySelector('._2k7K').querySelector('._17Fo').classList.toggle('_3FsX');
        }

        // xóa category
        if(value.querySelector('.egUi.removeInverse._3SdL.DfeI').contains(eve.target)){
            xoa = value.querySelector('.egUi.removeInverse._3SdL.DfeI');
            ReactModal__Overlay.classList.add('ReactModal__Overlay--after-open');
            img.innerHTML = value.querySelector('._3fS2._qSI._1Vxc ._3-9b._1Oob').innerHTML;
            img.style.backgroundColor = value.querySelector('._3fS2._qSI._1Vxc ._3-9b._1Oob').style.backgroundColor;
            ReactModal__Overlay.querySelector('strong').innerText = value.querySelector('.KKUC').innerText;
        }

        // sửa category
        if(value.querySelector('.egUi.settings._3SdL._3j13').contains(eve.target)){
            _2XTe2 = value.querySelector('._2XTe');
            _2XTe2.classList.add('_2Gxn');
            tat = value;
            tat.classList.add('_2Xou');
            _3Iet1 = value.querySelectorAll('._33BO ._3Iet.IhHS');
            check2 = true;
            let count4 = false;

            _3Iet1.forEach(function(item,index){
                if(index == 0){
                    bieutuong2 = item.querySelector('._3-9b._2_Bp');
                }
                item.onclick = function(e){
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
                                        open.querySelector('._3-9b._2_Bp').innerHTML = item1.querySelector('span').innerHTML;
                                        if(count4){
                                            value.querySelector('._3SdL._2_oj').disabled = false;
                                        }else{
                                            value.querySelector('._3SdL._2_oj').disabled = true;
                                        }
                                    }else{
                                        open.querySelector('svg path').style.fill = item1.querySelector('span').style.backgroundColor;
                                        bieutuong2.style.backgroundColor = item1.querySelector('span').style.backgroundColor;
                                        if(count4){
                                            value.querySelector('._3SdL._2_oj').disabled = false;
                                        }else{
                                            value.querySelector('._3SdL._2_oj').disabled = true;
                                        }
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
                                count4 = true;
                                if(count4){
                                    value.querySelector('._3SdL._2_oj').disabled = false;
                                }else{
                                    value.querySelector('._3SdL._2_oj').disabled = true;
                                }
                            }else{
                                count4 = false;
                                if(count4){
                                    value.querySelector('._3SdL._2_oj').disabled = false;
                                }else{
                                    value.querySelector('._3SdL._2_oj').disabled = true;
                                }
                            }
                        }
                    }
                }
            })
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

    if(check2){
        if(_2XTe2.contains(e.target)){
            _2XTe2.classList.remove('_2Gxn');
            tat.classList.remove('_2Xou');
            check2 = false;
        }
    }

    if(check3){
        if(!_2ZwS.contains(e.target) || egUi.contains(e.target) || huy.contains(e.target)){
            ReactModal__Overlay.classList.remove('ReactModal__Overlay--after-open');
            check3 = false;
        }
    }else{
        if(xoa.contains(e.target)){
            check3 = true;
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


