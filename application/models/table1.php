<?
class Table1 extends NZ_Model {

        public $col1;
        public $col2;
        public $col3;

        public function __construct()
        {
                parent::__construct();
        }
        public function props()
        {
                return array('col1','col2','col3');
        }
        public function tableName()
        {
        	return "table1";
        }
}