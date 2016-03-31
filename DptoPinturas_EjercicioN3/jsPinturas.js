function FahrenheitCentigrados(){
    var num1 = document.getElementById("Temperatura").value;    
    var resultado = (parseFloat(num1) - 32)*(5/9);
    
    alert("Fahrenheit: " + num1 + "\nCentigrados son: " + resultado); 
}

function CentigradosFahrenheit(){
    
    var num1 = document.getElementById("Temperatura").value;    
    var resultado = (parseFloat(num1)*(5/9) )+32;
    
    alert("Centigrados: " + num1 + "\nFahrenheit son: " + resultado); 
}

