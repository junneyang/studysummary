#!/usr/bin/python
# -*- coding: utf-8 -*-

#####python线程编程基础
#####涉及到python线程的模块有thread、threading、Queue
#####thread是原始的线程模块，thread模块提供了基本的线程和锁的支持，现在使用较少
#####threading在thread的基础上作了较好的的封装，threading提供了更高级别，功能更强的线程管理功能
#####Queue模块允许用户创建一个可以用于多线程之间共享数据的队列数据结构
#####Python虚拟机使用GIL（Global Interpreter Lock，全局解释器锁）来互斥线程对共享资源的访问，暂时无法利用多处理器的优势
'''Python代码代码的执行由python虚拟机（也叫解释器主循环）来控制。Python在设计之初就考虑到要在主循环中，同时只有一个线程在执行，
就像单CPU的系统中运行多个进程那样，内存中可以存放多个程序，但任意时候，只有一个程序在CPU中运行。
同样，虽然python解释器可以“运行”多个线程，但在任意时刻，只有一个线程在解释器中运行。

对python虚拟机的访问由全局解释器锁（GIL）来控制，这个GIL能保证同一时刻只有一个线程在运行。在多线程环境中，python虚拟机按以下方式执行：
   1 设置GIL
   2 切换到一个线程去运行
   3 运行
   4 把线程设置为睡眠状态
   5 解锁GIL
   6 重复以上所有步骤'''

from COMMON_LOG_Lib import *
import threading
import Queue
import time


def ThreadFunc(Str):
    logging.debug("SubThread Start")
    for i in range(0,10):
        logging.debug(Str)
        time.sleep(2)
    logging.debug("SubThread End\n")

class SubThread(threading.Thread):
    def __init__(self,ThreadName):
        threading.Thread.__init__(self,name=ThreadName)
    def run(self):
        ThreadFunc("*****SubThread*****")

class Producer(threading.Thread):
    def __init__(self,queue):
        threading.Thread.__init__(self)
        self.data=queue
    def run(self):
        for i in range(10000):
            time.sleep(2)
            logging.debug("PUT DATA:"+str(i))
            self.data.put(i)

class Consumer(threading.Thread):
    def __init__(self,queue):
        threading.Thread.__init__(self)
        self.data=queue
    def run(self):
        for i in range(10000):
            Data=self.data.get()
            logging.debug("GET DATA:"+str(Data)+",Result:"+str(Data*Data))

if __name__ == "__main__":
    logging.debug("MainThread Start\n")
    for i in range(0,10):
        logging.debug("*****MainThread*****")
    #####启动线程：方式一——函数调用
    '''th1=threading.Thread(target=ThreadFunc,args=("*****SubThread*****",))
    th2=threading.Thread(target=ThreadFunc,args=("*****SubThread*****",))
    th1.start()
    th2.start()
    th1.join()
    th2.join()'''
    #####启动线程：方式二——继承Thread
    '''th1=SubThread("Thread-001")
    th2=SubThread("Thread-002")
    th1.start()
    th2.start()
    th1.join()
    th2.join()'''
    #####启动线程：方式三——批量启动，线程池
    ths=[]
    ParaList=["AAA","BBB","CCC","DDD"]
    thn=range(0,len(ParaList))
    for i in thn:
        th=threading.Thread(target=ThreadFunc,args=(ParaList[i],))
        ths.append(th)
    for i in thn:
        ths[i].start()
    for i in thn:
        ths[i].join()
    #####启动线程：方式四——线程队列
    queue = Queue.Queue()
    th1 = Producer(queue)
    th2 = Consumer(queue)
    th1.start()
    th2.start()
    th1.join()
    th2.join()
    logging.debug("MainThread End")


