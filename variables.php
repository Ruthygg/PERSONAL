<?php


class linking
{
protected $links;


function __construct()
	 {
		 $this->links[0]="index.php";
		 $this->links[1]="mycv.php";
		 $this->links[2]="http://ruthygarcia.wordpress.com/";
		 $this->links[3]="myrecommendations.php";
		 $this->links[4]="#";
		 $this->links[5]="#";
		 $this->links[6]="translations.php";
		 $this->links[7]="aboutme.php";
		 $this->t=8;
		
	 }
	 
function readlinks ()
{
		 return $this->links;
} 

}

?>