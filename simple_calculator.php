<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 7: Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark-subtle">
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center g-3">
            <div class="col-lg-4 card p-4 bg-body-secondary">
                <h5 class="mb-4">Calculator</h5>
                <!-- Start Form -->
                <form action="" method="post">
                    <!-- Start Form row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="number" class="form-control" name="number1" placeholder="Number One">
                        </div>
                    </div>
                    <!-- /End Form row -->
                    <!-- Start Form row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="number" class="form-control" name="number2" placeholder="Number Two">
                        </div>
                    </div>
                    <!-- /End Form row -->
                    <!-- Start Form row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <select class="form-select" name="operators">
                                <option selected>Operators</option>
                                <option value="plus">Addition</option>
                                <option value="minus">Subtraction</option>
                                <option value="multiply">Multiplication</option>
                                <option value="division">Division</option>
                            </select>
                        </div>
                    </div>
                    <!-- /End Form row -->
                    <!-- Start Form row -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary w-100">Calculate</button>
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
                        $num1 = $_POST["number1"];
                        $num2 = $_POST["number2"];
                        $operators = $_POST["operators"];

                        if ($operators == "plus") {
                            $result = $num1 + $num2;
                            echo "Addition of {$num1} and {$num2} is: {$result}";
                        } elseif ($operators == "minus") {
                            $result = $num1 - $num2;
                            echo "Subtraction of {$num1} and {$num2} is: {$result}";
                        } elseif ($operators == "multiply") {
                            $result = $num1 * $num2;
                            echo "Multiplication of {$num1} and {$num2} is: {$result}";
                        } elseif ($operators == "division") {
                            $result = $num1 / $num2;
                            echo "Division of {$num1} and {$num2} is: {$result}";
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