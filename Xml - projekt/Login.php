<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css.css" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
    <nav>
            <ul>
                <li><a href="Index.html">Početna</a></li>
                <li><a href="Ponuda.html">Ponuda</a></li>
                <li><a href="Kontakt.html">Kontakt</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav><br><br>
        <hr>
        <form action="" method="post" class="forma">
            <br>
            Korisnički račun: <input type="text" id="name" name="username"><br><br>
            Lozinka: <input type="password" id="password" name="password" placeholder="*********"><br><br>
            <input type="submit" name="submit" value="login">
        </form>
        <?php

$username="";
$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ans = $_POST;

    if (empty($ans["username"])) {
        echo "Korisnički račun nije unesen.";
    }
    elseif (empty($ans["password"])) {
        echo "Lozinka nije unesena.";
    }
    else {
        $username = $ans["username"];
        $password = $ans["password"];

        provjera($username, $password);
    }
}

function provjera($username, $password) {

    $xml = simplexml_load_file("Korisnici.xml");

    foreach ($xml -> Korisnik as $usr) {
        $usrn = $usr -> username;
        $usrp = $usr -> password;
        $usrime = $usr -> ime;
        $usrprezime = $usr -> prezime;

        if ($usrn == $username){
            if ($usrp == $password){
                echo "Prijavljeni ste kao $usrime $usrprezime";
                return;
            }
        else{
            echo "Netočna lozinka";
            return;
            }
        }
    }

    echo "Korisnik ne postoji.";
    return;
}

?>
        <footer>
            &copy; JAN KOKOT - 2022.
        </footer>
    </body>
</html>

