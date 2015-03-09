#!/bin/env python
# -*- coding: cp936 -*-

import wx

class Frame(wx.Frame):
    def __init__(self,imageFile,title,parent=None,id=-1,pos=wx.DefaultPosition):
        image = wx.Image(imageFile, wx.BITMAP_TYPE_JPEG)
        temp=image.ConvertToBitmap()
        size=temp.GetWidth(),temp.GetHeight()
        wx.Frame.__init__(self,parent,id,title,pos,size)
        self.bmp=wx.StaticBitmap(parent=self, bitmap=temp)
    pass

class App(wx.App):
    def OnInit(self):
        self.frame=Frame(u"新建位图图像.jpg",title=u"Python_GeneralTestRunner CopyRight@yangjun/y00193825")
        #self.frame=Frame(parent=None,id=-1,title=u"Python_GeneralTestRunner CopyRight@yangjun/y00193825")
        self.frame.Show()
        self.SetTopWindow(self.frame)
        return True

def main():
    app=App()
    app.MainLoop()

if __name__ == "__main__":
    main()
