<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 1: Personal Information Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark-subtle">
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center g-3">
            <div class="col-lg-4 card p-4 bg-body-secondary">
                <h5 class="mb-4">Personal Information</h5>
                <?php

                $name = "Ratul Khan";
                $age = 29;
                $country = "Bangladesh";
                $introduction = "My name is {$name}. I am {$age} years old. I am from {$country}.";

                ?>
                <table class="table">
                    <tr>
                        <th>Name:</th>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <td><?php echo $age; ?></td>
                    </tr>
                    <tr>
                        <th>Country:</th>
                        <td><?php echo $country; ?></td>
                    </tr>
                    <tr>
                        <th>Introduction:</th>
                        <td><?php echo $introduction; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>