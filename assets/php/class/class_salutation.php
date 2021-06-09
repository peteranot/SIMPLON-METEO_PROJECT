<?php
    include('class_meteo.php');
    class salut extends meteo{
        public function salutation($prenom){
            $prenom = $prenom;

			//call function bonjour()
            $hello = $this->bonjour();
			//call function temps()
            $meteo = $this->temps();
			
			//show message 
            $phrase = $hello." ".$prenom." ".$meteo;
            return json_encode($phrase);
        }
    }

?>