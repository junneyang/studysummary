#!/usr/bin/python
# -*- coding: cp936 -*-

import time
import subprocess

'''SourceFiles=[r"C:\Users\y00193825\Desktop\Std_Test_Lib",r"C:\Users\y00193825\Desktop\BackUP——Test.txt"]
DstDirectory=r"C:\Users\y00193825\Desktop\BackUPTest"

for i in range(0,10):
    Target=DstDirectory+"\\"+"BackUp"+time.strftime(' %Y-%m-%d %H-%M-%S',time.localtime(time.time()))+".rar"
    ZipCmd= "\"C:\Program Files\WinRAR\WinRAR.exe\" a \"%s\" %s" %(Target," ".join(Elem for Elem in SourceFiles))
    print(ZipCmd)

    #####shell=flase模式
    ps=subprocess.Popen(ZipCmd,stdin=subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE)
    ps.wait()
    RetStdOut,RetStdError=ps.communicate()
    print(RetStdOut)
    time.sleep(5)
    i=i+1'''

'''#####check-output方式
def check_output(*popenargs, **kwargs):
    process = subprocess.Popen(*popenargs, stdin=subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,shell=True,**kwargs)
    output, unused_err = process.communicate()
    retcode = process.poll()
    if retcode:
        cmd = kwargs.get("args")
        raise CalledProcessError(retcode, cmd, output=output)
    return output'''

'''CpPkgCmd="xcopy E:\\CPYPKG\\S5000TV200R000.tgz \\\\160.137.0.251\\root\\opt\\PKG_Test  /e /c /i /r /y"
print(CpPkgCmd)
RetContent=check_output(CpPkgCmd)
print(RetContent)'''

'''#####Popen方式
CpPkgCmd="xcopy E:\\CPYPKG\\S5000TV200R000.tgz \\\\160.137.0.251\\root\\opt\\PKG_Test  /e /c /i /r /y"
print(CpPkgCmd)
ps=subprocess.Popen(CpPkgCmd,stdin=subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,shell=True)
ps.wait()
RetStdOut,RetStdError=ps.communicate()
print(RetStdOut)'''

'''#####使用&连接符保存上次会话
ps=subprocess.Popen("cd /d E:\\ & dir /b",stdin=subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,shell=True)
ps.wait()
RetStdOut,RetStdError=ps.communicate()
print(RetStdOut)'''

'''def ProcessOperate(CmdStr):
    ps=subprocess.Popen(CmdStr+" 2>&1",stdin=subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,shell=True)
    ps.wait()
    RetStdOut,RetStdError=ps.communicate()
    print(RetStdOut)
    return RetStdOut'''

import robot
import OperatingSystem

def ProcessOperate(CmdStr):
    OS=OperatingSystem.OperatingSystem()
    RetRetCode,RetStdOut=OS.run_and_return_rc_and_output(CmdStr)
    return RetStdOut

if __name__ == "__main__":
    Ret=ProcessOperate(u"python C:\\Testtools\\RobotFramework\\Script\\文件夹B\\TestCase003.py")
    print(Ret)



