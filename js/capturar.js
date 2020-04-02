function capturar() {
   
   var nombreId = document.getElementById("nombre").value;
   
   var emailId = document.getElementById("email").value;
   
   var phoneId = document.getElementById("phone").value;
   
   var messsgeId = document.getElementById("message").value;
   
   var arrCaptura = [nombreId, emailId, phoneId, messsgeId]
   
   return console.log(arrCaptura[0]);
}
