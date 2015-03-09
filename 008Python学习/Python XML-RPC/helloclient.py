#helloclient.py
from xmlrpclib import ServerProxy
svr=ServerProxy("http://localhost:4321")
svr.stat_total_req_cnt(123)
svr.stat_total_req_cnt(321)
svr.stat_total_req_cnt(456)
svr.stat_total_req_cnt(654)
print svr.total_req_cnt()
