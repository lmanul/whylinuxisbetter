import os

items = [f for f in os.listdir(".") if f.endswith(".md")]
for i in items:
  last_underscore = i.rfind("_")
  last_dot = i.rfind(".")
  lang = i[last_underscore + 1:last_dot]
  if len(lang) > 3:
    lang = "en"
  header = "---\nlang: " + lang + "\n---\n"
  orig = open(i, mode="r", encoding='utf-8').read()
  f = open(i, mode="w", encoding='utf-8')
  f.write(header)
  f.write(orig)
  f.close()

#print(items)
