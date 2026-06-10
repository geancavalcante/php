<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>
</head>
<body>
    <?php 

    $nome_completo = "Gean Feitosa Cavalcante";
    $projeto = "Meu Projeto";
    $descricao = "Meu primeiro projeto com PHP";
    $dataDoProjeto = 2024;
    $concluido = false

    ?>
    <header>

        <h1>Meu Portifóleo</h1>
        <h2><?=$nome_completo?></h2>

    </header>

    <hr>

    <main>
        <section>
            <div clas="content">
                <?=$projeto?>
                
                <div>

                    <p><?=$descricao?></p>

                    <i><?=$dataDoProjeto?></i>     
                    
                    
                    <div>
                        Status:
                        <b>
                            <?php 
                                if ($concluido){
                                    echo "<span style='color:green'>Concluído ✅​</span>";
                                } else {
                                    echo "<span style='color:red'> Não concluído ​❌ ​</span>";

                                }
                            ?>
                        </b>
                    </div>
                         
                </div>               
                <hr>

             <!-- 
                
                Essa segunda forma de condicional é mais adequado quando se faz
                necessário escrever muito HTML dentro da Pagina.

                 
                -->
                <div
                    <?php if ((2026 - $dataDoProjeto) > 2): ?>
                        style="background-color: green;"

                    <?php endif; ?>

                    <p><?=$projeto?></p>

                    <i><?=$descricao?></i>

                    <div>
                        Status:

                        <b>
                            <?php if ($concluido): ?>


                                <span style="color:green"> Concluído ✅ </span>
 
                            <?php else: ?>
                                <span style="color:red">  Não concluído ​❌ </span>


                            <?php endif; ?>
                        </b>
                    </div>
                </div>
            </div>
        </section>
    </main>
  
</body>
</html>