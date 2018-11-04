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

# Informacoes iniciais

umid, temp = Adafruit_DHT.read_retry(sensor, pino_sensor);
if umid is not None and temp is not None:
	print ("Temperatura = {0:0.1f}  Umidade = {1:0.1f}n").format(temp, umid);
else:
	print("Falha ao ler dados do DHT11 !!!")
