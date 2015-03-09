# -*- coding: utf-8 -*-
import web
import COMMON_MySQL_Database_Lib
import datetime

#####URL规则，正则映射
urls = (r"^/Version/?$","GetVersionInfo",
        r"^/TestResult/?$","TestResult",
        r"^/Time/?$","CurrentTime",
)

#####应用程序
app = web.application(urls, globals())
class GetVersionInfo:
    def GET(self):
        return "Python General_Test_Runner Copyright@yangjun/y00193825"
        #RetContent=COMMON_MySQL_Database_Lib.KW_Query_SumData_Script()
        #return RetContent

class TestResult:
    def GET(self):
        #return "Python General_Test_Runner Copyright@yangjun/y00193825"
        RetContent=COMMON_MySQL_Database_Lib.KW_Query_SumData_Script()
        return RetContent
class CurrentTime:
    def GET(self):
        Time=datetime.datetime.now()
        return Time

#####应用程序启动
if __name__ == "__main__":
    app.run()
