var showTotal=function(...marks){
    return function(){
        //console.log('Sum is:=',marks.reduce((sum, element) => sum + element))
        return marks.reduce((sum, element) => sum + element);
    }()/3;
}

var avg=showTotal(50,50,50);
console.log('Average is',avg);

//what should i hv to use to display sum after average