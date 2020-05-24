import pandas as pd
import numpy as np
dataset=pd.read_csv("chronickidney.csv")
dataset = pd.get_dummies(dataset, columns = ['sg', 'al', 'su', 'rbc', 'pc', 'pcc', 'ba','htn',	'dm',	'cad',	'appet',	'pe',	'ane'
])
y = dataset['class'].values
x = dataset.drop(['class'], axis = 1).values
from sklearn.model_selection import train_test_split
x_train,x_test,y_train,y_test=train_test_split(x,y,test_size=0.50,random_state=0)
from sklearn.ensemble import RandomForestClassifier
classifier1=RandomForestClassifier(n_estimators=20,criterion='entropy',random_state=0)
classifier1.fit(x_train,y_train)
ypred=classifier1.predict(x_test)
from sklearn.metrics import confusion_matrix
cm=confusion_matrix(y_test,ypred)
import pickle
pickle.dump(classifier1, open('model.pkl','wb'))
