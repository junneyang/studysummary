#!/usr/bin/python
# -*- coding: utf-8 -*-
from socket import *
import json
HOST="10.85.156.249"
PORT=9999
ADDR=(HOST,PORT)

s=socket(AF_INET,SOCK_STREAM)
#连接失败，重试3次
try:s.connect(ADDR)
except:
    try:s.connect(ADDR)
    except:
        try:s.connect(ADDR)
        except:
            print("Connection 3 Times Failed")
#第一次发送数据
SendStr=json.dumps({
    "Type":u"0",
    "Des":u"ToUpper[转换为大写]",
    "Content":u"My Name Is YangJun"
})
s.send(SendStr)
RecvStr=s.recv(1024)
RecvStr=json.loads(RecvStr,encoding="utf-8")
print("RecvStr:"+RecvStr["ErrorCode"]+";"+RecvStr["Des"]+";"+RecvStr["Content"])
#关闭连接
s.close()

s=socket(AF_INET,SOCK_STREAM)
#连接失败，重试3次
try:s.connect(ADDR)
except:
    try:s.connect(ADDR)
    except:
        try:s.connect(ADDR)
        except:
            print("Connection 3 Times Failed")
#第二次发送数据
SendStr=json.dumps({
    "Type":u"1",
    "Des":u"ToLower[转换为小写]",
    "Content":u"My Name Is YangJun"
})
s.send(SendStr)
RecvStr=s.recv(1024)
RecvStr=json.loads(RecvStr,encoding="utf-8")
print("RecvStr:"+RecvStr["ErrorCode"]+";"+RecvStr["Des"]+";"+RecvStr["Content"])
#关闭连接
s.close()