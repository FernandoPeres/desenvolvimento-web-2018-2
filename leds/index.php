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
   $a- exec("sudo python /var/www/html/leds/gpio/17/acende.py");
   echo $a;
  }

  if ($_POST[apagar17]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/17/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear17]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/17/piscar.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 17


// Funciones PHP del pin GPIO 27

  if ($_POST[encender27]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/27/acende.py");
   echo $a;
  }

  if ($_POST[apagar27]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/27/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear27]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/27/piscar.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 27


// Funciones PHP del pin GPIO 4

  if ($_POST[encender4]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/4/acende.py");
   echo $a;
  }

  if ($_POST[apagar4]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/4/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear4]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/4/piscar.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 4


// Funciones PHP del pin GPIO 22

  if ($_POST[encender22]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/22/acende.py");
   echo $a;
  }

  if ($_POST[apagar22]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/22/apaga.py");
   echo $a;
  }

  if ($_POST[parpadear22]) { 
   $a- exec("sudo python /var/www/html/leds/gpio/22/piscar.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 22

// inicil do comando do dht11

  if ($_POST[medir_temp]) {
   $a- exec("sudo python /var/www/html/leds/gpio/dht11/temperatura.py"));
   echo $a;
  }


// final do comando do dht11





?>

<html>
 <head>
                        <!--index.php--> 
 </head>
 <body>

  <!--GPIO17-->
  <form action="" method="post">
   GPIO 17&nbsp;<input type="submit" name="encender17" value="Acender">
   <input type="submit" name="apagar17" value="Apagar">
   <input type="submit" name="parpadear17" value="Piscar">

 <br></br>

  <!--GPIO27-->
  <form action="" method="post">
   GPIO 27&nbsp;<input type="submit" name="encender27" value="Acender">
   <input type="submit" name="apagar27" value="Apagar">
   <input type="submit" name="parpadear27" value="Piscar">

 <br></br>

  <!--GPIO4-->
  <form action="" method="post">
   GPIO 04&nbsp;<input type="submit" name="encender4" value="Acender">
   <input type="submit" name="apagar4" value="Apagar">
   <input type="submit" name="parpadear4" value="Piscar">

 <br></br>

  <!--GPIO22-->
  <form action="" method="post">
   GPIO 22&nbsp;<input type="submit" name="encender22" value="Acender">
   <input type="submit" name="apagar22" value="Apagar">
   <input type="submit" name="parpadear22" value="Piscar">

<br></br>

  <!--GPIO14--> 
  <form action="" method="post">
   GPIO 14&nbsp;<input type="submit" name="encender14" value="Acender">
   <input type="submit" name="apagar14" value="Apagar">
   <input type="submit" name="parpadear14" value="Piscar">

<br></br>

  <!--GPIO15--> 
  <form action="" method="post">
   GPIO 15&nbsp;<input type="submit" name="encender15" value="Acender">
   <input type="submit" name="apagar15" value="Apagar">
   <input type="submit" name="parpadear15" value="Piscar">

<br></br>

  <!--GPIO18--> 
  <form action="" method="post">
   GPIO 18&nbsp;<input type="submit" name="encender18" value="Acender">
   <input type="submit" name="apagar18" value="Apagar">
   <input type="submit" name="parpadear18" value="Piscar">

<br></br>

  <!--DHT11-->
  <form action="" method="post">
   DHT11-TEMPERATURA&nbsp;<input type="submit" name="medir_temp" value="medir_temp">
   <input type="text" name="temperatura" value="">









 </body>
</html>
