<?php	

	function web_title($title){
		$ci = get_instance();
		$ci->template->title($ci->config->item('site_title'), $title); // set page title
		return $ci;
	}

	function web_build($file, $data = NULL){
		$ci = get_instance();
		$ci->template->build($file, $data);
		return $ci;
	}

	function css_url(){
		return base_url().'assets/css/';
	}

	function js_url(){
		return base_url().'assets/js/';
	}

	function send_email($email, $subject, $data=NULL, $file)
  {
    $ci = get_instance();
    //SEND EMAIL      
    $config['protocol']  = 'smtp';
    $config['mailpath']  = '/usr/sbin/smtp';
    $config['smtp_host'] = "127.0.0.1";
    $config['smtp_port'] = "1025";
    // $config['smtp_user'] = "";
    // $config['smtp_pass'] = "";
    $config['charset']   = "utf-8";
    $config['mailtype']  = "html";
    $config['newline']   = "\r\n";
    $ci->email->initialize($config);
    $ci->load->library('email', $config);
    $ci->email->set_newline("\r\n");
    
    //EMAIL SEND TO SENDER
    $dari = 'no-reply@iss.dev';
    $ci->email->from($dari, 'no-reply');
    $ci->email->to($email);
    $ci->email->subject($subject);
    $body = $ci->load->view($file, $data, TRUE);
    $ci->email->message($body);
    $ci->email->send();
    //EMAIL SEND TO SENDER
  }