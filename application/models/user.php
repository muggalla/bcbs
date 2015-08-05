<?php
Class User extends CI_Model
{

function login($username, $password)
{
		$this -> db -> select('id, username, password');
		$this -> db -> from('admin_users');
		$this -> db -> where('username = ',$username);
		$this -> db -> where('password = ', MD5($password));
		$this -> db -> limit(1);

        $query = $this -> db -> get();
		
		if($query -> num_rows() == 1)
				{
				  return $query->result();
				}
				else
				{
				   return false;
				}
		}
		
		
//////////////Flash News Model///////////////
public function set_news()
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text')
    );

    return $this->db->insert('news', $data);
}

}
?>