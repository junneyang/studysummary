#!/usr/bin/python
# -*- coding: cp936 -*-

class SchoolMember:
    def __init__(self,name,age):
        self.name=name
        self.age=age

    def SayHello(self):
        print "Hello,My Name Is:%s;I'm %s" %(self.name,self.age)

class Teacher(SchoolMember):
    def __init__(self,name,age,salary):
        SchoolMember.__init__(self,name,age)
        self.salary=salary

    def SayHello(self):
        SchoolMember.SayHello(self)
        print "Salary:%s" %self.salary

class Student(SchoolMember):
    def __init__(self,name,age,mark):
        SchoolMember.__init__(self,name,age)
        self.mark=mark

    '''def SayHello(self):
        SchoolMember.SayHello(self)
        print "Mark:%s" %self.mark'''

if __name__ == '__main__':
    sm=SchoolMember("YangJun","22")
    sm.SayHello()

    te=Teacher("AH","25","8000")
    te.SayHello()

    su=Student("YN","25","99")
    su.SayHello()

    print("POLY:")
    mb=[sm,te,su]
    for m in mb:
        m.SayHello()




        
