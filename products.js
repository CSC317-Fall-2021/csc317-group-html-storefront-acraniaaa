var products = document.getElementsByClassName('grid-product');
var enabledFilters = [];

function filterProductColor(color) {
    let c = color.getAttribute("data-color");
    //here, we figure out how many products share the same color and note down their index values 
    for(let i = 0; i < products.length; i++) {
        if(products[i].getAttribute("data-color") === c){
            addToFilter(i, enabledFilters);
        }
    }
    //check if there are any filters. if there are no filters, then show all products
    if(enabledFilters.length === 0){
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'block';
        }
    }else if(enabledFilters.length !== 0) {  //this will run when there is a filter
        //first, we remove all products, then we'll add them back based on which filter is on
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'none';
        }
        //display the selected products using the filters 
        for(let i = 0; i < enabledFilters.length; i++){
            products[enabledFilters[i]].style.display = 'block';
            console.log(enabledFilters);            
        }
    }
}

function addToFilter(filter, array) {
    if(array.includes(filter)){
        //gets the index number of the filter, in order to remove the filter (since it can be anywhere in the array)
        let x = array.indexOf(filter);
        array.splice(x, 1)
    } else {
        array.push(filter);
    }
}