#!/usr/bin/python
# -*- coding: cp936 -*-

if (2>2):
    print("A")
elif (2==2):
    print("B")
else:
    print("C")

FLAG=True
while FLAG:
    InputNum=int(raw_input("InPut an Integer:"))
    if (InputNum==10):
        print(InputNum)
        FLAG=False
    elif(InputNum==0):
        break
    else:
        print("not 10")
else:
    print("DONE")

for Elem in range(0,10,2):
    print(Elem)
else:
    print("LOOP OVER")

for Elem in (1,5,9,50):
    print(Elem)
else:
    print("OVER")

for Elem in [1,5,9,50]:
    print(Elem)
    if(Elem==9):
        print("Elem==9")
        #break
        continue
else:
    print("OVER")
