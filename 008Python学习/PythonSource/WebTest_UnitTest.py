# -*- coding: utf-8 -*-
import unittest
import httplib

ServerIP="10.85.156.227"
ServerPort="8080"

class WebTest_UnitTest(unittest.TestCase):
    def test_WebTest_UnitTest(self):
        conn = httplib.HTTPConnection(ServerIP+":"+ServerPort)
        conn.request("GET","/Version/")
        Ret = conn.getresponse()
        #####返回码、返回值校验
        print Ret.status, Ret.reason
        assert(Ret.status == 200)
        assert(Ret.reason == "OK")
        #####返回内容校验
        Data=Ret.read()
        print(Data)
        assert(Data == '''Python General_Test_Runner Copyright@yangjun/y00193825''')

        print(Ret)


if __name__ == "__main__":
    unittest.main()

