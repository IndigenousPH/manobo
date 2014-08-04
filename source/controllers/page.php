<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {


  public function _remap()
  {
    $seg1 = $this->uri->segment(1);
    $seg2 = $this->uri->segment(2);
    $seg3 = $this->uri->segment(3);
    $seg4 = $this->uri->segment(4);


    $page_data =  array();

    //if(!$this->session->userdata('username_uuid') || !$this->session->userdata('username')) return false;

    switch($seg2){
      case 'list': $page_data = $this->list_pages(); break;
      default: $page_data = $this->page_view(); break;
    }


    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $this->output->set_output( $this->custom_json->encode( $page_data ) );
    } else {
      $this->load->view('home/home_container', $page_data);
    }
    return true;
  }

/************************************************//************************************************/
  function page_view()
  {
    $page_data = $content_data = array();
    $this->load->model('Page_model');

    $page_name = trim($this->uri->segment(2));

    $page_data = $this->Page_model->get_page($page_name);

    $return = array();

    if($page_data){
      $content_data['page_title'] = @trim($page_data['title']);
      $content_data['page_date'] = @trim($page_data['datetime_published']);
      $content_data['page_author'] = @trim($page_data['author_name']);
      $content_data['page_views'] = @trim($page_data['views']);
      $content_data['page_teaser'] = @trim($page_data['teaser']);
      $content_data['page_body'] = @trim($page_data['body']);
      $content_data['page_tags'] = @explode(",", $page_data['tags']);
    } else {
      $content_data['page_title'] = "Ooops!";
      $content_data['page_date'] = date('Y-m-d H:i:s');
      $content_data['page_author'] = "admin@mbtc.ph";
      $content_data['page_body'] = "Ring-ding-ding-ding-dingeringeding!<br /><br />Gering-ding-ding-ding-dingeringeding!<br /><br />Gering-ding-ding-ding-dingeringeding!<br /><br />What the fox say?";
    }

    $return['system_title'] = $content_data['page_title'];
    $return['intro'] = @($content_data['page_teaser']);
    $return['base_url'] = SERVER_URL."/".$this->uri->uri_string();

    $return['content'] = $this->load->view('page/page_view', $content_data, TRUE);
    $return['system_feedback'] = "SUCCESS";

    return $return;
  }
/************************************************/
  function list_pages()
  {
    $this->load->model('Page_model');


    return array('system_feedback' => 'SUCCESS', 'content' => "list");
  }

/************************************************//************************************************/
/************************************************//************************************************/
}
