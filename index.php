<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="UTF-8">
<title>CiTIM Grupo XB</title>
<link rel="stylesheet" href="css/problemaStem.css"/>

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<script src="js/calcularStem.js"></script>
</head>
<body>
<section class="wrapper">
<header>
<h1 class="logo">Uso de la Ciencia, Tecnologia, Ingeniería y Matemáticas para resolver problemas</h1>
</header>
<section id="contenedor">
<section class="problema">
<h2>Problema: Fuerzas en equilibrio</h2>
<p>Descripción:</p>
<p>
Calcula la potencia real de una central hidroeléctrica (en CV y en KW) si el salto de agua es de 15m,
 la turbina que emplea es Kaplan de rendimiento 94% y el caudal es de 19 m³/s</p>
</section>
<section class="esquemaProblema">
<h2>Esquema</h2>
<center>
<img class="imgProblema" src="images/1.jpeg"></center>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
<h3> P real=η⋅ρ⋅g⋅Q⋅H</h3>

</section>
<section class="datos">
    <h2>Datos:</h2>

    <ul>
      <li><strong>η :</strong> 0,94</li>
      <li><strong>p:</strong> 1000 kilogramos^3</li>
      <li><strong>gramos:</strong> 94 Em^2</li>
      
      <br>
      <li><strong>Q</Q>:</strong> 19M</li>
      <li><strong>H:</strong> 15M</li>
      
    </ul>
  </section>
<section class="calculos">
<?php
function calcularResultados() {
    // Datos iniciales
    $densidad = 1000; 
    $gravedad = 9.81; 
    $caudal = 19; 
    $altura = 15; 
    $rendimiento = 0.94; 

    // Cálculo (en Watts)
    $potencia_bruta = $densidad * $gravedad * $caudal * $altura;

    // Cálculo  real (en Watts)
    $potencia_real = $potencia_bruta * $rendimiento;

    // Conversiones
    $potencia_real_kw = $potencia_real / 1000; // Conversión a kilovatios
    $potencia_real_cv = $potencia_real / 735.5; // Conversión a caballos de vapor

    // resultados
    return "Potencia real en kilovatios: $potencia_real_kw kW, Potencia real en caballos de vapor: $potencia_real_cv CV";
}
?>
<h2>Solución</h2>

<form method="post">
                <button type="submit" name="calcular">Presiona para calcular</button>
            </form>
</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA">
<?php
print"<h1>Potencia real en kW: " .calcularResultados()."/h1>"
?>
</div>
</section>
</section>
<footer class="pie">
Creative Commons versión 3.0 SciSoft 2024
</footer>
</section>
</body>
</html>