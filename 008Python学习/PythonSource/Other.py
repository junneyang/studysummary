#!/usr/bin/python
# -*- coding: cp936 -*-

#####�б��ۺ�
ListA=[1,2,3,4,5,6,7,8,9]
ListB=[2*i for i in ListA if i>3]
print(ListA)
print(ListB)

#####�ɱ����
def SumPow(Pow,*args):
    Sum=0
    for Elem in args:
        Sum+=pow(Elem,Pow)
    return Sum
print(SumPow(2,3,4))
print(SumPow(10,2))

#####��������
MyFunction=lambda a,b:a*b
print(MyFunction(2,5))
print(MyFunction("AB",5))
