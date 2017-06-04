#!/usr/bin/python3

import os

IDS = [
  "WARNING",
  "LANG",
  "TITLE",
  "STICK_TO_WINDOWS",
  "SWITCH",
]

intl_files = [f for f in os.listdir("intl") if f.endswith(".txt")]

for intl_file in intl_files:
  last_dot = intl_file.rfind(".")
  lang = intl_file[:last_dot]
  if not os.path.exists(lang):
    os.mkdir(lang)
  index_path = os.path.join(lang, "index.html")
  os.system("rm -f " + index_path)
  translation_lines = open(os.path.join("intl", lang + ".txt")).readlines()
  translations = {}
  translations['LANG'] = lang
  translations['WARNING'] = 'This file is auto-generated, do not edit!'
  for line in translation_lines:
    if line.strip() == "":
      continue
    if not ":" in line:
      print("Badly formatted line in " + lang + " file: " + line)
    parts = line.strip().split(":", 1)
    print(parts)
    translations[parts[0]] = parts[1]
  os.system("cp index.template " + lang + "/index.html")
  for id in IDS:
    if id in translations:
      os.system('sed -i "s/' + id + '/' + translations[id] + '/" ' + index_path)
