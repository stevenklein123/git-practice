let products = [];

products.push("Shampoo");
products.push("Sabon");
products.push("Toothpaste");


for(let i=0; i < products.length; i++)
    {
        console.log(products[i]);
    }


console.log(`First product in array : ${products[0]}`);
console.log(`Last product in array : ${products[products.length-1]}`);


for(let i=0; i < products.length; i++)
    {
        if(products[i].toLocaleLowerCase() === "sabon")
            {
                products[i] = "Liquid Soap";
            }
    }


    console.log(products);

    products.splice(i, 1);

    console.log(products);