<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Peminjaman Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<style>
    body {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    p {
        margin: 5px;
    }

    #submit {
        background-color: blue;
        padding: 20px;
        border-radius: 10px;
        margin-top: 10px;
        margin-right: 10px;
        color: white;
    }

    #reset {
        box-shadow: none;
        border-radius: 10px;
        padding: 20px;
        background-color: rgb(7, 243, 7);
        margin-top: 10px;
        margin-left: 10px;
        color: black;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Muhammad Irfan</p>
                <p>Irfan</p>
                <p>5026201113</p>
                <br>
                <h1>Form Input Peminjaman Buku</h1>
                <form action="https://www.google.com" method="get" id="regisform" name="myform">

                    <div class="form-group row">
                        <label class="col-sm-4" for="judulbuku">Judul Buku</label>
                        <div class="col-sm-2">:</div>
                        <input class="col-sm-6" type="text" class="form-control" id="judulbuku"
                            placeholder="Enter your book title" name="judulbuku" minlength="10"
                            title="Please enter alphabet only" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4" for="nobuku">No Buku</label>
                        <div class="col-sm-2">:</div>
                        <input class="col-sm-6" type="tel" class="form-control" id="nobuku"
                            placeholder="Enter your book number" name="nobuku" pattern="[0-9]*" minlength="5"
                            maxlength="5" title="Please enter number only" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4" for="jnspeminjaman" required>Jenis Peminjaman</label>
                        <div class="col-sm-2">:</div>
                        <div class="col-sm-6">
                            <select class="form-control" id="jnspeminjaman" name="jnspeminjaman" required>
                                <option selected value=""></option>
                                <option>Biasa</option>
                                <option>Kilat</option>
                                <option>Lama</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4" for="tglpeminjaman">Tanggal Peminjaman</label>
                        <div class="col-sm-2">:</div>
                        <input class="col-sm-6" type="date" class="form-control" id="tglpeminjaman" name="tglpeminjaman"
                            required>
                    </div>

                    <div class="col text-center">
                        <button type="submit" class="col-sm-5  " id="submit" placeholder="Submit">Submit</button>
                        <button type="reset" class=" col-sm-5 " id="reset" placeholder="Reset">Reset</button>
                    </div>

            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
