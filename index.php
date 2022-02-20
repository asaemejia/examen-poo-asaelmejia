<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen de poo</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="texto">
            <input type="string" name="texto"
id="texto">
           <input type="submit"
volue="enviar">
</form>

<?php
$texto="";
echo"<br>";
$texto=($_POST["texto"]);

//echo texto

echo"<br>";
echo"<table border=1>";
echo"<td>", "texto ingresado:","</td>";
echo"<td>",$texto, "</td>";
echo"</tr>";

echo"<td>","Texto en mayusculas:","</td>";
echo"<td>",strtoupper ($texto), "</td>";
echo"</tr>";

echo"<td>","Total de caracteres:", "</td>";
echo"<td>", strlen($texto), "</td>";
echo"</tr>";

echo"<td>","Texto invrtido:","</td>";
echo"<td>", strrev ($texto), "</td>";
echo"</tr>";

echo"<td>"; 
" Mostrando un caracter por linea:";"</td>";
$texto_div=str_split($texto);
for($i=0; $i<count($texto_div);$i++) {
    echo"</tr>";
    echo"<td>",$texto_div[$i], "</td>";
    echo"</tr>";
}

echo"</table>"

?>           
</body>
</html>