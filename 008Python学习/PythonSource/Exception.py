#!/usr/bin/python
# -*- coding: cp936 -*-

try:
    if(2<3):
        raise EOFError
except EOFError:
    print("EOFError!!!")

class MyException(Exception):
    def __init__(self,ERRORInfo):
        Exception.__init__(self)
        self.ERRORInfo=ERRORInfo

try:
    if(2<3):
        raise MyException("HAHAHAHA!!!")
except MyException,me:
    print("Error:"+me.ERRORInfo)
