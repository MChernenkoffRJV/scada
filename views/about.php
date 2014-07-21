<?php
public function view($page = 'home')
{
/*
    echo APPPATH.'/views/'.$page.'.php'
	if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
*/
	$data['title'] = ucfirst($page); // Capitalize the first letter

	$this->load->view('header', $data);
	$this->load->view(.$page, $data);
	$this->load->view('/footer', $data);

}
?>
	