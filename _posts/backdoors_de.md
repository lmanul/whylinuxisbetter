---
lang: de
---




<h2>Keine Hintertüren in deiner Software.</h2>

Der Unterschied zwischen „Closed Source“ (proprietärer) und „Open Source“ Software ist, dass (oh Wunder!) die Quelle offen ist. OK, aber warum sollte mich das kümmern? Nun, die „Source“ oder auch „Quelltext“ ist für ein Programm das, was ein Rezept für einen Kuchen ist. Wenn du einen Kuchen kaufst, gibt es keine Möglichkeit, das genaue Rezept herauszufinden (auch wenn du Teile davon erraten kannst, wird es nie genau das gleiche sein). Gäbe eine Bäckerei ihr Rezept für einen super-leckeren Käsekuchen heraus, würde diese bald darauf Pleite gehen, weil die Leute ihn selbst zu Hause backen würden, anstatt ihn zu kaufen. Ebenso gibt Microsoft nicht ihr Rezept, den Quelltext für ihre Software, z.&#x202f;B. Windows, heraus. Denn das ist genau das, womit sie ihr Geld verdienen.

Das Problem ist, dass sie alles, <i>was immer sie wollen</i>, in ihr Rezept einbauen können, ohne dass wir davon wissen. Nehmen wir an, sie wollen ein paar Zeilen Quelltext mit dem folgenden Inhalt hinzufügen: „Erstelle jeden 12. eines Monats, wenn der Computer online ist, eine Liste mit allen Dateien, welche seit dem letzten Monat auf den Computer heruntergeladen wurden, und sende diese zurück an Microsoft.“ Microsoft tut dies wahrscheinlich nicht, aber <i>woher genau soll man das wissen</i>, wenn doch alles verschlossen, unsichtbar, geheim ist?

Vor einiger Zeit (Oktober 2008) sahen viele chinesische Windows-Benutzer (die meisten von ihnen verwenden illegale Kopien von Windows) etwas Seltsames mit ihrem Computer geschehen: Jede Stunde wurde ihr Bildschirm für einige Sekunden schwarz. Nichts, was einen wirklich vom Arbeiten abhält, aber etwas, was einen schnell verrückt werden lässt. Microsoft hatte etwas Quelltext (eine Zutat) mit folgender Aussage hinzugefügt: „Wenn diese Kopie als Raubkopie von Windows erkannt ist, schwärze den Bildschirm jede Stunde für einige Sekunden.“ Der Knackpunkt ist nicht, dass die Software raubkopiert war: Raubkopien sind immer schlecht. Der Punkt ist, dass diese Benutzer ein automatisches Windowsupdate bekamen (Updates beseitigen normalerweise Fehler und fügen neue Funktionen hinzu), ohne zu wissen, wie es sich auf ihr System auswirkt. Niemand wusste es.

Das Ändern des Quelltexts von Open-Source-Software ist ein sehr viel offener Prozess. Per Definition sind alle Rezepte frei verfügbar. Dies wird dich aber wahrscheinlich nicht interessieren, da du wohl nicht in der Lage wärst, den Quelltext zu verstehen. Aber Leute, die ihn verstehen, können ihn lesen und darüber sprechen. Und dies tun sie oft. Jedes Mal, wenn jemand den Quelltext ändern will, können alle anderen Entwickler die Änderung sehen („Hey, warum hast du Code hinzugefügt, der die Benutzereingaben ausspioniert? Hast du den Verstand verloren?“). Und selbst wenn das ganze Entwicklerteam eines Programms verrückt wird und anfängt, überall im Quelltext gefährliche Funktionen einzubauen, kann jemand außerhalb sich den Code vornehmen, alle schlechten Bits entfernen, eine ganz neue Version davon erstellen und die ganze Welt wissen lassen, was der Unterschied ist. Es ist <i>offen</i>.

Das ist der Grund, warum du sicher sein kannst, dass Open-Source-Software keine bösen Dinge hinter deinem Rücken tut: Die Gemeinschaft hat stets ein Auge auf alle Rezepte.




