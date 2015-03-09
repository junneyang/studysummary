# -*- coding: cp936 -*-

######Python SSH远程登录，阻塞模式
import paramiko
import time
client = paramiko.SSHClient()
client.set_missing_host_key_policy(paramiko.AutoAddPolicy())
client.connect("160.137.0.251", 22, username="root", password="huawei", timeout=10)
#####简短命令
stdin, stdout, stderr = client.exec_command("""su - galaxmanager -c "psql -p 2345 <<XXXXXX
select ip from irm.host where name='CNA01'
XXXXXX
"
""")
#####较长时间命令
#stdin, stdout, stderr = client.exec_command("cd /opt;python Test.py")

RetContent=stdout.readlines()
RetStr=""
for line in RetContent:
    #print line,
    RetStr+=line
print(RetStr)
RetStrList=RetStr.split("\n")
print(RetStrList[2])


'''assert("GalaxManager" in RetStr)
#assert("OK" in RetStr)
client.close()'''

'''import paramiko,socket
import time

t = paramiko.Transport(("160.137.0.251", 22))
t.connect(username="root", password="huawei")
chan = t.open_session()
chan.get_pty()
chan.invoke_shell()

chan.send('cd /opt;ls -alh')
time.sleep(10)
RetContent=chan.recv(4096)
print(RetContent)

chan.close()
t.close()'''

'''from SSHLibrary import library
import time

connect=library.SSHLibrary()
connect.open_connection("160.137.0.251",port=22,timeout=10,prompt=".")
connect.login(username="root", password="huawei")
time.sleep(2)'''

'''connect.write("cd /opt/GM_PKG")
time.sleep(2)
RetContent=connect.read()
print("////////////////////////////"+RetContent)

connect.write("ll")
time.sleep(2)
RetContent=connect.read()
print("////////////////////////////"+RetContent)

connect.write("pwd")
time.sleep(2)
RetContent=connect.read()
print("////////////////////////////"+RetContent)'''

'''connect.write("cd /opt;python Test.py")
for t in range(0,30):
    time.sleep(2)
    RetContent=connect.read()
    if(("OK" not in RetContent) and (t<29)):
        continue
    elif (("OK" in RetContent) and (t<29)):
        break
    else:
        raise AssertionError("Assert Failed in 60s!!!")'''

'''time.sleep(60)
RetContent=connect.read()
print("/////////////////////"+RetContent)
assert("OK" in RetContent)'''

'''connect.close_connection()'''





