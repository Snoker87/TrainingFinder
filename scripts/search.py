from transformers import AutoTokenizer, AutoModelForTokenClassification
from transformers import pipeline
import json
import pprint
tokenizer = AutoTokenizer.from_pretrained("Davlan/bert-base-multilingual-cased-ner-hrl")
model = AutoModelForTokenClassification.from_pretrained("Davlan/bert-base-multilingual-cased-ner-hrl")

nlp = pipeline("ner", model=model, tokenizer=tokenizer)
example = "My name is omar and Im from Riyadh I work in Aramco company"
ner_results = nlp(example)
pprint.pprint(ner_results)