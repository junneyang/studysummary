# -*- coding: utf-8 -*-
import unittest, time, re

class Test(unittest.TestCase):
    def setUp(self):
        print(u"SetUp:开始")

    def test_Test(self):
        print(u"Test:运行")

    def tearDown(self):
        print(u"TearDown:结束")


if __name__ == "__main__":
    unittest.main()

