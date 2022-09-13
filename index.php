<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="loginscript.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forside</title>
</head>
<body>
  <nav>
    <ul>
        <li><a href="index.html">Forside</a></li>
        <li><a href="Lommeregner.html">Simpel lommeregner</a></li>
        <li><a href="content.html">Indhold</a></li>

    </ul>
  </nav>

  <form>
    Brugernavn: <input type="text" id="bruger">
    Password: <input type="text" id="kode">
    
    <button type="button" onclick="login()">Login</button>
  </form>

  <div id="result"></div>
</body>
</html>