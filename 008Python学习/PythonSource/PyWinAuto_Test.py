# -*- coding: cp936 -*-
#-------------------------------------------------------------------------------
# Name:        ģ��1
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
app.Notepad.MenuSelect(u"�༭(&E)"+" -> "+u"�滻(&R)")
app[u"�滻"].PrintControlIdentifiers()

Str=u"\u53d6\u6d88"
print(Str.encode("cp936"))
app[u"�滻"][u"ȡ��"].Click()

app.Notepad.PrintControlIdentifiers()
app.Notepad.Edit.TypeKeys(u"������������")

app.Notepad.MenuSelect(u"�ļ�(&F)"+" -> "+u"�˳�(&X)")
#app[u"���±�"][u"������(&N)"].Click()
app[u"���±�"][u"����(&S)"].Click()


app = application.Application()
app.connect_(title_re = u"���Ϊ")
app[u"���Ϊ"].PrintControlIdentifiers()
app[u"���Ϊ"].Edit.TypeKeys(u"Test.txt")
app[u"���Ϊ"][u"����(&S)"].Click()

time.sleep(5)
Cmd=r"cd /d C:\Users\y00193825\Desktop&del Test.txt"
os.system(Cmd)'''

'''app = application.Application()
app.connect_(title_re = u"��ȷ����")
app[u"��ȷ����"].TypeKeys("{ENTER}")'''

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
app=app.connect_(title_re = u"�ļ�����")
time.sleep(2)
app[u"�ļ�����"].Edit.TypeKeys(r"C:\Users\y00193825\Desktop\FV_Navigation_Manage_002")
app[u"�ļ�����"][u"��(&O)"].Click()




