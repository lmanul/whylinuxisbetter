import os

items = [f for f in os.listdir(".") if f.endswith(".php")]
for i in items:
  last_underscore = i.rfind("_")
  last_dot = i.rfind(".")
  lang = i[last_underscore + 1:last_dot]
  if len(lang) > 3:
    lang = "en"
  command = 'sed -i "s/---/---\\nlang: ' + lang + '/" ' + i
  print(command)
  os.system(command)
