#!/usr/bin/python
# -*- coding: cp936 -*-

def KW_ADD(DataA,DataB):
    return DataA+DataB

print(KW_ADD(20,28))

'''if __name__ == '__main__':
    print(KW_ADD(20,28))'''


X=20
print(X)

def HAHA(X):
    print(X)
    X=2
    print(X)
HAHA(20)
print(X)

def SAY(Str,TM=1):
    print(Str*TM)

SAY(Str="Hello",TM=5)


def StrPrint(Str,A="123",B="456",C="789"):
    print(Str+A+B+C)
StrPrint("Hello",B="000",A="000",C="222")
    

def Max(A,B):
    '''Function Des:

    Return the maxium num'''
    if (A>B):
        return A
    else:
        return B

print(Max(50,88))
print(Max.__doc__)
help(Max)



