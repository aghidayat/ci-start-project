<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

    public function theme()
    {

      /************************************************
       * Set the template view to use
       *************************************************/

      // set the theme 'default_theme' is a dir name where you put your theme file
      $this->template->set_theme('default_theme');

      // set the layout 'backend' is the file name resided in application/themes/default_theme/views/layouts/
      $this->template->set_layout('frontend' . '/default');

      // load the header blocks      
      $this->template->set_partial('navigation','partials/navigation');      

      // load the header blocks
      $this->template->set_partial('header','partials/header');

      // load the footer blocks
      $this->template->set_partial('footer','partials/footer');

      return $this;
    }
}