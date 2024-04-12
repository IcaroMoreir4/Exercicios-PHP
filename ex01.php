<?php
    // Crie uma página simples em PHP que exiba a data e hora atual e uma mensagem de saudação personalizada baseada na hora do dia (bom dia, boa tarde, boa noite).

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');
    $hora = date('H:i');

    if ($hora >= "05:00" && $hora <= "11:59") {
        echo "São $hora, Bom dia! A data de hoje é $data.";
    } elseif ($hora >= "12:00" && $hora <= "16:59") {
        echo "São $hora, Boa tarde! A data de hoje é $data.";
    } else{
        echo "São $hora, Boa noite! A data de hoje é $data.";
    }
?>