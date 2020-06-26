<?php
    class Home extends controller{
        protected function index(){
            $viewmodel = new HomeModel();
            $this->ReturnView($viewmodel->index(), true);

        //echo "HOME/INDEX";
        }
    }


?>