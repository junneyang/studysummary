import time
import datetime

#��ȡʱ���ַ���
TimeStr="2013-04-26 10:16:58"
print(TimeStr)

a=time.strptime(TimeStr,'%Y-%m-%d %H:%M:%S')
print a

#��ʱ���ַ���ת��Ϊpythonʱ���
TimeStamp=time.mktime(a)
print(TimeStamp)
#����Ƴ�����
TimeStamp+=2*24*3600
print(TimeStamp)
#��ʱ���ת��ΪLocalTime
LocalTime=time.localtime(TimeStamp)

#���LocalTimeת��Ϊ�ַ���
TimeStr=time.strftime('%Y-%m-%d %H:%M:%S',LocalTime)
print(TimeStr)

a=time.strftime('%Y-%m-%d %H:%M:%S',time.localtime(time.time()))
print str(a)
