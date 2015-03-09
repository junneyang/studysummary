import unittest

class cs(unittest.TestCase):
    def setUp(self):
        #assert(1 == 2)
        pass

    def test_cs(self):
        print("A")
        assert(1 == 2)

    def tearDown(self):
        print("BBBB")

if __name__ == "__main__":
    unittest.main()
