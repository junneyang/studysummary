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

app = application.Application()
app.Start_("C:\Testtools\GTR\BIN\GTR.exe")
app.connect_(title_re = "GTR")
app["GTR"].PrintControlIdentifiers()

time.sleep(2)
app["GTR"].TypeKeys("%(H)")
time.sleep(2)
app["GTR"].TypeKeys("+(A)")
time.sleep(2)
app["About GTR"].TypeKeys("{ENTER}")
time.sleep(2)

time.sleep(2)
app["GTR"].TypeKeys("%")
time.sleep(2)
app["GTR"].TypeKeys("{ENTER}")
time.sleep(2)
app["GTR"].TypeKeys("+(X)")
time.sleep(2)



