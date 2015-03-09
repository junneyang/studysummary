# -*- coding: utf-8 -*-
import unittest
import httplib
import json

ServerIP="10.85.156.227"
ServerPort="8080"

class WebTest_UnitTest(unittest.TestCase):
    def test_Hello_UnitTest_GETMethod(self):
        print("\n*********************************************\n")
        conn = httplib.HTTPConnection(ServerIP+":"+ServerPort)
        conn.request("GET","/")
        Ret = conn.getresponse()
        #####返回码、返回值校验
        print Ret.status, Ret.reason
        assert(Ret.status == 200)
        assert(Ret.reason == "OK")
        #####返回内容校验
        Data=Ret.read()
        print(Data)
        assert(Data == '''HelloWorld!!!''')
        print("\n*********************************************\n")
    def test_Ajax_UnitTest_POSTMethod(self):
        print("\n*********************************************\n")
        headers = {"Content-type": "application/json","Accept": "text/plain"}
        content = {"firstname":"FirstName_INS_哈哈","lastname":"LastName_INS"}
        content = json.dumps(content)
        conn = httplib.HTTPConnection(ServerIP+":"+ServerPort)
        conn.request("POST","/Ajax_Webpy/",content,headers)
        Ret = conn.getresponse()
        #####返回码、返回值校验
        print Ret.status, Ret.reason
        assert(Ret.status == 200)
        assert(Ret.reason == "OK")
        #####返回内容校验
        Data=Ret.read()
        Data=json.loads(Data,encoding="utf-8")
        print(Data["lastname"])
        assert(Data["errorcode"] == "0")
        print("\n*********************************************\n")

if __name__ == "__main__":
    unittest.main()

