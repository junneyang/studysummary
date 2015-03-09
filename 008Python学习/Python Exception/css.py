import unittest

class cs(unittest.TestCase):
    def setUp(self):
        self.verificationErrors = []
        try: assert(1 == 2)
        except AssertionError, e: self.verificationErrors.append(str(e))

    def test_cs(self):
        print("A")
        assert(1 == 2)

    def tearDown(self):
        print("B")
        self.assertEqual([], self.verificationErrors)

if __name__ == "__main__":
    unittest.main()
