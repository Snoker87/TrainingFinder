import requests
import sys
API_URL = "https://api-inference.huggingface.co/models/Davlan/bert-base-multilingual-cased-ner-hrl"
headers = {"Authorization": "Bearer *****************"}

def query(payload):
	response = requests.post(API_URL, headers=headers, json=payload)
	return response.json()

# text2 = "summer training in jeddah in STC company"
text = sys.argv[1]
# print(type(text2))
output = query({
	"inputs": text,
})
print(output)
