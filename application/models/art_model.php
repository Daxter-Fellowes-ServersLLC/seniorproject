<?php
class Art_model extends CI_Model {

    var $url   = '';
    var $description = '';
    var $addedDate    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('user_art', 10);
        return $query->result();
    }

	function get_all()
    {
       $query = $this->db->get('user_art');
	   return $query->result();
    }
	
	function get_id($id)
    {
       $query = $this->db->get_where('user_art', array('id' => $id));
	   return $query->result();
    }
	
    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
?>