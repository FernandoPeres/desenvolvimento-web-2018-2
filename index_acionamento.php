<?php


// Funciones PHP del pin GPIO 14

  if ($_POST[encender14]) {
   $a- exec("sudo python /var/www/html/leds/gpio/14/acende.py");
   echo $a;
  }

  if ($_POST[apagar14]) {
   $a- exec("sudo python /var/www/html/leds/gpio/14/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear14]) {
   $a- exec("sudo python /var/www/html/leds/gpio/14/piscar.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 14

// Funciones PHP del pin GPIO 15

  if ($_POST[encender15]) {
   $a- exec("sudo python /var/www/html/leds/gpio/15/acende.py");
   echo $a;
  }

  if ($_POST[apagar15]) {
   $a- exec("sudo python /var/www/html/leds/gpio/15/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear15]) {
   $a- exec("sudo python /var/www/html/leds/gpio/15/piscar.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 15

// Funciones PHP del pin GPIO 18

  if ($_POST[encender18]) {
   $a- exec("sudo python /var/www/html/leds/gpio/18/acende.py");
   echo $a;
  }

  if ($_POST[apagar18]) {
   $a- exec("sudo python /var/www/html/leds/gpio/18/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear18]) {
   $a- exec("sudo python /var/www/html/leds/gpio/18/piscar.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 18














// Funciones PHP del pin GPIO 17

  if ($_POST[encender17]) { 
   $a- exec("sudo python /var/www/leds/gpio/17/enciende.py");
   echo $a;
  }

  if ($_POST[apagar17]) { 
   $a- exec("sudo python /var/www/leds/gpio/17/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear17]) { 
   $a- exec("sudo python /var/www/leds/gpio/17/parpadea.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 17


// Funciones PHP del pin GPIO 27

  if ($_POST[encender27]) { 
   $a- exec("sudo python /var/www/leds/gpio/27/enciende.py");
   echo $a;
  }

  if ($_POST[apagar27]) { 
   $a- exec("sudo python /var/www/leds/gpio/27/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear27]) { 
   $a- exec("sudo python /var/www/leds/gpio/27/parpadea.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 27


// Funciones PHP del pin GPIO 4

  if ($_POST[encender4]) { 
   $a- exec("sudo python /var/www/leds/gpio/4/enciende.py");
   echo $a;
  }

  if ($_POST[apagar4]) { 
   $a- exec("sudo python /var/www/leds/gpio/4/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear4]) { 
   $a- exec("sudo python /var/www/leds/gpio/4/parpadea.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 4


// Funciones PHP del pin GPIO 22

  if ($_POST[encender22]) { 
   $a- exec("sudo python /var/www/leds/gpio/22/enciende.py");
   echo $a;
  }

  if ($_POST[apagar22]) { 
   $a- exec("sudo python /var/www/leds/gpio/22/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear22]) { 
   $a- exec("sudo python /var/www/leds/ejecgpio/22/parpadea.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 22

?>


<html>
 <head>
  <!--index.php--> 
 </head>
 <body>

  <!--GPIO17--> 
  <form action="" method="post">
   GPIO 17&nbsp;<input type="submit" name="encender17" value="Encender">
   <input type="submit" name="apagar17" value="Apagar">
   <input type="submit" name="parpadear17" value="Parpadear">

 <br></br>

  <!--GPIO27--> 
  <form action="" method="post">
   GPIO 27&nbsp;<input type="submit" name="encender27" value="Encender">
   <input type="submit" name="apagar27" value="Apagar">
   <input type="submit" name="parpadear27" value="Parpadear">

 <br></br>

  <!--GPIO4--> 
  <form action="" method="post">
   GPIO 04&nbsp;<input type="submit" name="encender4" value="Encender">
   <input type="submit" name="apagar4" value="Apagar">
   <input type="submit" name="parpadear4" value="Parpadear">

 <br></br>

  <!--GPIO22--> 
  <form action="" method="post">
   GPIO 22&nbsp;<input type="submit" name="encender22" value="Encender">
   <input type="submit" name="apagar22" value="Apagar">
   <input type="submit" name="parpadear22" value="Parpadear">




<br></br>

  <!--GPIO14--> 
  <form action="" method="post">
   GPIO 14&nbsp;<input type="submit" name="encender14" value="Encender">
   <input type="submit" name="apagar14" value="Apagar">
   <input type="submit" name="parpadear14" value="Parpadear">

<br></br>

  <!--GPIO15--> 
  <form action="" method="post">
   GPIO 15&nbsp;<input type="submit" name="encender15" value="Encender">
   <input type="submit" name="apagar15" value="Apagar">
   <input type="submit" name="parpadear15" value="Parpadear">

<br></br>

  <!--GPIO18--> 
  <form action="" method="post">
   GPIO 18&nbsp;<input type="submit" name="encender18" value="Encender">
   <input type="submit" name="apagar18" value="Apagar">
   <input type="submit" name="parpadear18" value="Parpadear">





 </body>
</html>








import RPi.GPIO as GPIO
import time

#configurando como BOARD, Pinos Físicos
GPIO.setmode(GPIO.BOARD)

#Configurando a direção do Pino
GPIO.setup(7, GPIO.OUT) #usei 7 pois meu setmode é board, se estivesse usando BCM seria 4
#Ligando o led
GPIO.output(7, GPIO.HIGH)
