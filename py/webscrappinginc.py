import sys
#from mysql.connector import connect, Error
#try:
 #   with connect (host="localhost",user=input("root"),
  #               password=getpass(),
   #              )as connection:
    #    print(connection)
     #   except Error as e:
      #      print(e)
#!{sys.executable} -m pip install pandas
import urllib
from bs4 import BeautifulSoup
url = 'http://rodalies.gencat.cat/es/alteracions_del_servei/'
html = urllib.request.urlopen(url)
soup2 = BeautifulSoup (html)
tags = [];

tag=soup2.find_all(class_="destacat_icones list-group-item")


#tag = tag.replace(',',' ').replace
#lis = tag.split()

for i in tag:
    tags.append(i)
    print(tags)
    #tagsi=tags.filter(lambda:"img")
    #print(tagsi[i])
    