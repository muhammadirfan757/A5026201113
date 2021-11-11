<!DOCTYPE html>
<html lang="en">

<head>
    <title>Traffic Light Game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<!-- <style>
    body {
        background-color: rgb(216, 218, 202);
        font-family: "Questrial", sans-serif;
        font-weight: 500;
        font-size: 30px;
    }

    .card {
        text-align: center;
        margin-top: 200px;
    }

    .card-header {
        background-color: slategray;
        color: rgb(216, 218, 202);
    }

    .card-body {
        background-color: gainsboro;
    }

    .container .container {
        margin-top: 20px;
        background-color: rgb(55, 66, 66);
        border-radius: 45px;
        width: 120px;
    }

    .btn {
        border-radius: 20px;
        padding: 20px;
        width: 80px;
        height: 20px;
        text-align: center;
        align-items: center;
        margin: auto;
        display: flex;
        justify-content: center;
    }
</style> -->

<body>
    <div class="container mt-5">
        <h2>What's The Next Traffic Light?</h2>
        <div class="alert alert-success">
            <div class="container ">
                <div class="row">
                    <div class="card">
                        The Next Traffic Light is :
                        <?php
                        $nexttrafficlight = $_GET["color"];
                        if ($nexttrafficlight == "red") {
                            echo " <span class='text-warning'>Yellow</span>";
                        } else if ($nexttrafficlight == "yellow") {
                            echo " <span class='text-success'>Green</span>";
                        } else {
                            echo " <span class='text-danger'>Red</span>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>