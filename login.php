<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body{
            background: #ECE9E6;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>        
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <b>Login Page</b>
                    </div>
                    <div class="card-body">
                        <form action="ceklogin.php" method="POST">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" required="" autocomplete="off" placeholder="Admin name: admin, User name: user">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" required="" autocomplete="off" placeholder="Admin pass: admin, User pas: user">
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <b>UAS MI6</b>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Benhard Y Sabandar - 180203009</li>
                            <li>Wiwin Parwak - 180203043</li>
                            <li>Angeli Picarima - 180203006</li>
                            <li>Elensya Yesayas - 180203014</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
  </body>
</html>
