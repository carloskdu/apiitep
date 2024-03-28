<?php
// Exemplo de requisição que adiciona multiplos recebimentos a uma caixa postal
require_once __DIR__ . '/vendor/autoload.php';

#use Dotenv\Dotenv;
use GuzzleHttp\Client;

require_once 'Cliente.php';

// $clienteNome = $_POST['clienteNome'];
// $clienteEmail = $_POST['clienteEmail'];

//if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['CONTENT_TYPE'] === 'application/json') {
    // Recebe os dados JSON da requisição
    $jsonData = file_get_contents('php://input');

    // Converte os dados JSON em um array associativo ou objeto PHP
    $data = json_decode($jsonData, true); // Se o segundo parâmetro for true, ele retornará um array associativo

    // Verifica se a conversão foi bem-sucedida
    if ($data !== null) {
        // Agora você pode acessar os campos do array associativo e realizar o tratamento necessário
        $campo1 = $data['campo1'];
        $campo2 = $data['campo2'];

    }
//}
#$dotenv = Dotenv::createImmutable(__DIR__);
#$dotenv->load();

// $login = 'carloskdu@itepbrasil.net';
// $senha = 'Learning@2023';

// $kinghost = new Cliente($login, $senha);

// $param = array(
//     'clienteTipo' => 'F',
//     'clienteCPFCNPJ' => '045.694.330-73',
//     'clienteEmpresa' => 'NomeEmpresa',
//     'clienteNome' => $clienteNome,
//     'clienteEmail' => $clienteEmail,
//     'clienteEmailCobranca' => $clienteEmail,
//     'clienteSenhaPainel' => '654321',
//     'clienteFone' => '555100000000',
//     'clienteFax' => '555100000001',
//     'clienteCEP' => '44587421',
//     'clienteEndereco' => 'ruanome',
//     'clienteBairro' => 'meubairro',
//     'clienteCidade' => 'porto alegre',
//     'clienteEstado' => 'rs',
//     'clienteLimiteMapeamento' => '1',
//     'clienteLimiteSubdominio' => '2',
//     'clienteLimiteMysql' => '3',
//     'clienteLimiteMssql' => '1',
//     'clienteLimitePgsql' => '1',
//     'clienteLimiteFirebird' => '1',
//     'clienteLimiteFTPADD' => '1',
//     'clienteUniBox' => 'on',
//     'clienteAcessoFTP' => 'on',
//     'clienteAcessoDownloadBackup' => 'on'
// );

//$r = $kinghost->addClientes($param);

var_dump($jsonData);

//var_dump($param);
?>