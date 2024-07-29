<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Definición de constantes
define("PI", 3.14159);
define("NOMBRE_SITIO", "Mi Sitio Web");
define("COLOR_PRINCIPAL", "#333333");

// Uso de las constantes
echo "El valor de PI es: " . PI . "<br>";
echo "El nombre del sitio es: " . NOMBRE_SITIO . "<br>";
echo "El color principal es: " . COLOR_PRINCIPAL;
?>

<?php
class MyClass {
    const CONSTANT = 'value';
}

echo MyClass::CONSTANT; // Imprime 'value'
?>
</body>
</html>