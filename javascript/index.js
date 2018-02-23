document.getElementById("result");
var table1 =["Javascript", "Ruby"],
    table2=["Php", "Html"],
     table3=["CSS", "Python"];
var tables=table1.concat(table2,table3);
console.log(tables);



var  newobj = { "guadeloupe": 971, "martinique": 972, "guyane": 973, "reunion": 974}
var newobjs=Object.values(newobj);
console.log(newobjs);

var myNewArray=["italy","france","irlande"];
var myNewArrays=myNewArray.push("russie")
console.log(myNewArray);

var myfirstArr=["guadeloupe","martinique","guyane"]
var myfirstArrs=myfirstArr.shift();
console.log(myfirstArr);