<?php
    include('class_hello.php');
    class meteo extends hello{
        public function temps(){
            $meteo = "Il fait beau aujourdh'ui";

            return $meteo;
        }
    }

?>