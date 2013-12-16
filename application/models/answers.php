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

    function getUnAnswered($userId)
    {
    	$tables = array('award1','award2','award3','award4','award5','award6',
    		'award7','award8','award9','award10','award11','award12',
    		'award13','award14');
    	$count = 1;
    	foreach ($tables as $key => $table) {
    		$this->db->select('user_id');
			$query = $this->db->from($table)->where('user_id',$userId)->get();
			if ($query->num_rows() == 0)
			{
				return $count;
			}
			$count++;
    	}

		return false;
    }

    function getResults()
    {
    	$tables = array('award1','award2','award3','award4','award5','award6',
    		'award7','award8','award9','award10','award11','award12',
    		'award13','award14');
    	$count = 1;
    	$results = array();
    	foreach ($tables as $key => $table) {
    		$this->db->select('user_id');
			$query = $this->db->query('select vote, COUNT(*) as votes from '.$table.' group by vote having COUNT(*) >1 order by votes desc');
    		$results[] = $query;
    	}

		return $results;
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
        $query = $this->db->from($table)->where('user_id',$id)->get();
        if ($query->num_rows() > 0)
		{
		   $row = $query->row_array(); 
		   return $row['user_id'];
		}
		return false;
    }

}

?>