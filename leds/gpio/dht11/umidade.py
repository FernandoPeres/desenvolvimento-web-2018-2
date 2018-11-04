# Programa : Sensor de temperatura DHT11 com Raspberry Pi B+
# Autor : FILIPEFLOP

# Carrega as bibliotecas
import Adafruit_DHT
import RPi.GPIO as GPIO
import time

# Define o tipo de sensor
sensor = Adafruit_DHT.DHT11
#sensor = Adafruit_DHT.DHT22

GPIO.setmode(GPIO.BOARD)

# Define a GPIO conectada ao pino de dados do sensor
pino_sensor = 25

# Efetua a leitura do sensor
umid, temp = Adafruit_DHT.read_retry(sensor, pino_sensor);
# Caso leitura esteja ok, mostra os valores na tela
if umid is not None:
  temperatura = ("{0:0.1f}").format(temp, umid);
  umidade = ("{1:0.1f}").format(temp, umid);
else:
  # Mensagem de erro de comunicacao com o sensor
  print("Falha ao ler dados do DHT11 !!!")

#print temperatura;
print umidade;

