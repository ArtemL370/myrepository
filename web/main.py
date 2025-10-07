# main.py
from fastapi import FastAPI, File, UploadFile, HTTPException
from fastapi.responses import JSONResponse
import pandas as pd
import requests
import io

app = FastAPI(title="CSV Prediction API")

# Конфигурация (лучше вынести в .env)
ML_SERVICE_URL = "http://localhost:8001/M1.ipynb?"  # URL вашего ML-сервиса

@app.post("/predict")
async def predict_from_csv(file: UploadFile = File(...)):
    if not file.filename.endswith('.csv'):
        raise HTTPException(status_code=400, detail="Only CSV files are allowed")
    
    try:
        # Чтение CSV-файла
        contents = await file.read()
        df = pd.read_csv(io.StringIO(contents.decode('utf-8')))
        
        # Отправка данных в ML-сервис
        response = requests.post(
            ML_SERVICE_URL,
            json=df.to_dict(orient='records'),
            headers={"Content-Type": "application/json"}
        )
        
        if response.status_code != 200:
            raise HTTPException(status_code=500, detail="ML service error")
            
        return JSONResponse(content=response.json())
        
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Processing error: {str(e)}")

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8000)