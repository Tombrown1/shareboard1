<?php

    class messages{
        public static function setMsg($text, $type){
            if($type == 'error'){
                $_SESSION['errorMsg'] = $text;
            }else{               
                $_SESSION['successMsg'] = $text;
                }
            }

            public static function display(){
                if(isset($_SESSION['errorMsg'])){
                    echo '<div class="alert-danger"> '.$_SESSION['errorMsg'].'</div>';
                    unset($_SESSION['errorMsg']);
                }

                if(isset($_SESSION['success'])){
                    echo '<div class="alert-success">'.$_SESSION['success'].'</div>';
                    unset($_SESSION['success']);
                }
            }
        }
   
?>