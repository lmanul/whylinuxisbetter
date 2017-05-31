<?php require("entete.php"); ?> <?php require("base.php"); ?>

<div id="corps">

<h2>Hur man översätter hemsidan</h2>

<ol>

<li>Skicka mig ett mail med idéer på ideas [at] whylinuxisbetter [dot] net för att säkerställa att ingen redan arbetar på samma översättning.</li>

<li>Välj ett unikt suffix för ditt språk (till exempel, ”ru” för ryska, ”ser” för serbiska). Vi kommer att kalla detta suffix för ”lang” genom guiden. Ladda sedan ner och extrahera <a 
href="http://www.manucornet.net/pub/www.whylinuxisbetter.net.tgz">arkivet</a>.</li>

<li>Använd en enkel texteditor (gedit i Linux fungerar fint, likaså Notepad i Windows) och se till att  du öppnar och sparar dina filer i UTF-8. Med denna editor, skapa en fil kallad titel_lang.txt i roten av det extraherade arkivet och placera översättning av hemsidan i den.</li>

<li>Gå in i ”items”. Här kommer du att finna ett mapp för varje artikel på hemsidan. I varje,

<ul>

<li>Kopiera index.php till index_lang.php&nbsp;.</li>

<li>Öppna denna nyskapade fil, hitta platser där det är engelsk text, och ersätt den med din översättning (du behöver inte förstå HTML eller PHP, försök bara att låta det du inte förstår vara som det är). </li>

</ul>
</li>

<li>Gör samma sak för filerna i mapparna ”stick_to_windows” och ”switch”.</li>

<li>Vid roten av arkivet, kopiera huvud index.php till index_lang.php. Den har en rad för varje ”item”: För varje rad, ersätt den tomma raden ”” med ditt språksuffix med: ”_lang” och översätt titeln.</li>

<li>Kompressera arkivet igen (det vore bäst om du tog bort alla filer som du inte rörde, och bara inkludera de nya översättningarna, och möjligtvis de filer som du har fixat fel på), och skicka mig det i ett mail (samma adress som ovan. I detta mail, inkludera namnet som du vill ska synas, och din hemsida (om du har någon).</li>

<li>Se din översättning dyka upp på hemsidan med ditt namn på ditt lands förstasida och erhåll miljarder tack från mig och alla som pratar ditt språk!!</li>

</ol>

Tack så otroligt mycket!

</div>
</body>
</html>
