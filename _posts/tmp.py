import os

items = [f for f in os.listdir(".") if f.endswith(".md")]
for i in items:
  last_underscore = i.rfind("_")
  last_dot = i.rfind(".")
  lang = i[last_underscore + 1:last_dot]
  if len(lang) > 3:
    lang = "en"
  print(lang)
  header = "---\nlang: ' + lang + '\n---\n"
  orig = open(i, "r").read()
  f = open(i, "w")
  #f.write(header)
  f.write(orig)
  f.close()

#print(items)
