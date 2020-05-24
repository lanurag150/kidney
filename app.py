import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

app = Flask(__name__)
model = pickle.load(open('model.pkl', 'rb'))

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/predict',methods=['POST'])
def predict():
   
    get = [float(x) for x in request.form.values()]
    for i in range(0,48):
        list[i]=0 
    list[0]=get[0]
    list[1]=get[1]
    list[2]=get[2]
    list[3]=get[3]
    list[4]=get[4]
    list[5]=get[5]
    list[6]=get[6]
    list[7]=get[7]
    list[8]=get[8]
    list[9]=get[9]
    list[10]=get[10]
    if(get[11]==1.005):
          list[11]=1
    elif(get[11]==1.010):
        list[12]=1
    elif(get[11]==1.015):
           list[13]=1
    elif(get[11]==1.020):
           list[14]=1       
    else:
            list[15]=1  
   
    if(get[12]==0):
        list[16]=1
    elif(get[12]==1):
          list[17]=1
    elif(get[12]==2):
           list[18]=1
    elif(get[12]==3):
            list[19]=1  
    
    else:
          list[20]=1 
    if(get[13]==0):
        list[21]=1
    elif(get[13]==1):
          list[22]=1
    elif(get[13]==2):
           list[23]=1
    elif(get[13]==3):
            list[24]=1  
    elif(get[13]==4):
            list[25]=1  
    else:
          list[26]=1       
    if(get[14]==0):
          list[27]=1
    else:
        list[28]=1 
    if(get[15]==0):
          list[29]=1
    else:
        list[30]=1    
    if(get[16]==0):
          list[31]=1
    else:
        list[32]=1  
    if(get[17]==0):
          list[33]=1
    else:
        list[34]=1   
    if(get[18]==0):
          list[35]=1
    else:
        list[36]=1  
    if(get[19]==0):
          list[37]=1
    else:
        list[38]=1     
    if(get[20]==0):
          list[39]=1
    else:
        list[40]=1    
    if(get[21]==0):
          list[41]=1
    else:
        list[42]=1   
    if(get[22]==0):
          list[43]=1
    else:
        list[44]=1 
    if(get[23]==0):
          list[45]=1
    else:
        list[46]=1 
    
   
          
    print(list)    
    final_features = [np.array(list)]
    prediction = model.predict(final_features)

    output = round(prediction[0], 2)
    print(output)
    if(output==1):
       return render_template('index1.html', prediction_text='RESULT IS POSITIVE')
    else:
          return render_template('index2.html', prediction_text='RESULT IS NEGATIVE')  
if __name__ == "__main__":
    app.run(debug=False)