from fastapi import FastAPI
from pydantic import BaseModel
import numpy as np
from sklearn import svm
import joblib 

model_filename = "svm_model.h5"
model = joblib.load(model_filename)

app = FastAPI()

@app.get("/PulmoAIds")
async def root(
             dato1: float,
             dato2: float,
             dato3: float,
             dato4: float,
             dato5: float,
             dato6: float,
             dato7: float,
             dato8: float,
             dato9: float,
             dato10: float,
             dato11: float,
             dato12: float
    ):

    datos = np.array([[dato1, dato2, dato3, dato4, dato5, dato6, dato7, dato8, dato9, dato10, dato11, dato12]])
    print(datos)
  
    res = model.predict(datos)

    print(res)

    return {
      "prediction": str(res[0]),
    }

