<!DOCTYPE html>
<html lang="Pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Receitas</title>
</head>
<body>

    <?php 

        $receitas = [

            
            "Pamonha",
            "Limonada",
            "Macarronada",
        ]; 
    ?>

    <header>
        <h1>
            <?php 
                echo "Receitas"        
            ?>
        </h1>
    </header>

    <hr>

    <main>
        <ul>      
            <?php 
                  foreach ($receitas as $receita){
                    if ($receita == "Limonada"){
            ?>
                <li>
                    <h2><?=$receita?></h2>
                </li>

            <?php 
            }
                elseif ($receita == "Macarronada"){  
            ?>
                <li>
                    <h2><?=$receita?></h2>
                </li>
            <?php 
            }
            };         
               ?>
                 
        </ul>
    </main>

    <hr>

    <footer>

    </footer>
    
    
    
</body>
</html>