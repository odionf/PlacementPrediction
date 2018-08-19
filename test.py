import numpy
import pandas
import sys
from sklearn.neighbors import KNeighborsClassifier
from sklearn.linear_model import LogisticRegression
url = "placementdataset.csv"
names = ['pid','bid','grad_yr','avg_grade','no_kts','live_kts','extra_curr','co_curr','placed']
dataset = pandas.read_csv(url, names=names)
dataset = dataset.drop(['pid','grad_yr'],axis=1)
array = dataset.values
X = array[:,0:6]
Y = array[:,6]
lr = KNeighborsClassifier()
lr.fit(X, Y)

a=sys.argv[1]
b=sys.argv[2]
c=sys.argv[3]
d=sys.argv[4]
e=sys.argv[5]
f=sys.argv[6]






inp=[[a,b,c,d,e,f]]
predictions = lr.predict(inp)
op=predictions[0]
o=str(op)
if(o=='0'):
	file=open("notplaced.php","r")
	f=file.read()
	print(f)
	
else:
	file = open("placed.php", "r")
	f=file.read()
	
	print (f)
