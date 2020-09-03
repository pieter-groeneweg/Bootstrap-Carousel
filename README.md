# Bootstrap-Carousel
Bootstrap carousel template alternative for Joomla 3.x module mod_articles_latest 

## Requirements
Joomla 3 comes with bootstrap 2.3. This template alternative only works properly using Bootstrap 3
In order to use Bootstrap 3 in your J!3 website, do as follows.

Download a bootstrap 3 from https://getbootstrap.com/docs/3.4/getting-started/#download
Unpack and copy the appropriate files to:
 - template/js/jui/
 - template/css/jui/
 
Alternatively, if your site doesn't use (much) bootstrap, you can just decide to only download the scripts needed from https://getbootstrap.com/docs/3.4/customize/
You will need to add the scripts to your site/code yourself.

! Beware, changing the bootstrap version is at your own risk. Test the behaviour of your template and other extension views before using this in production.

## Install the alternative
to install, save carousel.php in 
- template/html/mod_articles_latest

## Setup
The setup of this alternative view is as simple as setting up the module as you are used too.
In tab advanced there is module class suffix. 
This parameter can be set with a number. The number is setting the amount of articles per slide.

! Note, this needs improvement as the module class suffix may have use for other means of styling in your site. 

## Your own template styling and demands.
//the part at will.. //to end part at will
is the part in between you can make your design changes. 
$item->whatever is holding whatever article item values. This usually reflects the column names in the database. Sometimes they need some jsondecode like with the images.
Have fun adapting this to your own.
