# Komputasi Serial

import numpy as np
import pandas as pd
from sklearn.linear_model import LinearRegression
import time

# Generate synthetic weather data
np.random.seed(42)
n_samples = 10**6

data = pd.DataFrame({
    'hour': np.random.randint(0, 24, n_samples),
    'humidity': np.random.uniform(30, 90, n_samples),
    'pressure': np.random.uniform(1000, 1020, n_samples),
    'wind_speed': np.random.uniform(0, 15, n_samples),
    'temperature': np.random.uniform(15, 35, n_samples)
})

# Split features and target
X = data[['hour', 'humidity', 'pressure', 'wind_speed']]
y = data['temperature']

# Komputasi serial
start_time = time.time()
model = LinearRegression()
model.fit(X, y)
serial_time = time.time() - start_time

print(f"Komputasi serial selesai dalam waktu: {serial_time:.2f} detik")