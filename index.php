<html>
	<head>
		<!-- TITRE -->
        <title>Projet METEO</title>

        <!-- JVSCRIPT -->
        <script src="assets/js/jquery.js"></script>
		<script language="javascript">


            // html chargement fini
            // executer 
            $(document).ready(function(){
                
                $('#btnPrompt').click(function(){
                    var info_prompt = prompt("Saisissez votre prénom ",""); //boite prompt
                    getPrenom(info_prompt); //fonction getPrenom qui recupere la valeur saisie dans le prompt
                })

                $('#btnVider').click(function(){
                    $('#affiche').empty(); //vider le contenue de #affiche
                })

            })


            function getPrenom(data_res){ 
                //ajax
                $.ajax({
                    type: 'post',  //method POST
                    url: 'assets/php/ajax.php', //renvoie les données dans ajax.php
                    data: {
                        'reponse': data_res  //reponse -> contient la valeur recuperer par la fonction getPrenom et envoyer dans ajax.php
                    },
                    datatype: 'json', //les données sont de type json
                    success: function(data) { //si cela fonctionne avec success
                        $('#affiche').append(data); //afficher dans #affiche le resultat de 'data'
                    }
                });
            }

        </script>
	</head>
	
	<body>
        <input type="submit" id="btnPrompt" value="Ouvrir le pompt"/>
        <input type="submit" id="btnVider" value="vider"/>
        
        <div id="affiche">
                        
        </div>
	</body>
</html>