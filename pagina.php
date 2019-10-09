<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
        $lista = array();
        $pessoa = array('nome' =>  'Marcio', 'idade' => 25);
        $pessoa1 = array('nome' =>  'Arielton', 'idade' => 19);
        $pessoa2 = array('nome' =>  'Paulo', 'idade' => 30);

        array_push($lista, $pessoa, $pessoa1, $pessoa2);
        array_pop($lista);
        print_r($lista);

        foreach ($lista as $key => $pessoas) {
            echo "Meu nome é {$pessoas['nome']} e eu tenho {$pessoas['idade']} anos";
        }

        
    ?>
    </div>
</body>
</html>
