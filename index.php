<!DOCTYPE html>
<html lang="Pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>

    <?php 

        $usuarios = [

            "Gean" => [
                "ativo" => true,
            ],

            "Usuário 2" => [

                "ativo" => false,
            ],

            "Usuário 3" => [

                "ativo" => true,
            ],

        ];


        function ListarUsuarios ($usuarios){

            foreach ($usuario as $usuarios){
                if ($usuario["ativo"]){     
        ?>       
                    <i>Usuário ativo ✅</i>

        <?php 
            } else{
        ?>
                    <i>Usuário Inativo ❌</i>

        <?php  
                }   
            }
        } 
        ?>
    
    

    
    
</body>
</html>