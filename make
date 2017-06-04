#!/usr/bin/python

import os

IDS = [
  "TITLE",
  "STICK_TO_WINDOWS",
  "SWITCH",
]

intl_files = [f for f in os.listdir("intl") if f.endswith(".txt")]

for intl_file in intl_files:
  last_dot = intl_file.rfind(".")
  lang = intl_files[:last_dot]
  if not os.path.exists(lang):
    os.mkdir(lang)
  index_path = os.path.join(lang, "index.html")
  os.system("rm -f " + index_path)
  translation_lines = open(os.path.join("intl", lang + ".txt")).readlines()
  translations = {}
  for line in translations_lines:
    parts = line.strip().split(":", 1)
    translations[parts[0]] = parts[1]
  os.system("cp index.template " + lang + "/")
  for id in IDS:
    os.system('sed -i "s/' + id + '/' + translations[id] + '/ ' + index_path)
