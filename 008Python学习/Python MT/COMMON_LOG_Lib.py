#!/usr/bin/python
# -*- coding: utf-8 -*-

import logging
LogFilePath="./LogTest.log"
logging.basicConfig(level=logging.DEBUG,
                format='[%(levelname)s] [%(asctime)s] [%(filename)s-line:%(lineno)d] [%(funcName)s-%(threadName)s] %(message)s',
                datefmt='%a,%Y-%m-%d %H:%M:%S',
                filename=LogFilePath,
                filemode='a')