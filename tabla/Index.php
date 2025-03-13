<?php
ini_set("display_errors", E_ALL);
include_once "Persona.php";

$lista = [
  new Persona("Fulano", "1970-10-02", "5565768840"),
  new Persona("Mengano", "1969-11-02", "5545968840"),
  new Persona("Sutano", "1985-02-10", "5562048840"),
  new Persona("Machorro", "1975-09-12", "5565768840"),
  new Persona("Arthur", "1971-08-22", "5565768124"),
  new Persona("Chris", "1980-12-09", "5565003840"),
  new Persona("Jesus", "1983-05-02", "5565768840"),
  new Persona("Viera", "1974-01-10", "5565768840"),
  new Persona("Oswlado", "1983-08-03", "5565768840"),
  new Persona("Fulano", "1982-12-23", "5565768840"),
  new Persona("Sara", "1968-06-29", "5565768840"),
];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de personas</title>
    <style>
      td {
        background-color:yellow;
        text-decoration-color:white;
      }
      </style>
</head>
<body>
  <h1>Lista de personas</h1>
  <table border>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Fecha de nacimiento</th>
        <th>Edad Actual</th>
        <th>Telefono</th>
</tr>
</thead>
<tbody>
<?php foreach($lista as $p): ?>
<tr>
<td><?php echo $p->getNombre(); ?></td>
<td><?php echo $p->getFecNac(); ?></td>
<td><?php echo $p->calcularEdad(); ?></td>
<td><?php echo $p->getTelefono(); ?></td>
</tr>
<?php endforeach ?>
</tbody>

</table>
</body>
  </html>