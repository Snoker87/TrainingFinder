import requests

API_URL = "https://api-inference.huggingface.co/models/Davlan/bert-base-multilingual-cased-ner-hrl"
headers = {"Authorization": "Bearer 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"}

def query(payload):
	response = requests.post(API_URL, headers=headers, json=payload)
	return response.json()

text2 = "summer training in jeddah in STC company"
output = query({
	"inputs": text2,
})
print(output)