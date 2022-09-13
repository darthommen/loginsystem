<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpel lommeregner</title>
</head>
<body>
  <nav>
    <ul>
        <li><a href="index.html">Forside</a></li>
        <li><a href="Lommeregner.html">Simpel lommeregner</a></li>
    </ul>
  </nav>

  <form>
    Value 1: <input type="text" id="value1">
    Value 2: <input type="text" id="value2">
    Operator:
    <select id="operator">
        <option value="add">Plus</option>
        <option value="min">Minus</option>
        <option value="gan">Gange</option>
        <option value="div">Divider</option>
    </select>
    <button type="button" onclick="calc()">Beregn</button>
  </form>

  <div id="result"></div>

</body>
<script src="main.js"></script>
</html>