<?php
Class FlashNews extends CI_Model
{
   private $flash_new= 'flash_news';
 
    function Flashnews(){
        parent::Model();
    }
    // get number of persons in database
    function count_news_all(){
        return $this->db->count_all($this->flash_news);
    }
    // get persons with paging
    function get_news_paged_list($limit = 10, $offset = 0){
        $this->db->order_by('id','asc');
        return $this->db->get($this->flash_news, $limit, $offset);
    }
    // get person by id
    function get_news_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->flash_news);
    }
    // add new person
    function save_news($person){
        $this->db->insert($this->flash_news, $flash_news);
        return $this->db->insert_id();
    }
    // update person by id
    function update_news($id, $){
        $this->db->where('id', $id);
        $this->db->update($this->flash_news, $flash_news);
    }
    // delete  by id
    function delete_news($id){
        $this->db->where('id', $id);
        $this->db->delete($this->flash_news);
    }

}
?>