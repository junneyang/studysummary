# -*- coding: utf-8 -*-
from mako.template import Template

if __name__ == '__main__':
    #print Template("Hello${Str}!!!").render(Str="World")
    Rows=[(123,"abc",1),(456,"def",1),(789,"ghi",0)]
    print Template(filename="Template.html").render(NO="NO",Content=u"内容",Flag=u"标志",Rows=Rows)
