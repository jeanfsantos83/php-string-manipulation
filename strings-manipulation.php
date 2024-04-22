<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <h1>Manipulação de Strings com PHP</h1>
    <?php 
        $nome = "Jean";
        $sobrenome = "Ferreira";
        $nome = 'Jean';
        $sobrenome = 'Ferreira';
        echo "$nome $sobrenome \u{1F596}";
        echo '$nome $sobrenome \u{1F596}';

        $nome = 'Jean';
        $sobrenome = 'Ferreira \u{1F596}';
        $sobrenome = "Ferreira \u{1F596}";
        echo "$nome $sobrenome";

        const CANAL = "Curso em Vídeo \u{1F499}";
        //const CANAL = 'Curso em Vídeo \u{1F499}';
        echo "Eu adoro o CANAL";
        echo ' Eu adoro o CANAL';
        echo " Eu adoro o " . CANAL;

        echo "Estamos no ano de date('Y')";
        echo " Estamos no ano de " . date('Y');

        $nome = "Jean";
        $sobrenome = "Ferreira";
        $apelido = "Tinho";
        echo "$nome $apelido $sobrenome";
        echo "$nome '$apelido' $sobrenome";
        echo " $nome ".$apelido." $sobrenome";
        echo " $nome \"$apelido\" $sobrenome";
        echo ' $nome \'$apelido\' $sobrenome';

        /* SINTAXE HEREDOC */
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< TESTE
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraço! \u{1F596}
        TESTE;

        /* SINTAXE NOWDOC */
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< 'TESTE'
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraço! \u{1F596}
        TESTE;
    ?>
</body>
</html>