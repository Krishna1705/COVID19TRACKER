# COVID19TRACKER

Covid 19 Tracker

PROJECT DETAILS: Its an Opensource project to keep track of all COVID-19 data around the world.

TECHNOLOGIES: PHP, JQUERY, BOOTSTRAP

I have used here CSSEGISandData/COVID-19, Original Repo (CSSEGISandData):https://github.com/CSSEGISandData/COVID-19, OPENSOURCE GITHUB REPOSIRTORY, 
managed by Jhons Hopkins University. they update its data each and every day, so all the data are up to date, but here all data are in csv format,
so they have created another repository pomber.js (https://github.com/pomber/covid19) in which all data are in json format.
in pomber.js data are transformed from CSSEGISandData/COVID-19(csv format) into a json file. 
JSON format data are quite easy to undersand for human as well as machine. 
here i have used https://pomber.github.io/covid19/timeseries.json, API for our COVID19 tracker application.

i have used PHP to fetch & display the data. you will get to know about the current number of confirmed, recovered and deaceased cases. 
you also will also get to know about the increment in number of confirmed cases in compare to the previous day,if there is any. 
i have used JQUERY to add search functionality from the table by country name.
you can search data by country name and you will get to know about the current COVID19 cases scenatio.
