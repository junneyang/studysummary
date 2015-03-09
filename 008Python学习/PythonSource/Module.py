#!/usr/bin/python
# -*- coding: cp936 -*-

import sys
import Function

for arg in sys.argv:
    print(arg)
print(sys.path)
#print(sys.getwindowsversion())

print(__name__)
print(sys.__name__)


print(Function.Max(88,99))
print(dir(Function))
