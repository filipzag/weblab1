



<?php
include("simple_html_dom.php");
include("diplomski_radovi_class.php");
$ch = curl_init();


$ListOfRadovi=[];






for($i=2;$i<=6;$i++){
	
	
	
	$link="http://stup.ferit.hr/index.php/zavrsni-radovi/page/".$i."/";
	curl_setopt($ch, CURLOPT_URL, $link);
	      //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $html contains the output string 
        $html = curl_exec($ch); 
		//echo $html;
// Create a DOM object
$dom = new simple_html_dom();

// Load HTML from a string
$dom->load($html);


# Iterate over all the <a> tags
foreach($dom->find('article')  as $element) {
      
		
	$title = $element->find('div.fusion-post-content.post-content a', 0)->plaintext;
	$text = $element->find('div.fusion-post-content.post-content p', 0)->plaintext;
	$link = $element->find('div.fusion-post-content.post-content a', 0)->href;
	$oib = $element->find('img', 0)->src;
	
	$oiblen=strlen($oib);
	$startpos=$oiblen-15;
	$oibtrim=substr($oib,$startpos,11);
	
	$objectData = array("naziv_rada"=>$title, "tekst_rada"=>$text, "link_rada"=>$link, "oib_tvrtke"=>$oibtrim);
	$ListOfRadovi[] = new DiplomskiRad($objectData); 
	
	
		
	
}
		

}


	$ListOfRadovi[3]->save();

$ListOfRadovi[1]->read();

?>