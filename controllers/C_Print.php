<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//

class C_Print extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $bemorInfo;
	//$article = new Article();
	//
	//
	function __construct()
	{		
	}
	
	//
	//
	protected function OnInput()
	{
            $this->id = $_SESSION['uid'];
            
            parent::OnInput($this->active = 'edit/');
            $this->title = 'Âñå áîëüíûå';    
			
			if (isset($_GET['id']))
				$this->bemorInfo = getBemorInfo($_GET['id']);

	}
	
	//
	// Ð’Ð¸Ñ€Ñ‚ÑƒÐ°Ð»ÑŒÐ½Ñ‹Ð¹ Ð³ÐµÐ½ÐµÑ€Ð°Ñ‚Ð¾Ñ€ HTML.
	//	
	protected function OnOutput()
	{
            $vars = array('bemor' => $this->bemorInfo,'type'=>$_GET['type']);		
            $this->content = $this->Template('components/edit/export.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
