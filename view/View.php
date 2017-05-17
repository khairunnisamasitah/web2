<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'tamplate/header.php';
		include_once 'tamplate/navigasi.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include_once 'tamplate/sidebar.php';
		include_once 'tamplate/footer.php';
	}
	
}

