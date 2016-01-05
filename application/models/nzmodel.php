<?
class NZModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function tableName(){
        	return "";
        }

        public function get_last_ten_entries()
        {
                $query = $this->db->get($this->tableName(), 10);
                return $query->result();
        }

        public function insert()
        {
                $this->db->insert($this->tableName(), $this);
        }

        public function update()
        {
                $this->db->update($this->tableName(), $this, array('id' => "0"));
        }

}