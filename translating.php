<?php require("entete.php"); ?> <?php require("base.php"); ?>

<div id="corps">

<h2>How to translate this website</h2>

<ol>

<li>Send me an <b>email</b> at ideas [at] whylinuxisbetter [dot] net to 
make sure that there isn't anybody already working on this 
particular translation.</li>

<li>Choose a unique and short <b>suffix</b> for your language (for example, "ru" 
for Russian, "ser" for Serbian). We will call this suffix "lang" for the 
purpose of this tutorial.</li>

<li><b>Download</b> and extract <a 
href="http://www.manucornet.net/pub/www.whylinuxisbetter.net.tgz">this 
archive</a>.</li>

<li>Make sure you use a simple text editor (for example gedit in Linux) and make sure you open and save files in the 
<b>UTF-8</b> encoding. With this editor, create a file called title_lang.txt at 
the root of the expanded archive and place the translation of this 
website's title in it.</li>

<li>Go into the "items" subfolder. Here you will find a folder for 
each of this website's articles. In each of them,

<ul>

<li>Copy the index.php file to index_lang.php&nbsp;.</li>

<li>Open this newly created file, find the places where there is 
English text, and replace it by your translation (you don't need to 
understand HTML or PHP, just try to keep the parts you don't understand 
as they are). </li>

</ul>
</li>

<li>Do the same thing for files inside the "stick_to_windows" and 
"switch" folders.</li>

<li>At the root of the archive, copy the main index.php file to 
index_lang.php. It has one line for including each of the "items": 
for each of these lines, replace the empty string "" by your 
language suffix with an underscore: "_lang" and translate the 
title of this item.</li>

<li><b>Remove all the files you did not touch, only include the new
translations</b>, and possibly the files in which you fixed mistakes.</li>

<li><b>Compress</b> the resulting directory into a TAR or a <b>Gzipped tar</b> (extensions
.tar, .tgz or .tar.gz). You can also zip it, but that will be less convenient
for me.</li>

<li>Send this file to me by <b>email</b> (same address as above). In this email, please include the name under which
you would like to appear, and the web page of yours I can
link to, if there is one.</li>

<li>See your translation appear on the website with your name on 
your language's first page and get billions of thanks from me and above 
all from all the people speaking the same language !!</li>

</ol>

Thanks a lot!!

</div>
</body>
</html>
