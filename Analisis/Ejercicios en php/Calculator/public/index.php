<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator PHP</title>
        <link rel="stylesheet" type="text/css" href="css/stylecalcu.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <div class="calcu">
        <h1>Calculator</h1><br>
        <form action="calc.php" method="get">
          <input type="number" name="number1"><br>
          <select name="operation"><br>
                <option value="">Seletect a operation</option>
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">x</option>
                <option value="4">/</option>
                <option value="5">Logaritmo</option>
                <option value="6">X^2</option>
                <option value="7">X^Y</option>
                <option value="8">√</option>
          </select><br>
          <input type="number" name="number2"><br>
            <button type="submit">Operate</button>
        </form>
       </div>
    </body>
</html>