<?php 
    require_once __DIR__ . '/partials_php/get-degrees.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>departments</title>
</head>
<body>

    <main class="container">
        <h1 class="my-5">DEGREES</h1>
        <table class="table">
        <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>level</th>
                    <th>address</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if(!empty($degrees)) {
                    foreach($degrees as $degree) {
                    ?>
                        <tr>
                            <td><?php echo $degree['id'] ?></td>
                            <td><?php echo $degree['name'] ?></td>
                            <td><?php echo $degree['level'] ?></td>
                            <td><?php echo $degree['website'] ?></td>
                            <td><?php echo $degree['email'] ?></td>
                        </tr>
                    <?php
                    } 
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>