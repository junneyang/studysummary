#!/usr/bin/python
# -*- coding: utf-8 -*-

#####python进程编程基础
#####python进程创建方式与线程创建方式一样

from COMMON_LOG_Lib import *
import multiprocessing
import time

def ProcessFunc(Str):
    logging.debug("SubProcess Start")
    for i in range(10):
        logging.debug(Str)
        time.sleep(1)
    logging.debug("SubProcess End")
    return Str

if __name__ == "__main__":
    logging.debug("MainProcess Start")
    for i in range(0,10):
        logging.debug("*****MainProcess*****")
        time.sleep(1)
    #####方式一：函数调用
    '''p=multiprocessing.Process(target=ProcessFunc,args=("HelloWorld",))
    p.start()
    p.join()'''
    #####方式二：进程池
    pp=multiprocessing.Pool(processes=4)
    RetList=[]
    for i in range(4):
        Ret=pp.apply_async(ProcessFunc,args=("HelloWorld",))
        RetList.append(Ret)
    pp.close()
    pp.join()
    logging.debug("MainProcess End\n")

    for Elem in RetList:
        print(Elem.get())