<?
class NZ_Model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
        public function props()
        {
                return array();
        }
        public function tableName(){
        	return "";
        }
        public function get($row=0)
        {
                if ($row == 0) {
                        $query = $this->db->get($this->tableName());
                }else{
                        $query = $this->db->get($this->tableName(), $row);
                }
                return $query->result();
        }
        public function get_by_conditions($conditions)
        {
                $query = $this->db->get_where($this->tableName(), $conditions);
                return $query->result();
        }
        public function insert()
        {
                $this->db->insert($this->tableName(), $this);
                $insert_id = $this->db->insert_id();
                return  $insert_id;
        }
        public function update_by_condition($conditions)
        {
                $this->unsetPropIfNull();
                $this->db->update($this->tableName(), $this, $conditions);
        }
        public function delete_by_conditions($conditions)
        {
                $this->db->delete($this->tableName(), $conditions);
        }
        private function unsetPropIfNull(){
                foreach ($this->props() as $key => $value) {
                        if ($this->$value == NULL) {
                            unset($this->$value);
                        }
                }
        }

}