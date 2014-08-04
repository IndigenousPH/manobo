<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model {






/******************************************************************************/
/******************************************************************************/
  function __construct()
  {
    parent::__construct();



  }




/******************************************************************************/
  public function get_page($page_name = '')
  {
    if(!$page_name) return false;


    $this->db->where('page_name', $page_name );
    $this->db->limit('1');

    $query = $this->db->get('cms_pages');

    if ($query->num_rows() > 0)
    {
      $result = $query->row_array();
      $this->page_counter($result['uuid']);
      return $result;
    }

    return $query->num_rows();
  }





/******************************************************************************/
  function page_counter($page_uuid = "", $value = "")
  {
    if(!$page_uuid) return false;

    if(is_numeric($value)) {
      $this->db->set('views', $value);
    } else {
      $this->db->set('views', ' views+1 ', FALSE);
    }
    $this->db->where("uuid", $page_uuid);
    $this->db->update('cms_pages');

    return true;
  }


/******************************************************************************/
/******************************************************************************/
  function save_page_cache($name, $file, $data)
  {
    if( !( $name = @strtolower( trim($name) ) ) ) return false;
    if( !( $file = @strtolower( trim($file) ) ) ) return false;
    if(!$data) return false;

    $filename_path = $this->config->item('MANOBO_CACHE_PATH') ."/pages";

    $this->load->helper('file');

    @mkdir( $filename_path ."/".$name[0] , 0777, false);  // create group folder
    @mkdir( $filename_path ."/".$name[0]."/".$name, 0777, false);   // create name folder

    write_file( $filename_path . "/" . $name[0] . "/". $name . '/' . $file , serialize($data) );

    return true;
  }
/******************************************************************************/
  function read_namespace_cache($name, $file)
  {
    if( !( $uuid = @strtolower( trim($name) ) ) ) return false;
    if( !( $file = @strtolower( trim($file) ) ) ) return false;

    $filename_path = $this->config->item('MANOBO_CACHE_PATH') ."/pages/".$name[0]."/".$name;

    $this->load->helper('file');
    if( !( $data = read_file( $filename_path . '/' . $file ) ) ) return false;

    $data =  unserialize( $data );

    return $data;
  }




/******************************************************************************/
/******************************************************************************/
}
