# -*- coding: utf-8 -*-
import os
import re
import getopt,sys

def KW_Path_FileList(Path):
    assert(Path != None)
    FileList=list()
    Reg_FileName=r"^.*.py$"
    for root,dirs,files in os.walk(Path,topdown=True,onerror=None):
        for filespath in files:
            if(re.match(Reg_FileName,filespath)):
                FileName=os.path.join(root,filespath)
                FileList.append(FileName)
    return FileList

def KW_Get_Author_Feature_Script_List(Path,OutPutFilePath):
    assert(Path != None and OutPutFilePath != None)
    #获取py文件列表
    FileList=KW_Path_FileList(Path)
    #打开输出文件，并且清空
    f=file(OutPutFilePath,"w")
    f.close()
    f=file(OutPutFilePath,"a")
    #得到作者、特性、脚本列表
    for Elem in FileList:
        ElemList=Elem.split("\\")
        f.write(ElemList[4]+"\t"+ElemList[5]+"\t"+Elem+"\r\n")
    f.close()
    print(str(len(FileList)))

def KW_DisHelpInfo():
    print(u"""ScriptStatistic.py Usage:
        ScriptStatistic [-s] [-o] [-h]
        -s --SourcePath= 待搜索的目录
        -o --OutputFile= 搜索结果输出文件路径
        -h --help 显示帮助信息""")


if __name__ == "__main__":
    #得到opts、args
    try:
        opts, args = getopt.getopt(sys.argv[1:], "s:o:h", ["SourcePath=","OutputFile=","help"])
    except getopt.GetoptError:
        KW_DisHelpInfo()
        sys.exit()
    if(len(opts)==0):
        KW_DisHelpInfo()
        sys.exit()
    #分析opts，得到实参
    for o,a in opts:
        if o in("-s", "--SourcePath"):
            Path=a
            continue
        if o in("-o", "--OutputFile"):
            OutPutFilePath=a
            continue
        if o in("-h", "--help"):
            KW_DisHelpInfo()
            sys.exit()
        else:
            KW_DisHelpInfo()
            sys.exit()
    #调用接口处理
    try:
        KW_Get_Author_Feature_Script_List(Path,OutPutFilePath)
    except:
        KW_DisHelpInfo()
        sys.exit()



