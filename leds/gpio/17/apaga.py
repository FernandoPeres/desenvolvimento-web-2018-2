#-*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time

#configurando como BOARD, Pinos Físicos
GPIO.setmode(GPIO.BOARD)

#Configurando a direção do Pino
GPIO.setup(11, GPIO.OUT) ##usei 11 pois meu setmode é board, se estivesse usando BCM seria 17
#Ligando o led
GPIO.output(11, GPIO.LOW)
#Liberando a porta
GPIO.cleanup()
