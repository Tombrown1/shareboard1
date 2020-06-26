<?php
//include '../classes/model.php';
class ShareModel extends Model{
    public function index(){
        $this->query('SELECT * FROM shares ORDER BY created_date DESC');
        $rows = $this->resultSet();
       return $rows;       
    }

    public function add(){ 
        //Sanitize String       
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
        if($post['submit']){
            if($post['title'] == '' || $post['body'] =='' || $post['link'] == ''){
                messages::setMsg('Please fill in all fields', 'error');
                return;
            }
            // Insert into mysql
            $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);
            $this->execute();
            // Verify
            if($this->lastinsertid()){
                // Redirect
                header('Location: ' . ROOT_URL. 'php.dev/shares');
            }
        }
        return;
    }
}