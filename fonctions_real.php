<?php
$GLOBALS['website_root_path'] = "/srv/www/www.whylinuxisbetter.net";

function item ($nom, $texte, $suffix) {
  if (isset($_GET["lang"])) {
  	$lang = $_GET['lang'];
  } else {
    $lang ="";
  }
	echo "
	<a href=\"/items/$nom/index" . $suffix . ".php?lang=$lang\">
	<div class=\"item\">
	<div class=\"item-image\">
	<img src=\"/items/" . "$nom" . "/Images/" . $nom . "_thumb_smaller.png\" alt=\"$nom\" /><br />
	</div>
	<p>$texte</p>
	</div></a>";
}

function make_title($lang) {
  if (strlen($lang) != 2) {
    return "Why Linux is better";
  }
	$file = $GLOBALS['website_root_path'] . '/title_' . $lang . '.txt';
	$content = file ($file);
	$title = rtrim($content[0]);
	return $title;
}

function game ($name) {
	$base_path = "/items/free_games/Images/";
	$thumb = $base_path . $name . "_thumbnail.jpg";
	$image = $base_path . $name . ".jpg";
	$real_name = ucwords (preg_replace ("/_/", " ", $name));
	echo "
	<div class=\"item\">
	<a href=\"$image\">
	<img src=\"$thumb\" alt=\"$real_name\" /><br />
	$real_name
	</a>
	</div>";
}

function video ($id) {
  echo "
    <object width=\"425\" height=\"350\"><param name=\"movie\" 
    value=\"http://www.youtube.com/v/" . $id . "\"></param><param name=\"wmode\" 
    value=\"transparent\"></param><embed 
    src=\"http://www.youtube.com/v/" . $id . "\" 
    type=\"application/x-shockwave-flash\" wmode=\"transparent\" width=\"425\" 
    height=\"350\"></embed></object>
  ";
}

function all_games_from_file () {
  $data = $GLOBALS['website_root_path'] . "/items/free_games/games.data";
  $lines = file ($data);
  foreach ($lines as $line) {
    $line = rtrim ($line);
    game($line);
  }
}

function all_video_ids_from_file () {
  $data = $GLOBALS['website_root_path'] . "/items/spatial_desktop/video_ids.data";
  $lines = file ($data);
  foreach ($lines as $line) {
    $line = rtrim ($line);
    video($line);
  }
}

function parse_distros_data_from_file () {
  $data_file = $GLOBALS['website_root_path'] . "/switch/install/distros.data";
  $lines = file($data_file);
  $data = array();
  foreach ($lines as $line) {
    if(substr($line, 0, 1) == '#') {
      continue;  # Skip comments
    }
    $line = rtrim ($line);
    $fields = split(",", $line);
    $distro['name'] = $fields[0];
    $distro['url'] = $fields[1];
    $distro['image'] = $fields[2];
    $distro['thumb'] = $fields[3];
    array_push($data, $distro);
  }
  return $data;
}

function make_distros_table() {
  $data = parse_distros_data_from_file();
  $count = count($data);
  print "<table cols=\"$count\">";
  print "<tr>";
  foreach ($data as $distro) {
    print "<th>" . $distro['name'] . "</th>";
  }
  print "</tr>";
  print "<tr>";
  foreach ($data as $distro) {
    print "<td><a href=\"" . $distro['image'] . "\"><img src=\"" .
        $distro['thumb'] . "\" /></a>";
  }
  print "</tr>";
  print "<tr>";
  foreach ($data as $distro) {
    print "<td><span style=\"margin: 0 7px\"><a href=\"http://" . $distro['url'] . "\">" . $distro['url'] . "</a></span></td>";
  }
  print "</tr>";
  print "</table>";
}

function table_parser ($yes, $no, $comm_head, $oss_head, $exists_head) {
	$data = $GLOBALS['website_root_path'] . "/items/warez/table.data";

	print "
	<table cols=\"3\" border=\"1\" cellpadding=\"3\">
	<tr>
	<th align=\"left\">$comm_head</th>
	<th align=\"left\">$oss_head</th>
	<th width=\"7%\">$exists_head</th>
	</tr>
	";
	
	$lines = file ($data);

	foreach ($lines as $line) {
		$line = rtrim ($line);
		list ($commercial, $dollars, $oss, $bool) = split (":", $line, 4);

		# Set up the price
		if ($dollars == 0)
			$dollars = "free";
		else
			$dollars = "~\$$dollars";

		# Set up the "exists on Windows"
		if ($bool == 1)
			$exists = "$yes";
		if ($bool == 0)
			$exists = "$no";

		print "
		<tr>
		<td align=\"left\">$commercial ($dollars)</td>
		<td align=\"left\">$oss</td>
		<td>$exists</td>
		</tr>\n\n
		";
	}

	print '</table>';
}

?>
