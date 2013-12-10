<?php
class Answers extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        $query = $this->db->from('answers')->get();
        return $query->result();
    }

    function getByEmail($email)
    {
        $query = $this->db->from('answers')->where('email',$email)->get();
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
	public function save($data, $table)
	{
		$this->db->insert($table, $data);

		return $this->db->insert_id(); 
	}

	function getByUserId($id, $table)
    {
        $query = $this->db->from($table)->where('id',$id)->get();
        if ($query->num_rows() > 0)
		{
		   $row = $query->row_array(); 
		   return $row['id'];
		}
		return false;
    }

}

?>