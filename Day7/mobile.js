let mobile1 = {
            mobile:"OnePlus", 
            model:"OnePlus 8T",
            color:"Black",
            Price:42999,
            accessories:['charger', 'headphone'], 
            features:{Ram:'12GB', OS:'Android11'} //not working
          };

var mobile2 = {
            mobile:"Apple",
            model:"iPhone 12",
            color:"Red",
            Price:79999,
            accessories:['charger', 'earphone'], 
            features:{Ram:'8GB', OS:'IOS14'}  //not working
            };

// console.log(mobile1)
// console.log('........................................................')
// console.log(mobile2)

for (const property in mobile1) {
    console.log(`${property}: ${mobile1[property]}`);
  }

for (const property in mobile2) {
    console.log(`${property}: ${mobile2[property]}`);
  }  