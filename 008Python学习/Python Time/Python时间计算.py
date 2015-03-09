import time
import datetime

#获取时间字符串
TimeStr="2013-04-26 10:16:58"
print(TimeStr)

a=time.strptime(TimeStr,'%Y-%m-%d %H:%M:%S')
print a

#将时间字符串转化为python时间戳
TimeStamp=time.mktime(a)
print(TimeStamp)
#向后推迟两天
TimeStamp+=2*24*3600
print(TimeStamp)
#将时间戳转化为LocalTime
LocalTime=time.localtime(TimeStamp)

#最后将LocalTime转化为字符串
TimeStr=time.strftime('%Y-%m-%d %H:%M:%S',LocalTime)
print(TimeStr)

a=time.strftime('%Y-%m-%d %H:%M:%S',time.localtime(time.time()))
print str(a)
