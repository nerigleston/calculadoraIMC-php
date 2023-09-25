<!DOCTYPE html>
<html>

<head>
  <style>
    h2 {
      color: #fff;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 40px;
      border-radius: 5px;
    }

    body {
      background-size: cover;
      background-attachment: fixed;
      background-image: url(./gettyimages-641963334-612x612.jpg);
    }

    h2,
    p {
      background-color: rgba(0, 0, 0, 0.5);
    }
  </style>
</head>

<body>
  <?php
  $peso = $_POST["peso"];
  $altura = $_POST["altura"];

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

  echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</p> Seu peso é: $tipoDePeso </h2>";
  ?>
</body>

</html>