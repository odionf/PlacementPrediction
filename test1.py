import numpy
import pandas
import sys
from sklearn.linear_model import LogisticRegression
url = "placementdataset.csv"
names = ['pid','bid','grad_yr','avg_grade','no_kts','live_kts','extra_curr','co_curr','placed']
dataset = pandas.read_csv(url, names=names)
dataset = dataset.drop(['pid','grad_yr'],axis=1)
array = dataset.values
X = array[:,0:6]
Y = array[:,6]
lr = LogisticRegression()
lr.fit(X, Y)
a=1
b=3
c=0
d=0
e=3
f=3
inp=[[a,b,c,d,e,f]]
predictions = lr.predict(inp)
print(predictions)
