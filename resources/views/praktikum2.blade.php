<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form regis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="praktikstyle.css">
</head>

<body>
    <div class="container ">
        <div class="row ">
            <div class="col">
                <h1>REGISTRATION FORM</h1>
                <form action="https://google.com" method="get" id="regis" name="myform">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your name" name="name"
                            pattern="[A-Za-z].{1,}*" title="Please enter alphabet only" required>
                    </div>
                    <div class="form-group">
                        <label for="home">Home Address:</label>
                        <input type="text" class="form-control" id="home" placeholder="Enter your home address"
                            name="home" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" minlength="8" maxlength="16"
                            placeholder="Enter the password of the email" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone:</label>
                        <input type="tel" class="form-control" id="pwd" placeholder="Enter your phone number"
                            pattern="[0-9]*" minlength="7" maxlength="12" title="Pleas enter number only" required>
                    </div>
                    <div class="form-group">
                        <label for="course">Select your course:</label>
                        <select id="course" name="course" required>
                            <option value="" disabled selected></option>
                            <option value="BTECH">BTECH</option>
                            <option value="BBA">BBA</option>
                            <option value="BCA">BCA</option>
                            <option value="B.COM">B.COM</option>
                            <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zipcode">Zip code:</label>
                        <input type="tel" class="form-control" id="zipcode" placeholder="Enter your zip code"
                            pattern="[0-9]*" minlength="6" maxlength="6" title="Pleas enter number only" required>
                    </div>
                    <div class="form-group">
                        <input type="reset" class="btn btn-block" id="reset" placeholder="Reset">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="submit" id="submit"
                            placeholder="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
