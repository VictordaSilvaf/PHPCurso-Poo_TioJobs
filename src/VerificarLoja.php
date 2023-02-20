<?php
declare(strict_types=1);

namespace App;

class VerificarLoja
{
    public static function situacao(string $dia): string
    {
        if (empty($dia)) {
            return 'Loja fechada';
        }

        $diasFechados= ['sexta', 'sabado', 'domingo'];

        $estaAberta = !in_array($dia, $diasFechados, $testarFormaEstrita = true);

        if (!$estaAberta) {
            return 'Loja Fechada';
        }

        return 'Loja Aberta';
    }
}