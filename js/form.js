/**
 * Created by Melvin on 20.06.2017.
 */
function firstToUpper(domElement){
    var  str = domElement.value;
    domElement.value =  str.charAt(0).toUpperCase() + str.slice(1);
}

function calcAge(domElement){
    var today = new Date();
    var birthDate = new Date(domElement.value);
    var age = today.getYear() - birthDate.getYear();
    document.getElementById("age").innerHTML = age;
}


