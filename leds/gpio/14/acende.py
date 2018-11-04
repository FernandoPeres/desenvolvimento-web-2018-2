#-*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time

#configurando como BOARD, Pinos Físicos
GPIO.setmode(GPIO.BOARD)

#Configurando a direção do Pino
GPIO.setup(8, GPIO.OUT) #usei 8 pois meu setmode é board, se estivesse usando BCM seria 14
#Ligando o led
GPIO.output(8, GPIO.HIGH)

