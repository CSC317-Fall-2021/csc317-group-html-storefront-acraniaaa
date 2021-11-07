 var products = document.getElementsByClassName('grid-product');
 var enabledFilters = [];
function filterProduct(e) {
    addToFilter(e);
    //check if there are any filters. if there are no filters, then show all products
    if(enabledFilters.length === 0){
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'block';
        }
    } else if(enabledFilters.length !== 0) {  //this will run when there is a filter
        //first, we remove all products, then we'll add them back based on which filter is on
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'none';
        }
        for(let i = 0; i < enabledFilters.length; i++){
            products[enabledFilters[i]].style.display = 'block';
            console.log(enabledFilters);
        }
    }


}

//this function will add a filter to the enabledFilters array. 
function addToFilter(filter) {
    if(enabledFilters.includes(filter)){
        let x = enabledFilters.indexOf(filter);
        enabledFilters.splice(x, 1)
    } else {
        enabledFilters.push(filter);
    }
}
