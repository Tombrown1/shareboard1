<?php
    class UserModel extends Model{
        public function register(){
             //Sanitize String       
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $password = md5($post['password']);      
      if($post['submit']){
          if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
              messages::setMsg('Please Fill in all Fields', 'error');
              return;
          }
         // die('SUBMITTED'); Use die function to check if the it actually submit to the DB !
          // Insert into mysql
          $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
          $this->bind(':name', $post['name']);
          $this->bind(':email', $post['email']);
          $this->bind(':password', $password);
          $this->execute();
          // Verify
          if($this->lastinsertid()){
              // Redirect
              header('Location: ' . ROOT_URL. 'php.dev/users/login');
          }
      }
      return;
        }

        public function login(){            
         // Sanitize Login
         $post = filter_input_array(INPUT_POST,  FILTER_SANITIZE_STRING);
         $password = md5($post['password']);

         $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
         $this->bind('email', $post['email']);
         $this->bind('password', $password);

         $row = $this->single();
         if($row){           
             $_SESSION['is_logged_in'] = true;
             $_SESSION['user_data'] = array(
                 "id" => $row['id'],
                 "name" => $row['name'],
                 "email" => $row['email']
             );
             header('Location: '.ROOT_URL.'php.dev ');
         }else{
            messages:: setMsg('Incorrect Login', 'error');
         }
         return;
        }
    }
?>