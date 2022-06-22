<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

require_once("delicanti.php");
require_once("eat.php");
//require_once("fiitfood.php");

/*
echo "<pre>";
var_dump($foods);
echo "</pre>";*/
?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>Assignment 4</title>
</head>

<body>
    <h1>Menu</h1>
    <div class="container">

        <div class="buttons text-center">
            <h4>Whole week menu:</h4>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Delikanti</button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1">Eat&Meet</button>
        </div>

        <div class="mb-3">
            <!-- Modalne okno full week-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Weekly menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <table id="result-table" class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo "Delicanti " ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($foods) - 2; $i++) {
                                        echo "<tr><td class='text-center'><b>{$foods[$i]["date"]}</b></td></tr>";
                                        for ($j = 0; $j < 6; $j++) {
                                            echo "<tr><td>{$foods[$i]["menu"][$j]}</td></tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-3">
            <!-- Modalne okno full week-->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Weekly menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <table id="result-table" class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo "Eat&Meet " ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($jedla); $i++) {
                                        echo "<tr><td class='text-center'><b>{$jedla[$i]["date"]}</b></td></tr>";
                                        for ($j = 0; $j < 10; $j++) {
                                            echo "<tr><td>{$jedla[$i]["menu"][$j]}</td></tr>";
                                        }
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <table id="result-table" class="table">
            <thead>
                <tr>
                    <th class="text-center"><?php echo "Delicanti " . date('d.m.Y') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($foods); $i++) {
                    if ($foods[$i]["date"] == date('d.m.Y')) {
                        for ($j = 0; $j < 6; $j++) {
                            echo "<tr><td>{$foods[$i]["menu"][$j]}</td></tr>";
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <table id="result-table" class="table">
            <thead>
                <tr>
                    <th class="text-center"><?php echo "Eat&Meet " . date('d.m.Y') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($jedla); $i++) {
                    if ($jedla[$i]["date"] == date('d.m.Y')) {
                        for ($j = 0; $j < 10; $j++) {
                            echo "<tr><td>{$jedla[$i]["menu"][$j]}</td></tr>";
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>