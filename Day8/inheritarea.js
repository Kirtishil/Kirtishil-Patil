function Shape(base,height){
    this.base=base;
    this.height=height;
    this.rectArea=function(){
        console.log('area of rect is:=',(this.base*this.height)/2);
    }
}

 function Triangle(base,height){
     Shape.call(base,height);
      this.triArea=function(){
         console.log('Area of Triangle is:= ',base*height);
     }
 }
   
var stat=new Shape(10,20);
stat.rectArea();
 var stat2=new Triangle(10,20);
stat2.triArea();  