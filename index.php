<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>
</head>
<body>

    <header>
        <section>
            <h1>
                <?php 

                    $nome_completo =  "Gean Feitosa Cavalcante";
                    echo $nome_completo;

                    $sobre_mim = "Sobre min";
                ?>
            </h1>
        </section>
    </header>

    <hr>

    <main>
        <section>

            <h2><?=$sobre_mim?></h2>

            <p>
                <b>
                    <?php 
                        
                        echo "Nome completo: " . $nome_completo;
                    ?>
                </b>

     
            </p>

            <p>
                <b>
                    <?php 

                        $endereço = "Rua Isóciles, 10, Alto bonito. Imperatriz-MA";
                        echo "Endereço: " . $endereço;
                    ?>
                </b>


                
            </p>

            <p>
                <b>
                    <?php 
                        $idade = 19;
                        echo "Idade: " . $idade ;
                    ?>
                </b>

            </p>

        </section>


    </main>
 


       
    
</body>
</html>