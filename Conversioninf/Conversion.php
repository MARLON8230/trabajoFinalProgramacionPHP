<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERSOR INFORMATICO</title>
</head>
<body>
<H1> CONVERSOR DE MEDIDAS INFORMATICAS</H1>
 <p>ingrese una medida y luego selecciona la medida destino</p>
 <br>
 <form name="form1" method="POST" action="../Conversioninf/calcular.php">
<p>valor a convertir: <input type="text" id="txtvalor" name="txtvalor">
<select name="selmedidas">
    <option value="">seleccion...</option>
    <option value="tera">Terabyte</option>
    <option value="giga">Gigabyte</option>
    <option value="mega">Megabyte</option>
    <option value="kilo">Kilobyte</option>
    <option value="byte">Byte</option>
</select>
</p>

<p> convertir a la medida de:</p>

<p>
    <input type="radio" name="medidas" value="terabyte">Terabyte
<br><input type="radio" name="medidas" value="gigabyte">Gigabyte
<br><input type="radio" name="medidas" value="megabyte">Megabyte
<br><input type="radio" name="medidas" value="kilobyte">Kilobyte
<br><input type="radio" name="medidas" value="byte">Byte
</p>

<p><input type="submit" name="btncalcular" value="Calcular"></p>


</form>  


</body>
</html>