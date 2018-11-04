#-*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time

#configurando como BOARD, Pinos Físicos
GPIO.setmode(GPIO.BOARD)

#Configurando a direção do Pino
GPIO.setup(7, GPIO.OUT) #usei 7 pois meu setmode é board, se estivesse usando BCM seria 4
#Ligando o led
GPIO.output(7, GPIO.HIGH)

#Ligar e desligar o led 5 vezes
for n in (1,2,3,4,5):
        GPIO.output(7, GPIO.HIGH)
        time.sleep(1)
        GPIO.output(7, GPIO.LOW)
        time.sleep(1)

#E libertamos o GPIO
GPIO.cleanup()
