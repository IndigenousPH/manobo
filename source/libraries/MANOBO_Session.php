<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MANOBO_Session extends CI_Session {

  private $UMS;

/************************************************/
/************************************************/

  public function __construct()
  {
    parent::__construct();


    $this->CI->output->set_header("HTTP/1.0 200 OK");
    $this->CI->output->set_header("HTTP/1.1 200 OK");
    $this->CI->output->set_header("Expires: Sat, 1 Jan 2005 00:00:00 GMT");
    $this->CI->output->set_header("Last-Modified: ".gmdate( "D, d M Y H:i:s")."GMT");
    $this->CI->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
    $this->CI->output->set_header("Cache-Control: post-check=0, pre-check=0");
    $this->CI->output->set_header("Pragma: no-cache");



    if ( $this->trap_action_public() ) {
      return TRUE;
    }


    $this->check_session();
    $this->trap_action_private();

  }

/************************************************//************************************************/
  function trap_action_public() {
    $seg1 = $this->CI->uri->segment(1);
    $seg2 = $this->CI->uri->segment(2);
    $seg3 = $this->CI->uri->segment(3);
    $seg4 = $this->CI->uri->segment(4);



    if( $seg1=='img' ) return TRUE;  // img url
    if( $seg1=='api' ) return TRUE; // api

    if( $seg1=='home' && $seg2=='javascript' ) return TRUE; // javascript

    if($this->CI->config->item('T12_MAINTENANCE')) {
      if( $seg1=='home' && $seg2=='maintenance' ) {
        return TRUE;
      } else {
        redirect('/home/maintenance');
      }
    }


    if( $this->CI->uri->rsegment(1)=='home' && (!$seg2) ) {
      return TRUE;
    }


    if( $seg1=='register' ||  $seg1=='login' || $seg1=='recovery' ) {
      //$this->sess_destroy();
      //$this->sess_create();
      return TRUE;
    }


    if( $seg1=='home' && $seg2=='map' ) {
      return TRUE;
    }

    if( $seg1=='home' && $seg2=='login' ) {
      return TRUE;
    }


    if( $seg1=='auth' && $seg2=='login' ) {
      $this->sess_destroy();
      $this->sess_create();
      return TRUE;
    }

    if( $seg1=='auth' && $seg2=='logout' ) {
      $this->sess_destroy();
      $this->sess_create();
      return TRUE;
    }

    if( $seg1=='auth' && $seg2=='genpw' ) {
      // generate password
      return TRUE;
    }

    if( $seg1=='auth' && $seg2=='register' ) {
      return TRUE;
    }

    if( $seg1=='auth' && $seg2=='reset' ) {
      return TRUE;
    }


    if( $seg1=='page' ) {
      return TRUE;
    }

    if( $seg1=='blog' ) {
      return TRUE;
    }

    if( $seg1=='xmlrpc' ) {
      return TRUE;
    }


    if( ($this->CI->uri->total_segments()==1)
          && ($this->CI->uri->rsegment(1) == 'main') ) {
      // allow if default landing page of user and app profile
      return TRUE;
    }

    if( ($this->CI->uri->rsegment(1) == 'main')
        && ($this->CI->uri->segment(2) == 'home') ) {
      // allow if default landing page of user and app public page
      return TRUE;
    }
    if( ($this->CI->uri->rsegment(1) == 'main')
        && ($this->CI->uri->segment(2) == 'address') ) {
      // allow if default landing page of user and app public page
      return TRUE;
    }


    return FALSE;

  }

/************************************************/
  function check_session() {

    //check if session exist
    if ( !( $UMS['session_id'] = $this->userdata('session_id') ) ) {
      $this->sess_destroy();
      $this->sess_create();


      $this->go_login();
    }


    if ( !( $UMS['username'] = $this->userdata('username') )
      OR !( $UMS['username_uuid'] = $this->userdata('username_uuid') ) ) {

      $this->go_login();
    }



    return true;
  }

/************************************************/
  function trap_action_private() {

    $seg1 = $this->CI->uri->segment(1);
    $seg2 = $this->CI->uri->segment(2);
    $seg3 = $this->CI->uri->segment(3);
    $seg4 = $this->CI->uri->segment(4);



  }

/************************************************/


  function go_login() {

    $CI =& get_instance();
    $CI->load->library('custom_json');



    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $json = array();
      $json['t12_message'] = "Authentication Required.";
      $json['t12_status'] = "FAILED";
      echo $CI->custom_json->encode($json);
      die('');
    }

    redirect('/');

  }

/************************************************/
  function go_landing_page() {

    redirect('/');
  }



/************************************************/
/************************************************/
}
