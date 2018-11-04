#-*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time

#configurando como BOARD, Pinos Físicos
GPIO.setmode(GPIO.BOARD)

#Configurando a direção do Pino
GPIO.setup(13, GPIO.OUT) ##usei 13 pois meu setmode é board, se estivesse usando BCM seria 27
#Ligando o led
GPIO.output(13, GPIO.LOW)
#Liberando a porta
GPIO.cleanup()
