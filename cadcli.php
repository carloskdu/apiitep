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
    //$jsonData = '{ "clienteTipo": "I", "clienteCPFCNPJ": "00112135045", "clienteEmpresa": "NomeEmpresa", "clienteNome": "Criar dominio", "clienteEmail": "djalmasilva2@fatec.com.br", "clienteEmailCobranca": "emailcobranca@dominio.com.br", "clienteSenhaPainel": "654321", "clienteFone": "555100000000", "clienteFax": "555100000001", "clienteCEP": "44587421", "clienteEndereco": "ruanome", "clienteBairro": "meubairro", "clienteCidade": "porto alegre", "clienteEstado": "rs", "clienteLimiteMapeamento": "1", "clienteLimiteSubdominio": "2", "clienteLimiteMysql": "3", "clienteLimiteMssql": "1", "clienteLimitePgsql": "1", "clienteLimiteFirebird": "1", "clienteLimiteFTPADD": "1", "clienteUniBox": "on", "clienteAcessoFTP": "on", "clienteAcessoDownloadBackup": "on" }';

    // Converte os dados JSON em um array associativo ou objeto PHP
    $data = json_decode($jsonData, true); // Se o segundo parâmetro for true, ele retornará um array associativo


    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        echo "Erro ao decodificar a string JSON: " . json_last_error_msg();
    } else {
       
            $dotenv = Dotenv::createImmutable(__DIR__);
            $dotenv->load();

            $login = 'carloskdu@itepbrasil.net';
            $senha = 'Learning@2023';

            $kinghost = new Cliente($login, $senha);

            $param = array(
                'clienteTipo' => $data['clienteTipo'],
                'clienteCPFCNPJ' => $data['clienteCPFCNPJ'],
                'clienteEmpresa' => $data['clienteEmpresa'],
                'clienteNome' => $data['clienteNome'],
                'clienteEmail' => $data['clienteEmail'],
                'clienteEmailCobranca' => $data['clienteEmailCobranca'],
                'clienteSenhaPainel' => $data['clienteSenhaPainel'],
                'clienteFone' => $data['clienteFone'],
                'clienteFax' => $data['clienteFax'],
                'clienteCEP' => $data['clienteCEP'],
                'clienteEndereco' => $data['clienteEndereco'],
                'clienteBairro' => $data['clienteBairro'],
                'clienteCidade' => $data['clienteCidade'],
                'clienteEstado' => $data['clienteEstado'],
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
            
            var_dump($r); // Exibe a estrutura de dados resultante
        }

?>