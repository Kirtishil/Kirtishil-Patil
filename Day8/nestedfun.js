//nested
var showProduct=function(name,brand,cost){
    return function(discount){
        console.log('Name:=',name,'Brand:=',brand,'Cost:=',cost,'Discount:=',discount);
    }
}
var print=showProduct('OnePlus','OnePlus8T',49000);
print(2000);