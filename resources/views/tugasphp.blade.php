<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Light Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body{
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
        background-color:slategray;
        color: rgb(216, 218, 202);
    }

    .card-body {
        background-color: gainsboro;
    }
    .container .container{
        margin-top: 20px;
        background-color: rgb(55, 66, 66);
        border-radius: 45px;
        width: 120px;
    }

    .btn{
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

</style>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">What's The Next Traffic Light?</div>
            <div class="card-body ">
                        <label>Choose any color ( <b>red</b> / <b>yellow</b> / <b>green</b> )</label>
                        <br>
                        <form for="trafficlight" action="nyoba1.php" method="get" class="container py-2">
                            <button class="btn my-4 btn-danger" name="color" value="red" id="red" >Red</button>
                            <button type="submit" class="btn my-4 btn-warning" name="color"  value="yellow" id="yellow" >Yellow</button>
                            <button type="submit" class="btn my-4 btn-success" name="color"  value="green" id="green" >Green</button>
                        </form>
            </div>
        </div>
    </div>

    <!-- <script>
            $(function () {
                    $("#red").click(function(){
                    alert("Next Traffic Light is " + $("#yellow").val());
                    });

                    $("#yellow").click(function(){
                    alert("Next Traffic Light is " + $("#green").val());
                        });

                    $("#green").click(function(){
                    alert("Next Traffic Light is " + $("#red").val());
                    });
                });
    </script> -->
</body>
</html>
