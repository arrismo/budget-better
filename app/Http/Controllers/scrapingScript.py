# scrapingScript.py
#!/usr/bin/python

import requests
from bs4 import BeautifulSoup

URL = 'https://www.expatistan.com/cost-of-living/boston'
page = requests.get(URL)

soup = BeautifulSoup(page.content, 'html.parser')

results = soup.findAll('td', class_="price")
##print(results.tex)

meal = round(float(results[0].text.split()[0][1:].replace(',','')), 2)
chicken = round(float(results[2].text.split()[0][1:].replace(',','')),2)
milk = round(float(results[3].text.split()[0][1:].replace(',','')),2)
eggs = round((float(results[4].text.split()[0][1:].replace(',','')) / 2), 2)
tomatoes = round((float(results[5].text.split()[0][1:].replace(',','')) / 2), 2)
cheese = round((float(results[6].text.split()[0][1:].replace(',','')) / 2), 2)
apples = round((float(results[7].text.split()[0][1:].replace(',','')) / 2), 2)
potatoes = round((float(results[8].text.split()[0][1:].replace(',','')) / 2), 2)

foodSum = meal + chicken + milk + eggs + tomatoes + cheese + apples + potatoes

print(foodSum)

rent = round(float(results[17].text.split()[0][1:].replace(',','')), 2)
utils = round(float(results[18].text.split()[0][1:].replace(',','')), 2)
internet = round(float(results[19].text.split()[0][1:].replace(',','')), 2)
laundryDet = round(float(results[22].text.split()[0][1:].replace(',','')), 2)

housingSum = rent + utils + internet + laundryDet # sum of all housing costs

print(housingSum)

movieTickets = round(float(results[42].text.split()[0][1:].replace(',','')), 2)
capuccino = round(float(results[46].text.split()[0][1:].replace(',','')), 2)
gym = round(float(results[50].text.split()[0][1:].replace(',','')), 2)
jeans = round(float(results[24].text.split()[0][1:].replace(',','')), 2)

spendSum = round(movieTickets + capuccino + gym + jeans, 2)

print(spendSum)

transpSum = round(float(results[30].text.split()[0][1:].replace(',','')), 2)
print(transpSum)

coldMeds = round(float(results[32].text.split()[0][1:].replace(',','')), 2)
tampons = round(float(results[35].text.split()[0][1:].replace(',','')), 2)
deodorant = round(float(results[36].text.split()[0][1:].replace(',','')), 2)
shampoo = round(float(results[37].text.split()[0][1:].replace(',','')), 2)
tp = round(float(results[38].text.split()[0][1:].replace(',','')), 2)
toothpaste = round(float(results[39].text.split()[0][1:].replace(',','')), 2)

otherSum = coldMeds + tampons + deodorant + shampoo + tp + toothpaste

print(otherSum)