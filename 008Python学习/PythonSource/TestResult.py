# -*- coding: utf-8 -*-
import web
import COMMON_MySQL_Database_Lib

#####URL规则，正则映射
urls = ("/TestResult","TestResult",
        "/TestResult/","TestResult",
)

#####应用程序
app = web.application(urls, globals())
class TestResult:
    def GET(self):
        #return "Python General_Test_Runner Copyright@yangjun/y00193825"
        RetContent=COMMON_MySQL_Database_Lib.KW_Query_SumData_Script()
        return RetContent

#####应用程序启动
if __name__ == "__main__":
    app.run()
