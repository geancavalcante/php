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

            "limonada" => [

                "nome da receita" => "limonada",

                "ingredientes" => [
                    "2 Limões", 
                    "300 ML de Água",
                    "3 colheres de açucar"
                ],

            ],

            "macarronda" => [

                "nome da receita" => "macarronda",


                "ingredientes" => [

                    "1 litro de água", 
                    "Sal a gosto", 
                    "1 pouco de óleo",
                    "1 pouco de óleo",
                    "Coentro",
                    "1 lata de milho verde e ervilha",
                    "Queijo ralado",
                    "1 pacote de macarrão parafuso",
                    "Frango cozido desfiado",
                    "1 colher de margarina",
                    "2 tomates maduros",
                    "1 lata de extrato de tomate",
                    "Queijo",
                    "Presunto",
 
                ]
            ],          
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
            <?php foreach($receitas as $receita): ?> 
               <div>

                    <h2><?=$receita["nome da receita"]?></h2>

                    <?php foreach($receita["ingredientes"] as $ingredientes):?>
                      
                        <li><?=$ingredientes?></li>


                    <?php endforeach;?>
                    
               </div>

            <?php endforeach;?>
            
                 
        </ul>
    </main>

    <hr>

    <footer>

    </footer>
    
    
    
</body>
</html>