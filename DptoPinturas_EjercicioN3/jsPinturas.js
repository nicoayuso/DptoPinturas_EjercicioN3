function Rectangulo(){
    var num1 = document.getElementById("Largo").value;
    var num2 = document.getElementById("Ancho").value;
    
    
    var resultado = (parseFloat(num1) + parseFloat(num2))*2*3;
    alert("El resultado es: " + resultado); 
}

function Circulo(){
    
    var num3 = document.getElementById("Radio").value;
    
    var resultado = (parseFloat(num3) * parseFloat(num3))* parseFloat("3,14");
    alert("El resultado es: " + resultado); 
}

function Materiales(){
    
   var num1 = document.getElementById("Largo").value;
    var num2 = document.getElementById("Ancho").value;  
    
    var resultado = (parseFloat(num1) + parseFloat(num2));
    alert("Bolsas de Cemento: " + resultado*2 +
          "\nBolsas de Cal: " + resultado*3); 
    
}