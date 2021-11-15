import sys
#!{sys.executable} -m pip install pandas
import urllib
from bs4 import BeautifulSoup
url = 'http://rodalies.gencat.cat/es/alteracions_del_servei/'
html = urllib.request.urlopen(url)
soup2 = BeautifulSoup (html)
tags = soup2.find_all(class_="list-group llistat_destacat_icones_cont")
print(tags)