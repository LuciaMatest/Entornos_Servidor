<?
    interface DAO{
        public function findAll();
        public function findById($id);
        public function delete($id);
        public function insert();
        public function update($objeto);
    }
?>