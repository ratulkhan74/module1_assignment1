<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 3: Grade Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark-subtle">
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center g-3">
            <div class="col-lg-4 card p-4 bg-body-secondary">
                <h5 class="mb-4">Grade Calculator</h5>
                <!-- Start Form -->
                <form action="" method="post">
                    <!-- Start Form row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="number" class="form-control" name="score1" placeholder="Score One">
                        </div>
                    </div>
                    <!-- /End Form row -->
                    <!-- Start Form row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="number" class="form-control" name="score2" placeholder="Score Two">
                        </div>
                    </div>
                    <!-- /End Form row -->
                    <!-- Start Form row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="number" class="form-control" name="score3" placeholder="Score Three">
                        </div>
                    </div>
                    <!-- /End Form row -->
                    <!-- Start Form row -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary w-100">Calculate Grade</button>
                        </div>
                    </div>
                    <!-- /End Form row -->
                </form>
                <!-- End Form -->

                <!-- Start Result -->
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                    <div class="card text-center mt-3 p-2">
                        <?php
                        // Get the test scores from the form
                        $score1 = $_POST["score1"];
                        $score2 = $_POST["score2"];
                        $score3 = $_POST["score3"];

                        // Calculate the average score
                        $gradeAverage  = ($score1 + $score2 + $score3) / 3;

                        if ($gradeAverage >= 80) {
                            $grade = "A";
                            echo "Your letter grade is: {$grade}";
                        } elseif ($gradeAverage >= 70) {
                            $grade = "B";
                            echo "Your letter grade is: {$grade}";
                        } elseif ($gradeAverage >= 60) {
                            $grade = "C";
                            echo "Your letter grade is: {$grade}";
                        } elseif ($gradeAverage >= 50) {
                            $grade = "D";
                            echo "Your letter grade is: {$grade}";
                        } else {
                            $grade = "F";
                            echo "Your letter grade is: {$grade}";
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