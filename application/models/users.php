<?php
class Users extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        $query = $this->db->from('users')->get();
        return $query->result();
    }

    function getByEmail($email)
    {
        $query = $this->db->from('users')->where('email',$email)->get();
        if ($query->num_rows() > 0)
		{
		   $row = $query->row_array(); 
		   return $row['id'];
		}
		return false;
    }

    function getById($id)
    {
        $query = $this->db->from('users')->where('id',$id)->get();
        if ($query->num_rows() > 0)
		{
		   $row = $query->row_array(); 
		   return $row['id'];
		}
		return false;
    }

    /**
	 * save user
	 *
	 * @param array $data entry data
	 *
	 * @return array
	 */
	public function save($data)
	{
		$this->db->insert('users', $data);

		return $this->db->insert_id(); 
	}

}

?>