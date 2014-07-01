<?php
require ("fonctions_real.php");
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
} else {
  $lang = "";
}
if ($lang == "") {
	$title = "Why Linux is Better";
	$index_page = "index.php";
} else {
	$title = make_title ($lang);
	$index_page = "index_" . $lang . ".php";
}
echo "<h1><a href=\"/$index_page?lang=$lang\" title=\"Home\">$title</a></h1></div>";
?>

<div id="pub">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-9761855105959184";
/* 728 x 90, 2011.02.27 -- whylinuxisbetter.net */
google_ad_slot = "5667276614";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<!-- Facebook like button -->
<div id="facebook">
<g:plusone></g:plusone>
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.whylinuxisbetter.net&amp;layout=standard&amp;show_faces=true&amp;width=160&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:160px; height:80px;" allowTransparency="true"></iframe>
</div>

<br style = "clear: both;" />
