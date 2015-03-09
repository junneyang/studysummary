#!/usr/bin/python
# -*- coding: utf-8 -*-
from socket import *
import json
HOST="10.85.156.249"
PORT=9999
ADDR=(HOST,PORT)

s=socket(AF_INET,SOCK_STREAM)
s.bind(ADDR)
s.listen(99999*2)
print("Server Listen...")

while(True):
    client,addr=s.accept()
    print("Connect from "+str(addr))
    RecvStr=client.recv(1024)
    RecvStr=json.loads(RecvStr,encoding="utf-8")
    print("RecvStr:"+RecvStr["Type"]+";"+RecvStr["Des"]+";"+RecvStr["Content"])
    if(RecvStr["Type"] == "0"):
        SendStr=RecvStr["Content"].upper()
        SendStr=json.dumps({
                "ErrorCode":u"0",
                "Des":u"Transaction Finished[处理完毕]",
                "Content":SendStr
            })
    else:
        SendStr=RecvStr["Content"]
        SendStr=json.dumps({
                "ErrorCode":u"-1",
                "Des":u"UnSupported Type[不支持的请求]",
                "Content":SendStr
            })
    client.send(SendStr)
    client.close()
    print("Connect Release...\n")
    print("Server Listen...")

