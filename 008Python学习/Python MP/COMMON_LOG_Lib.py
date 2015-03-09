#!/usr/bin/python
# -*- coding: utf-8 -*-
import logging

'''import TestConfig
LogFilePath=TestConfig.TestLogFilePath'''

LogFilePath="aaa.txt"
logging.basicConfig(level=logging.DEBUG,
                format='[%(levelname)s] [%(asctime)s] [%(filename)s-line:%(lineno)d] [%(funcName)s-%(threadName)s] %(message)s',
                datefmt='%a,%Y-%m-%d %H:%M:%S',
                filename=LogFilePath,
                filemode='w')


if __name__ == "__main__":
    logging.debug("csscds")
    logging.debug("csscds")
    logging.debug("csscds")
