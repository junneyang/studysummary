#!/usr/bin/python
# -*- coding: cp936 -*-

class Person:
    def __init__(self,name):
        self.name=name
    def HelloWorld(self):
        print("HelloWorld:"+self.name+"!!!")

p=Person("YangJun")
p.HelloWorld()
