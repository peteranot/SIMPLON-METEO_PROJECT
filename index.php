<html>
	<head>
		<!-- TITRE -->
        <title>Projet METEO</title>

        <!-- JVSCRIPT -->
        <script src="assets/js/jquery.js"></script>
		<script language="javascript">


            // html chargement finish
            // executer 
            $(document).ready(function(){
                
                $('#btnPrompt').click(function(){
					//open prompt
                    var info_prompt = prompt("Saisissez votre prénom ",""); 
					//function getPrenom get value prompt
                    getPrenom(info_prompt); 
                })

                $('#btnVider').click(function(){
					//clear #affiche
                    $('#affiche').empty(); 
                })

            })


            function getPrenom(data_res){ 
                //ajax
                $.ajax({
					//method POST
                    type: 'post',  
					//return data in ajax.php
                    url: 'assets/php/ajax.php', 
                    data: {
						
                        'reponse': data_res  
                    },
					//json format
                    datatype: 'json', 
					//sucess
                    success: function(data) { 
						//show
                        $('#affiche').append(data); 
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