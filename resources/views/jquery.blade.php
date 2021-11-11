<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Animate by Irfan</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquerystyle.css" />

    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $(iklan).animate({
                    height: 'toggle'
                });
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="card-columns">
            <div class="card">
                <div class="card-body" id="iklan">
                    <h1>Shopee 11.11 BIG SALE</h1>
                    <img src="https://i.ytimg.com/vi/b9M9lWX4ots/maxresdefault.jpg" alt="image" width="100%">
                    <p>Download dan dapatkan cashback sebesar <span class="text-danger">Rp 500.000</span></p>
                    <button>Tutup Iklan</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
