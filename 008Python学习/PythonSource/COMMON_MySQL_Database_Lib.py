# -*- coding: utf-8 -*-
#-------------------------------------------------------------------------------
# Name:
# Purpose:
#
# Author:       yangjun/y00193825
#
# Created:
# Copyright:    (c) y00193825 2012
# Licence:      <your licence>
#-------------------------------------------------------------------------------

import MySQLdb
#####数据库用户名、密码信息
HostIP="10.85.156.177"
User="root"
Pwd="Admin123"
#####数据库名称
Database_Name="DataBase_TestScript"
#####数据表列表
Tbl_List=["Tbl_Script",]
#####全局变量定义
NULL=0



def KW_Create_DataBase():
    #####连接数据库
    conn=MySQLdb.connect(host=HostIP,user=User,passwd=Pwd,charset="gbk")
    #####获取操作游标
    cursor=conn.cursor()
    #####创建数据库
    cursor.execute("""create database """+Database_Name+""";""")
    conn.select_db(Database_Name)
    #####创建数据表Script
    cursor.execute("""create table """+Tbl_List[0]+"""(
                    No int(5) primary key auto_increment,
                    ScriptID varchar(500) not null,
                    FilePath varchar(500) not null,
                    Author varchar(500) not null,
                    Feature varchar(500) not null,
                    Result varchar(500) not null,
                    FinishTime datetime not null,
                    Flag varchar(500) not null)ENGINE=InnoDB DEFAULT CHARSET=gbk;""")
    #####提交
    conn.commit()
    #####关闭、释放资源
    cursor.close()
    #####关闭连接
    conn.close()

def KW_Update_Tbl_ScriptExeRes(Value):
    #####连接数据库
    conn=MySQLdb.connect(host=HostIP,user=User,passwd=Pwd,charset="gbk")
    #####获取操作游标
    cursor=conn.cursor()
    #####选择数据库
    conn.select_db(Database_Name)

    #####构造数据，插入记录到数据表
    #value=[[NULL,"TestCase_001",r"C:\bgfgi",u"郝晓菲",u"服务器配置","PASS","2012-01-01 00:00:00","Test"],]
    cursor.execute("""set names 'gbk';""")
    cursor.execute("""insert into """+Tbl_List[0]+""" values(NULL,%s,%s,%s,%s,%s,%s,%s);""",
    (Value[0][1],Value[0][2],Value[0][3],Value[0][4],Value[0][5],Value[0][6],Value[0][7]))

    #####提交
    conn.commit()
    #####关闭、释放资源
    cursor.close()
    conn.close()

def KW_Query_Tbl_ScriptExeRes():
    #####连接数据库
    conn=MySQLdb.connect(host=HostIP,user=User,passwd=Pwd,charset="gbk")
    #####获取操作游标
    cursor=conn.cursor()
    #####选择数据库
    conn.select_db(Database_Name)

    cursor.execute("""set names 'gbk';""")
    #####查询数据表总记录数
    count = cursor.execute("""select * from """+Tbl_List[0])
    print(count)
    cursor.scroll(0,mode="absolute")
    results = cursor.fetchall()

    #####提交
    conn.commit()
    #####关闭、释放资源
    cursor.close()
    conn.close()

    return results

def KW_Query_SumData_Script():
    #####连接数据库
    conn=MySQLdb.connect(host=HostIP,user=User,passwd=Pwd,charset="gbk")
    #####获取操作游标
    cursor=conn.cursor()
    #####选择数据库
    conn.select_db(Database_Name)

    cursor.execute("""set names 'gbk';""")
    #####查询数据表总记录数
    Sum = cursor.execute("""select * from """+Tbl_List[0])
    PassNum=cursor.execute("""select * from """+Tbl_List[0]+""" where Result='PASS'""")
    FailNum=cursor.execute("""select * from """+Tbl_List[0]+""" where Result='FAIL'""")

    cursor.execute("""select min(FinishTime) from """+Tbl_List[0])
    cursor.scroll(0,mode="absolute")
    results = cursor.fetchall()
    print(results[0][0])
    StartTime=results[0][0]

    cursor.execute("""select max(FinishTime) from """+Tbl_List[0])
    cursor.scroll(0,mode="absolute")
    results = cursor.fetchall()
    print(results[0][0])
    EndTime=results[0][0]

    #####提交
    conn.commit()
    #####关闭、释放资源
    cursor.close()
    conn.close()

    return Sum,PassNum,FailNum,StartTime,EndTime

if __name__ == "__main__":
    '''Value=[[NULL,"TestCase_001",r"C:\bgfgi",u"郝晓菲",u"服务器配置","PASS","2012-01-01 00:00:00","Test"],]
    KW_Update_Tbl_ScriptExeRes(Value)
    KW_Query_Tbl_ScriptExeRes()'''
    print(KW_Query_SumData_Script())






