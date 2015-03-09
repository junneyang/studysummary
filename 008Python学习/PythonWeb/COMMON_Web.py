# -*- coding: utf-8 -*-

#####web.py相关模块
import web,json
#####内建服务器默认模式为DEBUG
#web.config.debug = False
#####mako模板系统与web.py结合使用，注意：单独使用与此方式不同
from web.contrib.template import render_mako
#####使用OS绝对路径定义模板文件放置位置
import os
#####使用MySQL数据库
import MySQLdb
#####模板文件相对路径
TemplateFilesPath="Templates"
#####URL规则
urls=(
    r"^/?$","HelloWorld",
    r"^/Template/?$","Template",
    r"^/DB_Read_Template/?$","DB_Read_Template",
    r"^/DB_Write_Template/?$","DB_Write_Template",
    r"^/DB_Show_Template/?$","DB_Show_Template",
    r"^/Ajax_Webpy/?$","Ajax_Webpy",
    r"^/HtmlStudy/?$","HtmlStudy",
    r"^/CSSStudy/?$","CSSStudy",
    r"^/iShareHome/?$","iShareHome",
    r"^/iShare/?$","iShareHome",
    r"^/Share?$","Share",
    r"^/JQueryStudy?$","JQueryStudy",
    r"^/TestReport/Date=(\d{4,4})/?$","TestReport",
    r"^/GalaxManagerAutoTest/?$","GalaxManagerAutoTest",
)
#####模板文件渲染路径
render = render_mako(
        directories=[os.path.join(os.path.dirname(__file__),TemplateFilesPath).replace("\\","/"),],
        input_encoding='utf-8',
        output_encoding='utf-8',
        )
#####数据库信息
DatabaseType="mysql"
HostIP="10.85.156.177"
Port=3306
User="root"
Pwd="Admin123"
Database_Name="DataBase_Webpy_Test"
Tbl_Name="Tbl_webpy_Test"
NULL=0

class HelloWorld:
    def GET(self):
        return "HelloWorld!!!"

class Template:
    def GET(self):
        return render.TemplateTest(Name=u"YangJun/y00193825/杨军")

class DB_Read_Template:
    def GET(self):
        db=web.database(dbn=DatabaseType,db=Database_Name,host=HostIP,port=Port,user=User,pw=Pwd)
        Ret=db.select(Tbl_Name)
        return render.TemplateTest(Name=Ret[0].Name)
class DB_Write_Template:
    def POST(self):
        db=web.database(dbn=DatabaseType,db=Database_Name,host=HostIP,port=Port,user=User,pw=Pwd)
        Input=web.input()
        assert(len(Input.Title)!=0 and len(Input.Name)!=0)
        db.insert(Tbl_Name,ID=NULL,Title=Input.Title,Name=Input.Name)
        raise web.seeother("/DB_Show_Template/")
        return render.TemplateTest(Name=Input.Name)
class DB_Show_Template:
    def GET(self):
        db=web.database(dbn=DatabaseType,db=Database_Name,host=HostIP,port=Port,user=User,pw=Pwd)
        Ret=db.select(Tbl_Name,order="ID DESC")
        return render.TemplateTest(Name=Ret[0].Name)
class Ajax_Webpy:
    def GET(self):
        return render.AjaxTest()

    def POST(self):
        InputData=web.data()
        InputDict=json.loads(InputData,encoding="utf-8")
        web.header('Content-Type', 'application/json')
        if(len(InputDict["firstname"])==0 or len(InputDict["lastname"])==0):
            return json.dumps({
                'errorcode' : "-1",
                'errordescription' : 'firstname and lastname shoud not be null'
            })
        else:
            return json.dumps({
                'errorcode' : "0",
                'firstname' : InputDict["lastname"],
                'lastname' : InputDict["firstname"],
            })


class HtmlStudy:
    def GET(self):
        return render.HelloWorld()

class CSSStudy:
    def GET(self):
        return render.CSSStudy()

class iShareHome:
    def GET(self):
        return render.iShareHomePage()
class Share:
    def GET(self):
        return render.Share()

class JQueryStudy:
    def GET(self):
        return render.JQueryStudy()

class TestReport:
    def GET(self,Date):
        if(Date == "0223"):
            return render.GMTestReport0223()
        if(Date == "0224"):
            return render.GMTestReport0224()
        if(Date == "0225"):
            return render.GMTestReport0225()
        if(Date == "0226"):
            return render.GMTestReport0226()
        if(Date == "0227"):
            return render.GMTestReport0227()
        if(Date == "0228"):
            return render.GMTestReport0228()

class GalaxManagerAutoTest:
    def GET(self):
        return render.GalaxManagerAutoTest(svn_alarm=u"测试")

#if __name__ == "__main__":
    #App=web.application(urls,globals())
    #App.run()
    #app = web.application(urls, globals(), autoreload=False)
    #application = app.wsgifunc()

application = web.application(urls, globals()).wsgifunc()





