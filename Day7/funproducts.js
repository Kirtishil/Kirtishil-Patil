//product
var Product = function (product_name, price) {
    this.product = product_name;
    this.price = price;
    this.printDetails = function () {
        console.log('Name of product is:= ', this.product);
        console.log('Price of product is:= ', this.price);
    }
}
var product = new Product('OnePlus8', 40000);
product.printDetails();
var product1 = new Product('OnePlus7', 38200);
product1.printDetails();

Product.prototype.brand = 'OnePlus';
Product.prototype.discountPrice = function (discount) {
    console.log('new price of', this.product, 'is:=', (this.price - discount));
}

product.discountPrice(1500);
product1.discountPrice(1000);