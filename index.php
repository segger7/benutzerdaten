<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benutzerdaten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Benutzerdaten anzeigen</h1>

    <form action="index.php" method="post">
        <div class="col-sm-4 form-group">
            <label for="suche">Suche:</label>
            <input type="text" name="suche" class="form-control">
            <input type="submit" name="submit" value="Suchen" class="btn btn-primary btn-block">
            <input type="submit" name="clear" value="Leeren" class="btn btn-primary btn-block">
        </div>
    </form>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Geburtsdatum</th>
        </tr>
        </thead>
        <tbody>
            <?php

            require "userdata.php";
            require "functions.php";

            $search_data = [];

            if(isset($_POST["clear"])) {
                $_POST = [];
            }

            if(isset($_POST["submit"])) {
                $search_data = getFilteredData($_POST["suche"]);
            } else {
                $search_data = getAllData();
            }

            foreach ($search_data as $user) {
                echo "<tr>";
                echo "<th> <a href='details.php?id= ". $user["id"] . "'>";
                echo $user["firstname"] . " " . $user["lastname"] . " </a></th>";
                echo "<th>" . $user["email"] . "</th>";
                $datum = new DateTime($user["birthdate"]);
                echo "<th>" . $datum->format("d.m.Y") . "</th>";
                echo "</tr>";
            }


            ?>

        </tbody>

    </table>

</div>


</body>
</html>