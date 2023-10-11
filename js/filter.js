document.querySelector('#filterOn').onclick = function() {

    let checked = document.querySelectorAll('input:checked');
    let catalogItem = document.querySelectorAll('.catalog > div');

    let checkedId = [];
    for (let i = 0; i < checked.length; i++) {
        checkedId.push(checked[i].id);
    }

    for (let i = 0; i < catalogItem.length; i++) {

        if ( contains( ((catalogItem[i].dataset.filter).split(' ') ), checkedId) ) {
            catalogItem[i].style.display = 'block';
        }  else {
            catalogItem[i].style.display = 'none';
        }

    }

    function contains(arr1, arr2){
            return ( arr2.every(el => arr1.includes(el)) );
    }
};

document.querySelector('#filterClear').onclick = function() {
    let clear = document.querySelectorAll('input');
    clear.forEach(elem => elem.checked = false);
    let catalogItem = document.querySelectorAll('.catalog > div');
    catalogItem.forEach(item => item.style.display = 'block');

};