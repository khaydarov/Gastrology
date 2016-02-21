<?php


include('simplehtmldom/simple_html_dom.php');

$html = new simple_html_dom();
$html->load('<html><body>Hello!</body></html>');

$html = file_get_html('http://web-medik.ru/');

foreach ($html->find('div[class=teaser-item]') as $divs) {
	
	$img = $divs->find('img', 0);
	$title_href = $divs->find('.pos-title > a', 0)->href;
	$title_text = $divs->find('.pos-title > a', 0);

	$pos_description = $divs->find('.pos-description', 0);

	echo "<img src='$img->src' width='150px' height='150px'>".'<br>';
	echo "<p class='was'>http://web-medik.ru$title_href</p>";
	echo $pos_description;

}


?>