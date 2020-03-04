<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <main class="m-4">


        <?php echo  "hello " . "<br>";
        ?>

        <?php
        // $dbh = new PDO();
        // $count = $dbh->exec("INSERT INTO users VALUES ('Aragorn', 'leGondor@terredumilieux.tolk', 'sddsde', 1 );");
        // "INSERT INTO users VALUES ('Aragorn', 'leGondor@terredumilieux.tolk', 'sddsde', 1 );"

        ?>

        <form action="" method="POST" class="m-4">
            <div class="form-group ">
                <label for="exampleInputName">Nom</label>
                <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
            </div>
            <div class="form-group ">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <?php

        require('config.php');

        // $sql = "SELECT users.name, messages.content FROM users, messages WHERE users.idUsers = messages.Users_idUsers ";
        $sql = "SELECT users.name, messages.content FROM users INNER JOIN messages ON users.idUsers = messages.Users_idUsers ";
        $res_select = $db_connect->query($sql);
        $resLine = $res_select->fetchall();

        // Boucle de récupération des messages et du nom de l'auteur

        $resLineCount = count($resLine);

        // affiche les 10 premiers posts
        for ($i = 0; $i < 10; $i++) {
            echo $resLine[$i]["content"];
        ?>
            <br>
            <br>
            <?php
            echo $resLine[$i]["name"];
            ?>
            <br>
            <br>
        <?php
        }

        ?>







    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

</html>