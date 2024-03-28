<?php
// Exemplo de requisição que adiciona multiplos recebimentos a uma caixa postal
require_once __DIR__ . '/vendor/autoload.php';

#use Dotenv\Dotenv;
use GuzzleHttp\Client;

require_once 'Cliente.php';

$clienteNome = $_POST['clienteNome'];
$clienteEmail = $_POST['clienteEmail'];

#$dotenv = Dotenv::createImmutable(__DIR__);
#$dotenv->load();

$login = 'carloskdu@itepbrasil.net';
$senha = 'Learning@2023';

$kinghost = new Cliente($login, $senha);

$param = array(
    'clienteTipo' => 'F',
    'clienteCPFCNPJ' => '045.694.330-73',
    'clienteEmpresa' => 'NomeEmpresa',
    'clienteNome' => $clienteNome,
    'clienteEmail' => $clienteEmail,
    'clienteEmailCobranca' => $clienteEmail,
    'clienteSenhaPainel' => '654321',
    'clienteFone' => '555100000000',
    'clienteFax' => '555100000001',
    'clienteCEP' => '44587421',
    'clienteEndereco' => 'ruanome',
    'clienteBairro' => 'meubairro',
    'clienteCidade' => 'porto alegre',
    'clienteEstado' => 'rs',
    'clienteLimiteMapeamento' => '1',
    'clienteLimiteSubdominio' => '2',
    'clienteLimiteMysql' => '3',
    'clienteLimiteMssql' => '1',
    'clienteLimitePgsql' => '1',
    'clienteLimiteFirebird' => '1',
    'clienteLimiteFTPADD' => '1',
    'clienteUniBox' => 'on',
    'clienteAcessoFTP' => 'on',
    'clienteAcessoDownloadBackup' => 'on'
);

$r = $kinghost->addClientes($param);

var_dump($_POST);

var_dump($r);
?>