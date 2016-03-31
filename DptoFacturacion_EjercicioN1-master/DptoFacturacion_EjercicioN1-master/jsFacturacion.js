function Sumar(){
    var num1 = document.getElementById("PrecioUno").value;
    var num2 = document.getElementById("PrecioDos").value;
    var num3 = document.getElementById("PrecioTres").value;
    
    var resultado = (parseFloat(num1) + parseFloat(num2) + parseFloat(num3));
    alert("El resultado es: " + resultado); 
}

function Promedio(){
    var num1 = document.getElementById("PrecioUno").value;
    var num2 = document.getElementById("PrecioDos").value;
    var num3 = document.getElementById("PrecioTres").value;
    var div = "3";
    
    var resultado = (parseFloat(num1) + parseFloat(num2) + parseFloat(num3)) / parseInt(div);
    alert("El promedio   es: " + resultado); 
}

function PrecioFinal(){
    var num1 = document.getElementById("PrecioUno").value;
    var num2 = document.getElementById("PrecioDos").value;
    var num3 = document.getElementById("PrecioTres").value;
    var final = "1,21";
    
    var resultado = (parseFloat(num1) + parseFloat(num2) + parseFloat(num3)) * parseFloat(final);
    alert("El precio final es: " + resultado); 
}