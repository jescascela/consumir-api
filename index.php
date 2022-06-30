<?php

// Inicia uma sessão cURL
$ch = curl_init();

// Define os parâmetros da requisição
curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/pikachu");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = json_decode(curl_exec($ch));

curl_close($ch);

// var_dump($response);

// Este campo pode ser acesso diretamente
echo "Nome: " . $response->name . "<br><br>";

echo "MOVIMENTOS<br><br>";

/*  
    Neste caso, o campo 'moves' possui 96 itens
    onde cada um é um objeto do tipo 'move',
    por isso, para cada laço de repetição, acessamos o objeto move
    e depois acessamos o campo name
*/
foreach($response->moves as $move)
{
    // var_dump($move);
    echo $move->move->name . "<hr>";
}