<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Customer;
use App\PessoaFisica;
use App\PessoaEstrangeira;
use App\PessoaJuridica;
use App\Pessoas;

/* Calistenic */
/* Aula 3 ========================================================================================================*/
// dd(\Victordev\CursopooTiojobs\VerificarLoja::situacao('segunda'), \Victordev\CursopooTiojobs\VerificarLoja::situacao('domingo'));

/* Aula 5 ========================================================================================================*/


/* POO */
/* Aula 6 ========================================================================================================*/
//$pessoa = new PessoaFisica(
//    'Victor',
//    'victordasilvafernandes@gmail.com',
//    '11999999999',
//    '12345678900',
//    22
//);
//
//dd($pessoa->getInformation());

/* Aula 7 ========================================================================================================*/

//$pessoa = new PessoaFisica2(
//    'Victor',
//    22,
//    'M'
//);
//
//
//$pessoa = new PessoaFisica();
//$pessoa->name = 'Victor';
//$pessoa->age = 22;
//$pessoa->cpf = '000.000.000-09';
//
//echo $pessoa->showName();
//echo $pessoa->getCpf();

//function birthdayCakeCandles($candles)
//{
//    // Write your code here
//    print(array_count_values($candles));
//}
//
//$fptr = fopen(getenv("OUTPUT_PATH"), "w");
//
//$candles_count = intval(trim(fgets(STDIN)));
//
//$candles_temp = rtrim(fgets(STDIN));
//
//$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));
//
//$result = birthdayCakeCandles($candles);
//
//fwrite($fptr, $result . "\n");
//
//fclose($fptr);

/* Aula 12 ========================================================================================================*/
//
//function showMesaage(string $message): string
//{
//    return $message;
//}
//
//echo showMesaage('Olá mundo') . PHP_EOL;

//class Person {
//    public function greetings(string $name, float $weight, bool $maried, callable $imc): string
//    {
//        return "Olá $name, seu peso é $weight, você é casado? $maried, seu imc é {$imc()}";
//    }
//
//    public function imc(float $weight, float $height): float
//    {
//        return $weight / ($height * $height);
//    }
//}
//
//$person = new Person();
//
//echo $person->greetings('Victor', 80.5, false, fn () => $person->imc(80.5, 1.80));

/* Aula 14 ========================================================================================================*/

//$pessoa = new PessoaFisica();
//$pessoa->name = 'Victor';
//$pessoa->cpf = '000.000.000-09';
//
//
//$pessoaJ = new PessoaJuridica();
//$pessoaJ->name = 'Victor S.A';
//$pessoaJ->cnpj = '000.000.000-09';
//
//$pessoas = new Pessoas([$pessoa, $pessoaJ]);
//
//$pessoas->show();

/* Aula 15 ========================================================================================================*/
try {
    $victor = new Customer('victor', 'victordasilvafernandes@gmail.com');

    echo "Nome: {$victor->getName()}" . PHP_EOL;
    echo "Email: {$victor->getEmail()}" . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage(). PHP_EOL;
}
