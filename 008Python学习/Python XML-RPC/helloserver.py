#helloserver.py
from SimpleXMLRPCServer import SimpleXMLRPCServer
from SocketServer import ThreadingMixIn
class ThreadXMLRPCServer(ThreadingMixIn, SimpleXMLRPCServer):pass

total_req_cnt=0
total_res_cnt=0

def stat_total_req_cnt(req_cnt):
    total_req_cnt+=req_cnt
def total_req_cnt():
    return total_req_cnt
def stat_total_res_cnt(res_cnt):
    total_res_cnt+=req_cnt
def total_res_cnt():
    return total_res_cnt

#svr=SimpleXMLRPCServer(("", 4321), allow_none=True)
svr=ThreadXMLRPCServer(("", 4321), allow_none=True)
svr.register_function(stat_total_req_cnt)
svr.register_function(total_req_cnt)
svr.serve_forever()
