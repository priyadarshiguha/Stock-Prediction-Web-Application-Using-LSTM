import sys
import yfinance as yf
import numpy as np
import pandas as pd
from datetime import datetime


def get_stock_data(symbol):
    end = datetime.now()
    start = datetime(end.year-5, end.month, end.day)
    data = pd.DataFrame(yf.download(symbol, start=start))
    return data


def prediction_algo(symbol):
    data = get_stock_data(symbol)

    if data.shape[0] > 0:
        data = data.iloc[:, 4:5].values

        from sklearn.preprocessing import MinMaxScaler
        sc = MinMaxScaler(feature_range=(0, 1))
        data_scaled = sc.fit_transform(data)

        x_data = []
        y_data = []

        seq_len = 7
        for i in range(seq_len, len(data_scaled)):
            x_data.append(data_scaled[i - seq_len:i, 0])
            y_data.append(data_scaled[i, 0])

        x_data = np.array(x_data)
        y_data = np.array(y_data)

        x_forecast = np.array(x_data[-1, 1:])
        x_forecast = np.append(x_forecast, y_data[-1])

        x_test = np.array(x_data[int(0.9 * len(x_data)):, :])
        y_test = np.array(y_data[int(0.9 * len(y_data)):])

        x_data = np.reshape(x_data, (x_data.shape[0], x_data.shape[1], 1))
        x_test = np.reshape(x_test, (x_test.shape[0], x_test.shape[1], 1))
        x_forecast = np.reshape(x_forecast, (1, x_forecast.shape[0], 1))

        from keras.models import Sequential
        from keras.layers import Dense
        from keras.layers import Dropout
        from keras.layers import LSTM

        model = Sequential()
        # Layer 1
        model.add(LSTM(units=100, return_sequences=True, input_shape=(x_data.shape[1], 1)))
        model.add(Dropout(0.1))
        # Layer 2
        model.add(LSTM(units=100, return_sequences=True))
        model.add(Dropout(0.1))
        # Layer 3
        model.add(LSTM(units=100, return_sequences=True))
        model.add(Dropout(0.1))
        # Layer 4
        model.add(LSTM(units=100))
        model.add(Dropout(0.1))
        # Output layer
        model.add(Dense(units=1))

        model.compile(optimizer='adam', loss='mean_squared_error')
        model.fit(x_data, y_data, epochs=25, batch_size=32)

        p_test = model.predict(x_test)
        p_test = np.reshape(p_test, (p_test.shape[0],))

        y_test = sc.inverse_transform(y_test.reshape(-1, 1))
        p_test = sc.inverse_transform(p_test.reshape(-1, 1))

        stats_array = np.array([[y_test[i][0], p_test[i][0]] for i in range(len(y_test))])

        df = pd.DataFrame(stats_array, columns=['Actual', 'Predicted'])
        df.to_csv("temp_statistics.csv")

        predicted_week = []

        for i in range(7):
            y_pred = model.predict(x_forecast)
            y_pred = sc.inverse_transform(y_pred)
            predicted_week.append(y_pred[0][0])
            x_forecast = np.array(x_forecast[:, 1:, :])
            x_forecast = np.append(x_forecast, [[[predicted_week[-1]]]], axis=1)

        dates = []
        for i in range(len(predicted_week)):
            dates.append('{}-{}-{}'.format(datetime.now().year, datetime.now().month, datetime.now().day + i + 1))

        my_array = np.array([[dates[i], predicted_week[i]] for i in range(7)])

        df = pd.DataFrame(my_array, columns=['Date', 'Prediction'])
        df.to_csv("temp_predicted.csv")

    else:
        df = pd.DataFrame(columns=['Date', 'Prediction'])
        df.to_csv("temp_predicted.csv")
        df = pd.DataFrame(columns=['Actual', 'Predicted'])
        df.to_csv("temp_statistics.csv")

prediction_algo(sys.argv[1])
