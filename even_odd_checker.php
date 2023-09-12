<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 4: Even or Odd Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark-subtle">
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center g-3">
            <div class="col-lg-4 card p-4 bg-body-secondary">
                <h4 class="mb-4">Even Add Checker</h4>
                <!-- Start Form -->
                <form action="" method="post">
                    <!-- Start Form row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="number" class="form-control" name="number" placeholder="Number">
                        </div>
                    </div>
                    <!-- /End Form row -->
                    <!-- Start Form row -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary w-100">Check Number</button>
                        </div>
                    </div>
                    <!-- /End Form row -->
                </form>
                <!-- End Form -->

                <!-- Start Result -->
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                    <div class="card text-center mt-3 p-2">
                        <?php
                        // Getting data from form
                        $number = $_POST["number"];
                        // Checking if number is even
                        if ($number % 2 == 0) {
                            echo "Number {$number} is an even number";
                        } else {
                            echo "Number {$number} is an odd number";
                        }
                        ?>

                    </div>

                <?php endif; ?>

                <!-- End Result -->
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>