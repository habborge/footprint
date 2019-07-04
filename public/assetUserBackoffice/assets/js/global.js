	var countdownTimer;
	var segundos_c=180;
 var seconds = segundos_c; //número de segundos a contar
 function secondPassed() {
 	$("#mensaje_btn_code").show();
  var minutes = Math.trunc(seconds/60); //calcula el número de minutos
  var remainingSeconds = seconds % 60; //calcula los segundos restantes
  //si los segundos usan sólo un dígito, añadimos un cero a la izq
  if (remainingSeconds < 10) { 
  	remainingSeconds = "0" + remainingSeconds; 
  } 
  document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
  if (seconds == 0) { 
  	clearInterval(countdownTimer); 
  	$("#obtener_codigo").text('Solicitar código de verificación');
  	$("#obtener_codigo").removeAttr('disabled');
  	$("#email").removeAttr('disabled');       
  	$("#email_confirm").removeAttr('disabled');
  	$("#mensaje_btn_code").hide();
  	seconds=segundos_c; 
  } else { 
  	seconds--; 
  } 
}