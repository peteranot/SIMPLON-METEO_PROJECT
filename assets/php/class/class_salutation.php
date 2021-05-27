<?php
    include('class_meteo.php');
    class salut extends meteo{
        public function salutation($prenom){
            $prenom = $prenom;


            $hello = $this->bonjour();
            $meteo = $this->temps();

            $phrase = $hello." ".$prenom." ".$meteo;
            return json_encode($phrase);
        }
    }

?>