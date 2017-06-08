---
identifier: defragment
category: hu
title: "Töredékekként látod a világot?"
---

Ha már tudod, mi az a töredezettség, és kb. minden hónapban töredezettségmentesíted a géped, itt egy rövidebb verzió: a Linuxot nem kell töredezettségmentesíteni.

Képzeld el, hogy a merevlemezed egy hatalmas iratszekrény, milliónyi fiókkal (köszönet <a href="http://www.pps.jussieu.fr/~dicosmo/">Roberto Di Cosmo</a>nak a hasonlatért). Minden fiók csak egy adott mennyiségű adatot tud tárolni. Tehát azokat a fájlokat, melyek nagyobbak, mint amekkorát egy fiók el tudna tárolni, fel kell darabolni kisebb részekre. Néhány fájl olyan hatalmas, hogy több ezer fiókra van szükségük. És természetesen ezekhez a fájlokhoz sokkal könnyebb hozzáférni, ha az őket tartalmazó fiókok közel vannak egymáshoz.

Most képzeld el, hogy te vagy ennek az iratszekrénynek a tulajdonosa, de nincs időd foglalkozni vele, és fel akarsz bérelni valakit, hogy tartsa rendben helyetted. Két ember jelentkezik az állásra, egy férfi és egy nő.

<ul>

<li>A férfi a következő stratégiát követi: csak kiüríti a fiókokat, mikor egy fájlt eltávolítanak. Minden új fájlt fióknyi méretű darabokra vág, és véletlenszerűen tölti bele őket az elsőként megpillantott üres fiókokba. Mikor megemlíted, hogy ezzel eléggé megnehezíti az adott fájlok darabkáinak megtalálását, a válasz az, hogy egy tucat fiúra lenne szükség, akik minden hétvégén a megfelelő sorrendbe raknák a fiókokat.</li>

<li>A nőnek más a technikája: nem veszít semmit sem szem elől, a folyamatosan ürülő fiókokat egy darab papíron követi nyomon. Mikor új fájlok érkeznek, megkeresi a listáján az üres fiókok megfelelő hosszúságú sorát, és oda helyezi el a fájlt. Így, feltéve, hogy van elég hely, az iratszekrény rendezett marad.</li>

</ul>

Kétségtelen, hogy a nőt kellene felvenned (egyébként is tudnod kellett volna, hogy a nők sokkal szervezettebbek :) ). Nos, a Windows az első módszert használja, a Linux pedig a másodikat. Minél többet használsz Windows-t, annál lassabban férsz csak hozzá a fájlokhoz; minél többet használsz Linuxot, az annál gyorsabbá válik. A kezedben a döntés!

<img src="/img/defragment.png" />




