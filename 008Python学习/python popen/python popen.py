# -*- coding:utf-8 -*-

import os
output = os.popen("ping 127.0.0.1")
RetStr=output.read()

print(RetStr)
assert(u"来自" in RetStr)
assert(u"的回复" in RetStr)
assert(u"请求超时" not in RetStr)

