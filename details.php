<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <title>Benutzerdetails</title>
</head>
<body>

<?php

include "userdata.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$user = null;

foreach ($data as $u)
    {
        if($u['id'] == $id){
            $user = $u;
            break;
        }
    }
?>
    <h1>Benutzerdetails</h1>
        <a href="index.php" >zurück</a>
<br>
<br>


<table class="table table-bordered w-50">
    <tbody>
    <tr>
        <td>Vorname</td>
        <td><?= htmlspecialchars($user['firstname']) ?></td>
    </tr>
    <tr>
        <td>Nachname</td>
        <td><?= htmlspecialchars($user['lastname']) ?></td>
    </tr>
    <tr>
        <td>Geburtsdatum</td>
        <td><?= htmlspecialchars($user['birthdate']) ?></td>
    </tr>
    <tr>
        <td>E-Mail</td>
        <td><?= htmlspecialchars($user['email']) ?></td>
    </tr>
    <tr>
        <td>Telefon</td>
        <td><?= htmlspecialchars($user['phone']) ?></td>
    </tr>
    <tr>
        <td>Straße</td>
        <td><?= htmlspecialchars($user['street']) ?></td>
    </tr>
    </tbody>

</table>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>
</html>