<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {




  public function _remap()
  {
    $seg1 = $this->uri->segment(1);
    $seg2 = $this->uri->segment(2);
    $seg3 = $this->uri->segment(3);
    $seg4 = $this->uri->segment(4);


    switch($seg2){
      default: $this->index();
    }
  }

/* ------------------------------------------  */

  public function index()
  {
    $page_data = array();

    $page_data['system_title'] = $this->lang->line('system_title');
    $page_data['intro'] = $this->lang->line('description');
    $page_data['keywords'] = $this->lang->line('keywords');
    $page_data['company'] = $this->lang->line('company');
    $page_data['base_url'] = SERVER_URL;



    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $this->output->set_output( json_encode( $page_data ) );
    } else {
      $this->load->view('home/home_container', $page_data);
    }

  }


/* ------------------------------------------  */
}  // end of class


