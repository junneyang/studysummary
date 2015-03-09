# -*- coding: cp936 -*-
#-------------------------------------------------------------------------------
# Name:        模块1
# Purpose:
#
# Author:      y00193825
#
# Created:     22/12/2012
# Copyright:   (c) y00193825 2012
# Licence:     <your licence>
#-------------------------------------------------------------------------------

from pywinauto import application
import time
import os

'''app = application.Application()
app.Start_("Notepad.exe")
app.Notepad.DrawOutline()
time.sleep(2)
app.Notepad.MenuSelect(u"编辑(&E)"+" -> "+u"替换(&R)")
app[u"替换"].PrintControlIdentifiers()

Str=u"\u53d6\u6d88"
print(Str.encode("cp936"))
app[u"替换"][u"取消"].Click()

app.Notepad.PrintControlIdentifiers()
app.Notepad.Edit.TypeKeys(u"哈哈哈，测试")

app.Notepad.MenuSelect(u"文件(&F)"+" -> "+u"退出(&X)")
#app[u"记事本"][u"不保存(&N)"].Click()
app[u"记事本"][u"保存(&S)"].Click()


app = application.Application()
app.connect_(title_re = u"另存为")
app[u"另存为"].PrintControlIdentifiers()
app[u"另存为"].Edit.TypeKeys(u"Test.txt")
app[u"另存为"][u"保存(&S)"].Click()

time.sleep(5)
Cmd=r"cd /d C:\Users\y00193825\Desktop&del Test.txt"
os.system(Cmd)'''

'''app = application.Application()
app.connect_(title_re = u"您确定吗？")
app[u"您确定吗？"].TypeKeys("{ENTER}")'''

'''app = application.Application()
app=app.connect_(title_re = ".*Mozilla Firefox")
time.sleep(5)
app["MozillaDialogClass"].TypeKeys("{TAB}")
app["MozillaDialogClass"].TypeKeys("{TAB}")
app["MozillaDialogClass"].TypeKeys("{ENTER}")'''

'''app = application.Application()
app=app.connect_(title_re = ".*Mozilla Firefox")
time.sleep(5)
app["MozillaDialogClass"].TypeKeys("{TAB}")'''

app = application.Application()
app=app.connect_(title_re = u"文件上载")
time.sleep(2)
app[u"文件上载"].Edit.TypeKeys(r"C:\Users\y00193825\Desktop\FV_Navigation_Manage_002")
app[u"文件上载"][u"打开(&O)"].Click()




