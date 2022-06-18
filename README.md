# Stock-Prediction-Web-Application-Using-LSTM

The main application part of the website starts with a typical login and registration page. Upon successful authentication, the users are greeted with the main dashboard. The dashboard provides the daily price statistics for popular stocks, cryptocurrencies, and ForEx currencies. The user can directly select a symbol from the dashboard itself to view its past trends or market summary data, or they can choose to visit the dedicated pages to retrieve market data run predictions from the navigation section.
<div align="center"><img src=""></div>

The web application provides the users with three different pages for stocks, cryptocurrencies, and ForEx currencies. Here the user is presented with a search bar with two fields, one to search for the symbol of a particular stock, cryptocurrency, or ForEx currency and the second for selecting the range of the market summary data to be fetched and displayed.
<div align="center"><img src=""></div>

Upon submit they are presented with the requested data in a candlestick graph that effectively represents the market data in detail. 
<div align="center"><img src=""></div>

Upon clicking the ‘Get Predictions’ button, the Python script for the prediction model runs on the server in the back end. The model is designed to retrieve the last 5 years of market data for the selected stock, cryptocurrency, or ForEx currency and feed it to the prediction model based on LSTM and generate a prediction accuracy test plot and predict the closing price for the selected stock, cryptocurrency, or ForEx currency for the next seven days.
<div align="center"><img src=""></div>
<div align="center"><img src=""></div>
