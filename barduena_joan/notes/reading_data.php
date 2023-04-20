<?php

include "../lib/php/functions.php";

// $filename = "notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

// print_p($notes);

$notes_object = load_json_file("notes.json");
$users_array = load_json_file("../data/users.json");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reading Data</title>
    <?php include "../parts/meta.php"; ?>
</head>

<body>

    <?php include "../parts/navbar.php"; ?>

    <div class="container">
        <div class="card soft">
            <h2>Notes</h2>

            <?php

            for ($i = 0; $i < count($notes_object->notes); $i++) {
                echo "<li>{$notes_object->notes[$i]}</li>";
            }

            ?>
        </div>

        <div class="card soft">
            <h2>Users</h2>

            <?php

            for ($i = 0; $i < count($users_array); $i++) {
                echo "<li>
                <strong>{$users_array[$i]->name}</strong>
                <span>{$users_array[$i]->type}</span>
                </li>";
            }

            ?>
        </div>
    </div>

</body>

</html>