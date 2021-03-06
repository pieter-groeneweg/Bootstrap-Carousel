<?php
/**
 * mod_articles_latest template alternative, 
 * showing a bootstrap 3 carousel.
 * the code is as is and not tested against any or all existing templates.
 * drop this in <template>)/html/mod_articles_latest
 * beware this is bootstrap 3, make sure your j! site has bootstrap 3 enabled
 * enjoy making changes if you need. 
 * 
 * Copyright 2020 - pieter groeneweg - info@bizgo.nl
 */

defined('_JEXEC') or die;

use Joomla\CMS\Router\Route;

//number of items in a slide is set in module class suffix
$numsfx = max($params->get('moduleclass_sfx'),1); //needs improvement when ading more than one sfx. (ISOLATE the number)
//real item (slide) count can be less than set in count parameter
$count = min(ceil($params->get('count', 5)/$numsfx), ceil(count($list)/$numsfx));
?>
<div id="myCarousel<?php echo $module->id; ?>" class="carousel slide" data-ride="carousel" data-interval="5500">
    <!-- Indicators -->
    <ol class="carousel-indicators">
	<?php
		//adding the indicators (dsl) by count of articles in the parameters
		for ($dsl = 0; $dsl < $count; $dsl++) {
        	//set the active class (cla) on the first on html render
			if ($dsl == 0) {
				$cla = "class='active'";
			} else {
				$cla = "";
			}
			echo "<li data-target='#myCarousel".$module->id."' data-slide-to='".$dsl."' ".$cla."></li> \n";
        }
	?>
	</ol>
    <!-- Wrapper for slides -->
   	<div class="carousel-inner" role="listbox">
  	<?php 
    	$lit = 0; //set the list item (lit) number
      	foreach ($list as $item) {
        //set the active class (cla) on the first on html render
  		if ($lit == 0) {
        	$cla = " active";
        } else {
        	$cla = "";
        }
        //get the slides to start before each series of articles
        if($lit % $numsfx == 0) {
			echo "<div class='item".$cla."'> \n";
        }
        //have the articles spread over the slide
		echo "<div style='width:". (100/$numsfx) . "%; float:left; position: relative;'> \n";
        
        //start part at will.. just some generic code here you make your changes and/or additions at your own demand. 
        echo "<a href='" . Route::_($item->link) . "' itemprop='url'> \n";
		echo "<img src='/". json_decode($item->images)->image_intro ."' width='100%'> \n";
		echo "<div class='carousel-caption'> \n";
		echo "<h3>". $item->title . "</h3> \n";
		echo "</div> \n";
        echo "</a> \n";
        //end part at will
        
        echo "</div> \n";
        $lit++;
        //get the slides to end after each series of articles
        if($lit % $numsfx == 0) {
        	echo "</div> \n";
        }
	}
  	?>
	</div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel<?php echo $module->id; ?>" role="button" data-slide="prev">
      <span class="icon icon-arrow-left-3" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel<?php echo $module->id; ?>" role="button" data-slide="next">
      <span class="icon icon-arrow-right-3" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>    
</div>