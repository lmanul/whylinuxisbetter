<?php require("../../entete.php");?> <?php require("../../base.php");?> <?php require("../../fonctions.php");?>

<div id="corps">

<h2>Nincsenek többé backdoorok</h2>

<p>(A backdoor egy módszer, hogy kikerüljék a normális hitelesítést, távolról hozzáférjenek egy számítógéphez úgy, hogy ezalatt rejtve maradnak. Megjelenhet egy telepített alkalmazás formájában, lehet egy létező program módosítása vagy hardvereszközök. a ford.)</p>

<p>A nyílt forráskódú szoftverek abban különböznek a zárt forráskódúaktól (kereskedelmiktől), hogy (roppant nehéz kitalálni) a forráskódjuk nyitott. Oké, de ez kit érdekel? Nos, a szoftverek forráskódjai olyanok, mint a legízletesebb sütik titkos <b>receptjei</b>. Mikor sütit veszel, nincs mód arra, hogy rájöjj a pontos receptre (bár a hozzávalókat sejtheted, „egy kis kókuszt érzek benne”). Ha egy pék kiadná a csúcssikerű túrótortájának a receptjét, hamarosan csődbe menne, hisz az emberek immár otthon is meg tudnák sütni és biztos nem vennék meg többé. Hasonlóképp a Microsoft sem adja ki a szoftverei, pl. a Windows receptjét, azaz forráskódját, teljesen jogosan, hisz ezekkel keresik a pénzt.</p>

<p>A probléma az, hogy beletehetnek <i>bármit, amit akarnak</i> a kis receptjükbe anélkül, hogy tudnánk róla. Hozzáadhatnak akár egy olyan kódot is, ami azt mondja, hogy „minden hónapban 12-én, ha a számítógép hozzáfér az internethez, állítson össze egy listát minden fájlról, amit abban az utóbbi egy hónapban letöltöttek, és a hálózaton keresztül küldje vissza a Microsoftnak”. A Microsoft valószínűleg nem tesz ilyet, de <i>ki tudja</i>, ha egyszer minden zárt, rejtett és titkosított?</p>

<p>Nemrég (2008 októberében) sok kínai Windows-felhasználó (legtöbbjük kalóz Windows-t használt) azt látta, hogy valami különös történik a számítógépével: óránként elsötétült a képernyőjük pár másodpercre. Nem akadályoz a dolgodban, de könnyen az idegeidre mehet. A Microsoft egy kódot adott a szoftverhez (még egy hozzávalót a recepthez), ami azt mondja: „ha ezt a példányt hamisított Windows-ként azonosították, sötétüljön el a képernyő minden órában pár másodpercre”. Most nem az a lényeg, hogy kalózmásolat volt a szoftver: a szoftverhamisítás csúnya dolog és pont. A lényeg, hogy ezek a felhasználók automatikusan frissítették a Windows-t (a frissítések általában kijavítják a hibákat és új funkciókat adnak hozzá a programokhoz) anélkül, hogy tudták volna, milyen hatással lesz ez a rendszerükre. Senki sem tudta.</p>

<p>Egy nyílt forráskódú szoftver forráskódjának a megváltoztatása sokkal nyilvánosabb folyamat. Minden recept nyilvános, definíció szerint. Persze neked nem számít annyira, hisz úgysem fogod megérteni a kódot, de azok, akik megértik, elolvashatják és nyíltan beszélhetnek róla. És ezt gyakran meg is teszik. Minden alkalommal, amikor valaki változtatni akar a kódon, ezt az összes többi fejlesztő látja („Hé, haver, miért adtad hozzá ezt a kódot, amelyik az után kémkedik, hogy a felhasználó milyen billentyűket üt le? Megőrültél?”). És még ha egy szoftvert fejlesztő egész csapat meg is őrülne és elkezdene gonosz funkciókat adni a kódhoz, egy kívülálló akkor is foghatja a kódot, eltávolíthatja a rossz részeket, elkészítheti egy teljesen új verzióját és tudathatja a világgal, mi a különbség. Mert <i>nyílt</i>.</p>

<p>Ezért lehetsz biztos benne, hogy egy nyílt forráskódú program nem tesz semmi rosszat a hátad mögött: a közösség alaposan rajta tartja a szemét a recepteken.</p>

</div>
</body>
</html>
