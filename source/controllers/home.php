<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {




  public function _remap()
  {
    $seg1 = $this->uri->segment(1);
    $seg2 = $this->uri->segment(2);
    $seg3 = $this->uri->segment(3);
    $seg4 = $this->uri->segment(4);
    $page_data = array();

    switch($seg1){
      case '404':       $page_data = $this->error_404(); break;
      case 'register':  $page_data = $this->register_page(); break;
      case 'login':  $page_data = $this->login_page(); break;
      default:          $page_data = $this->index();
    }

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $this->output->set_output( $this->custom_json->encode( $page_data ) );
    } else {
      $this->load->view('home/home_container', $page_data);
    }
  }
/* ------------------------------------------  */
  public function error_404()
  {
    echo "Error";
  }

/* ------------------------------------------  */

  public function index()
  {
    $content_data = $page_data = array();

    $page_data['content'] = $this->load->view('home/home_landingpage', $content_data, TRUE);


    $page_data['system_title'] = $this->lang->line('system_title');
    $page_data['intro'] = $this->lang->line('description');
    $page_data['keywords'] = $this->lang->line('keywords');
    $page_data['company'] = $this->lang->line('company');
    $page_data['base_url'] = SERVER_URL;
    $page_data['system_feedback'] = 'SUCCESS';
    return $page_data;
  }
/* ------------------------------------------  */
  function login_page()
  {
    $content_data = $page_data = array();

    $page_data['content'] = $this->load->view('home/login_page', $content_data, TRUE);


    $page_data['system_title'] = $this->lang->line('system_title') . " Login";
    $page_data['intro'] = $this->lang->line('description');
    $page_data['keywords'] = $this->lang->line('keywords');
    $page_data['company'] = $this->lang->line('company');
    $page_data['base_url'] = SERVER_URL;
    $page_data['system_feedback'] = 'SUCCESS';
    return $page_data;
  }
/* ------------------------------------------  */
  function register_page()
  {
    $content_data = $page_data = array();

    $page_data['content'] = $this->load->view('home/register_page', $content_data, TRUE);


    $page_data['system_title'] = $this->lang->line('system_title') . " Registration";
    $page_data['intro'] = $this->lang->line('description');
    $page_data['keywords'] = $this->lang->line('keywords');
    $page_data['company'] = $this->lang->line('company');
    $page_data['base_url'] = SERVER_URL;
    $page_data['system_feedback'] = 'SUCCESS';
    return $page_data;
  }

/* ------------------------------------------  */
}  // end of class


