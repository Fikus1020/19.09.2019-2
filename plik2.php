<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        echo('<h1>jesteś w plik2</h1>');

        session_start();
        var_dump($_SESSION);

        if ( isset($_POST['pass']) && $_POST['pass']=='a'){
            $_SESSION['zalogowany'] = 1;
            echo '<li>ustawienie zmiennej -zalogowany- na 1';
        }

        if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']== 1){
            echo '<br>zalogowano';
            echo '<br><a href="logowanie.php?akcja=wyloguj">WYLOGUJ</a>';

        }else{
            echo '<br>NIE zalogowano';
        }
        echo "
        <h3>MENU</h3>
        
            <ul>
            <li><a href='logowanie.php'>logowanie.php</a>
            <li><a href-'plik2.php'>PLIK2</a>
            </ul>";
    ?>
    
</body>
</html>