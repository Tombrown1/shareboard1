<?php
    class shares extends controller{
        protected function index(){
            $viewmodel = new ShareModel();
            $this->returnView($viewmodel->index(), true);  
    }

        protected function add(){
            if(!isset($_SESSION['is_logged_in'])){
                header('Location: '.ROOT_URL.'php.dev/shares ');  
            }
            $viewmodel = new ShareModel();
            $this->returnView($viewmodel->add(), true);
}
    }
?>