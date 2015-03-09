#!/usr/bin/python
# -*- coding: cp936 -*-

ShopList=["Banana","Orange","Apple"]
print(len(ShopList),ShopList)
ShopList.append("Pear")
ShopList.sort()
del ShopList[0]
for Elem in ShopList:
    print(Elem)

ShopTupleA=("A","BBB","C")
ShopTupleB=("A","B","C",ShopTupleA)
print("Len="+str(len(ShopTupleB)))
for Elem in ShopTupleB:
    print(Elem)
print(ShopTupleB[3][1])

print "%s is %d" %("AH",25)
