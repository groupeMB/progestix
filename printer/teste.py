#! /usr/bin/python
#-*- coding:utf-8 -*-

from serial import Serial

class Printer:
	def __init__(self, port, baudrate=9600, timeout=1):
		self.port = port
		self.baudrate = baudrate
		self.timeout = timeout
		
	def open(self):
		try:
			self.serie = Serial(self.port, baudrate=self.baudrate, timeout=self.timeout)

		except:
			print "error"
	
	def setBaudrate(self, baudrate):
		baudrate = self.getPrinterBaudrate(baudrate)
		self.sendATCommand("AT+BAUD"+baudrate)

	def setPIN(self, pin=1234):
		if pin>1000 & pin <10000:
			self.sendATCommand("AT+PIN"+pin)

	def setName(self, name="PROGESTIX"):
		self.sendATCommand("AT+NAME"+name)

	def getPrinterBaudrate(self, baudrate):
		return baudrate/1200

	def sendATCommand(self, cmd):
		cmd = cmd +"\r\n"
		self.serie.write(cmd)
		self.flush


