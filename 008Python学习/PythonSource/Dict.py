#!/usr/bin/python
# -*- coding: cp936 -*-

MyDict={"A":"AH",
        "X":"XYN",
        "Y":193825}
MyDict["C"]="NDIHHU"
MyDict["F"]="NDvdfIHHU"
MyDict["Y"]=00000
print(MyDict)
print(MyDict["Y"])
print(len(MyDict))
for  a,b in MyDict.items():
    print(a,b)
print(MyDict.has_key("A"))

StrStr="ABCDEFGHI"
print(StrStr[0])
print(StrStr[-1])
print(StrStr[0:2])
print(StrStr[:])

Str="AvdfCvfd"
StrB=Str
StrB.upper()
print(Str)
print(StrB)
print(StrB.upper())


MyList=["AB","DE","CD"]
MyList.sort()
print(MyList)

MyList=["AB","DEADF","CD"]
def SORT(list):
    list.sort()

SORT(MyList)
print(MyList)

