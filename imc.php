<?php
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        {
          $imc = $peso / ($altura * $altura);
            if ($imc < 17) {
                $tipoDePeso = "Muito abaixo do peso";
            } elseif ($imc >= 17 && $imc < 18.49) {
                $tipoDePeso = "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 24.99) {
                $tipoDePeso = "Peso normal";
            } elseif ($imc >= 25 && $imc < 29.99) {
                $tipoDePeso = "Acima do peso";
            } elseif ($imc >= 30 && $imc < 34.99) {
                $tipoDePeso = "Obesidade tipo 1";
            } elseif ($imc >= 35 && $imc < 39.99) {
                $tipoDePeso = "Obesidade tipo 2 (severa)";
            } else {
                $tipoDePeso = "Obesidade tipo 3 (mórbida)";
            }
            echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";
            echo "<p>Seu peso é: $tipoDePeso</p>";
        }
    ?>