<?php 
    require_once "animal.php";
    
    class cachorro extends animal{
        public function fazBarulho(): string{
            return "Au Au!!";
        }
    }
?>