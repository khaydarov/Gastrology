<?php


include('test/simplehtmldom/simple_html_dom.php');

$html = new simple_html_dom();
//$html->load('<html><body>Hello!</body></html>');

//$html = file_get_html('http://web-medik.ru/');



class News 
{

	public $src_img;
	public $post_src;
	public $title;
	public $short_description;

	public function __construct($src_img, $post_src, $title, $short_description)
	{
		$this->src_img = $src_img;
		$this->post_src = $post_src;
		$this->title = $title;
		$this->short_description = $short_description;
	}
}

$posts = array();

/*foreach ($html->find('div[class=teaser-item]') as $divs) {
	
	$img = $divs->find('img', 0);
	$title_href = $divs->find('.pos-title > a', 0)->href;
	$title_text = $divs->find('.pos-title > a', 0);

	$pos_description = $divs->find('.pos-description', 0);

	//echo "<img src='$img->src' width='150px' height='150px'>".'<br>';
	//echo "<p class='was'>http://web-medik.ru$title_href</p>";
	//echo $pos_description;

	$posts[] = new News($img->src, $title_href, $title_text, $pos_description);
}*/

//print_r($posts);
?>

<div class="row">
	<div class="col-lg-12 window" style="padding-top: 10px;">
		<img src="<?=$posts[4]->src_img;?>" alt="" width="160px" height="160px">
			<div style="text-align: center; font-weight: bold; "><a style="font-size: 13px;" href="http://web-medik.ru/<?=$posts[4]->post_src;?>"><?=$posts[4]->short_description; ?></a></div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 window" style="padding-top: 10px;">
		<img src="<?=$posts[7]->src_img;?>" alt="" width="160px" height="160px">
			<div style="text-align: center; font-weight: bold; "><a style="font-size: 13px;" href="http://web-medik.ru/<?=$posts[7]->post_src;?>"><?=$posts[7]->short_description; ?></a></div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 window" style="padding-top: 10px;">
		<img src="<?=$posts[13]->src_img;?>" alt="" width="160px" height="160px">
			<div style="text-align: center; font-weight: bold; "><a style="font-size: 13px;" href="http://web-medik.ru/<?=$posts[13]->post_src;?>"><?=$posts[13]->short_description; ?></a></div>
	</div>
</div>