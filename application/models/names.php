<?php
class Names extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        $query = $this->db->from('names')->order_by('name', 'asc')->get();
        return $query->result();
    }

    function getValidName($name)
    {
        $query = $this->db->from('names')->where('name',$name)->get();
        if ($query->num_rows() > 0)
		{
		   return true;
		}
		return false;
    }

}

?>