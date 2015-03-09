# -*- coding: cp936 -*-
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
from SSHLibrary import library
import time

class COMMON_SSH_Lib(library.SSHLibrary):
    #####��SSH ����
    def KW_OpenSSHConnection(self,IP,TMOUT,UserName,Pwd):
        self.connect=library.SSHLibrary()
        self.connect.open_connection(IP,port=22,timeout=TMOUT,prompt=".")
        self.connect.login(username=UserName, password=Pwd)
        time.sleep(2)

    #####�ر�SSH����
    def KW_CloseSSHConnection(self):
        self.connect.close_connection()

    #####ִ��SSH�������ָ����ʱʱ�䣬ע�������write����Ϊ������ģʽ
    def KW_SSH_Cmd(self,CmdStr,DelayTM):
        self.connect.write(CmdStr)
        time.sleep(DelayTM)

    #####ִ��SSH�����������������У�����ָ����ʱʱ�䣬ע�������write����Ϊ������ģʽ
    def KW_SSH_Cmd_Save(self,CmdStr,DelayTM):
        self.connect.write(CmdStr)
        time.sleep(DelayTM)
        SaveStr=self.connect.read(loglevel="TRACE")
        return SaveStr

    #####ִ��SSH�����STDOUT��������ڱ����У�����ָ����ʱʱ�䣬ע�������write����Ϊ������ģʽ
    def KW_SSH_Cmd_Save_STDOUT(self,CmdStr,DelayTM):
        self.connect.write(CmdStr)
        time.sleep(DelayTM)
        SaveStr=self.connect.read_command_output()
        return SaveStr

    #####ִ��SSH�������ѭ��У��ִ�н���Ƿ����ָ���ַ�����У������ΪInterval��У�鳬ʱʱ��ΪTMOUT������TMOUT�׳��쳣��
    def KW_SSH_Cmd_Check_StrContain(self,CmdStr,TMOUT,CheckStr,Interval):
        self.connect.write(CmdStr)
        for t in range(0,TMOUT/Interval):
            time.sleep(Interval)
            RetContent=self.connect.read()
            if((CheckStr not in RetContent) and (t<TMOUT/Interval)):
                continue
            elif ((CheckStr in RetContent) and (t<TMOUT/Interval)):
                break
            else:
                raise AssertionError("Assert Failed in"+TMOUT+"s")

    def KW_Sftp_PutFile(self,SrcPath,DstPath):
        self.connect.put_file(SrcPath, destination=DstPath)


if __name__ == "__main__":
    cc=COMMON_SSH_Lib()
    cc.KW_OpenSSHConnection("160.137.0.251",10,"root","huawei")
    time.sleep(2)

    #cc.KW_SSH_Cmd("ls -alh",1)

    SaveStr=cc.KW_SSH_Cmd_Save("/opt/PKG_Test;ls -alh",1)
    print("//////////////////"+SaveStr)

    '''cc.KW_SSH_Cmd_Check_StrContain("cd /opt;python Test.py",60,"OK",2)

    cc.KW_SSH_Cmd("su galaxmanager",1)
    cc.KW_SSH_Cmd("psql -p 2345",1)
    cc.KW_SSH_Cmd("set search_path=irm;",1)
    SaveStr=cc.KW_SSH_Cmd_Save("select * from host;",1)
    print("//////////////////"+SaveStr)'''

    '''cc.KW_Sftp_PutFile("E:\\CPYPKG\\S5000TV200R000.tgz","/opt/")
    cc.KW_CloseSSHConnection()'''



