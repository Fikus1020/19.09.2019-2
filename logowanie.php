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
    session_start();
    var_dump($_SESSION);
    echo "<li>jestes w logowanie.php<br>";
    echo "<li>".md5('a');

    if ( isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' 
    ){
        unset( $_SESSION['zalogowany']);

    }
    if ( !isset($_SESSION['zalogowany'])) {
        ?>
        <form action="plik2.php" method="POST">
            <input type="text" name="login" placeholder="wpisz login">
            <input type="text" name="pass" placeholer="wpisz hasło">
            <input type="submit" value="zaloguj">
    </form>
    <?php
    }else{
        echo '<li>ZALOGOWANY';
        echo '<br><a href="logowanie.php?akcja=wyloguj">WYLOGUJ</a>';
    }
    ?>

        <h3>MENU</h3>

        <ul>
            <li><a href="plik2.php">plik2</a>
        </ul>

    
    
    
</body>
</html>