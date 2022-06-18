import sys
import yfinance as yf
import pandas as pd
from datetime import datetime, timedelta

end = datetime.now()

symbol = sys.argv[1]
duration = sys.argv[2]

end = datetime.now()

if duration == '5D':
	diff = timedelta(days = 5)
	start = end - diff
elif duration == '1M':
	diff = timedelta(weeks = 4)
	start = end - diff
elif duration == '6M':
	diff = timedelta(weeks = 24)
	start = end - diff
elif duration == '1Y':
	diff = timedelta(weeks = 52)
	start = end - diff
elif duration == '5Y':
	diff = timedelta(weeks = (52*5))
	start = end - diff
else:
	start = 0

if start == 0:
	data = pd.DataFrame(yf.download(symbol))
else:
	data = pd.DataFrame(yf.download(symbol, start=start))

data.to_csv('temp_short_data.csv')
