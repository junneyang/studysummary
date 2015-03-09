#!/usr/bin/python
# -*- coding: cp936 -*-

WriteLine='''北京
滔滔江水
金榜题名'''
fp=file("./Write_Test.txt","w")
fp.write(WriteLine)
fp.close()

fp=file("./Write_Test.txt","r")
lines=fp.readlines()
for line in lines:
    print line,
print "HELLOWorld",
print "GAHAH"
fp.close()

import Inherit
te=Inherit.Teacher("AH","25","8000")
te.SayHello()
import cPickle
fp=file("./bjFile.txt","w+")
cPickle.dump(te,fp)
fp.close()

fp=file("./bjFile.txt","r")
te=Inherit.Teacher("","","")
te.SayHello()
te=cPickle.load(fp)
print(te)
te.SayHello()
fp.close()
