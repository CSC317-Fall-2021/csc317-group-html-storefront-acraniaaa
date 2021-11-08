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
        console.log("wtf");
        //gets the index number of the filter, in order to remove the filter (since it can be anywhere in the array)
        let x = array.indexOf(filter);
        array.splice(x, 1)
    } else {
        array.push(filter);
    }
}

/*

***** Below are scrapped ideas for a cross reference filter between colors and sizes, I may work on this once we can use jQuery b/c this is all a mess *****
function filterProductColor(color) {
    let c = color.getAttribute("data-color");
    //here, we figure out how many products share the same color and note down their index values 
    for(let i = 0; i < products.length; i++) {
        if(products[i].getAttribute("data-color") === c){
            addToArray(i, colorFilters);
        }
    }
    console.log(colorFilters);
    //check if there are any filters. if there are no filters, then show all products               FINE
    if(colorFilters.length === 0 && sizeFilters.length === 0){
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'block';
        }
    }else if(colorFilters.length !== 0) {  //this will run when there is a filter
        //first, we remove all products, then we'll add them back based on which filter is on
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'none';
        }
        //display the selected products using the filters 
        for(let i = 0; i < colorFilters.length; i++){
            if(sizeFilters.length !== 0 && colorFilters.length !== 0){
                 let idk = sizeFilters[i]; 
                 let test = products[sizeFilters[i]].getAttribute("data-color");
                 if(test === c){
                     products[idk].style.display = 'block';
                     console.log("adsklfja;sdflkj");
                 } else {
                     console.log("bruh");
                 }
                 //console.log("size function");
        
            } else {
                products[colorFilters[i]].style.display = 'block';
            }
        } 
    } else if(sizeFilters.length !== 0) {
        for(let i = 0; i < sizeFilters.length; i++){
            products[sizeFilters[i]].style.display = 'block';

        }
    }
}
function filterProductSize(size) {
    let s = size.getAttribute("data-size");
    //console.log(s);
    //here, we figure out how many products share the same size and note down their index values 
    for(let i = 0; i < products.length; i++) {
        if(products[i].getAttribute("data-size") === s){
            addToArray(i, sizeFilters);
        }
    }
    //console.log(sizeFilters);
    //check if there are any filters. if there are no filters, then show all products
    if(sizeFilters.length === 0 && colorFilters.length === 0){
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'block';
        } 
    }else if(sizeFilters.length !== 0) {
        for(let i = 0; i < products.length; i++) {
            products[i].style.display = 'none';
        }
        //display the selected products using the filters 
        for(let i = 0; i < sizeFilters.length; i++){
            if(sizeFilters.length !== 0 && colorFilters.length !== 0){
                //crossReferenceFilters(i, colorFilters, "data-size");
                let idk = colorFilters[i]; 
                //console.log(products[idk]);
                //console.log(products[idk].getAttribute("data-size"));
                let test = products[colorFilters[i]].getAttribute("data-size");
                if(test === s){
                    products[idk].style.display = 'block';
                    console.log("adsklfja;sdflkj");
                } else {
                    console.log("bruh");
                }
                //console.log("size function");
            } else {
                products[sizeFilters[i]].style.display = 'block';
            }
        } 
    //when unchecking a size, there may still be colors selected. this else if statement will revert the size filter and show the color filters
    } else if(colorFilters.length !== 0) {
        for(let i = 0; i < colorFilters.length; i++){
            products[colorFilters[i]].style.display = 'block';

        }
    }
}
*/

/*  backup
function filterProductColor(c) {
    addToFilter(c, enabledFilters);
    //check if there are any filters. if there are no filters, then show all products
    if(enabledFilters.length === 0 && sizeFilters.length === 0){
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
            console.log(sizeFilters);
        }
    }
}
*/
