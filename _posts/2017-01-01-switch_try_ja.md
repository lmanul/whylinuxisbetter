---
identifier: switch_try
lang: ja
title: 「ライブCD」で試してみる。
tags: switch
---

ハードディスクに指一本触れず、使っているWindowsに何ひとつ手を入れずに、Linuxを実際に使ってみることができるんです！

Linuxの「ライブCD」を使えば、それが可能。ライブCD動かすのは、次のような仕組み。

<ul>

<li>CDイメージをウェブからダウンロードします。お尻に「.iso」が付いたファイルで、650MBくらいあるのがふつう。</li>

<li>CD-RかRWに焼きます。</li>

<li>CDをCDドライブに入れ、再起動。</li>

<li>パソコンは、ハードディスク（のWindows）からではなく、CDから起動するはず。このとき、ハードディスクには指一本触れないから。Windowsにもデータにも、心配は不要。CDを抜いてもう一回再起動したら、ちゃんと元通りだからね。</li>

<li>あれ？　Windowsから起動しちゃった。CDって、なんにも関係なかったよ。そんな場合には、BIOSの設定がオフになっているんでしょう。パソコンがOSを探すのに、まずCD、次にハードディスクという順番にしておかなけりゃいけない。BIOSに入るには、起動のときに「Del」とか「F2」とかいったキーを押せば大丈夫（心配な場合は、誰かに手伝ってもらうかWebに聞いてね）</li>

<li>やった！　Linuxが走ってる！　これで試してみることができるし、感じもわかる。「遅っそいなあ！」って、心配しないで。CDから読み込むのに時間がかかっているだけだから。もしもハードディスクにインストールしたら、もっとずっと早く動くからね。</li>

</ul>

えっと、じゃあそのCDイメージって、どこでダウンロードするの？　ネットを検索したらいくらでもライブCDは出てきます。たとえば、こんなのを使ってもいいかな。

<table cols="2">
<tr>
<th>Ubuntu Live</th>
<th>Knoppix</th>
</tr>

<tr>
<td><a href="/img/ubuntu.png"><img src="/img/ubuntu_thumbnail.png" /></a></td>
<td><a href="/img/knoppix.png"><img src="/img/knoppix_thumbnail.png" /></a></td>
</tr>

<tr>
<td><a 
href="http://www.ubuntu.com/download">http://www.ubuntu.com/download</a></td>
<td><a 
href="http://www.knoppix.net/get.php">http://www.knoppix.net/get.php</a></td>
</tr>

</table>

