<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Instagram - Log In</title>
</head>
<body>
<div class="container">
    <div class="row py-5s align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="phone image" class="img-fluid mb-3 d-none d-md-block">
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <div class="navbar-brand font-weight-bold">
                Instagram
              </div>
            <form action="loginHandler.php" method="post">
                <div class="row">

                    <!-- Email Address -->
                    <div class="col-lg-12 mb-4">
                        <div>
                            <span class="bg-white px-4 border-md">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-md" required>
                    </div>

                    <!-- Password -->
                    <div class="col-lg-12 mb-4">
                        <div>
                            <span class="bg-white px-4 border-md">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-md" required>
                    </div>

                    <div id="errorMessage" class="px-3 w-100 text-red-700 font-weight-bold">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <input type="submit" value="Log In" class="btn btn-primary btn-block py-2"/>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                    <div class="form-group col-lg-12 mx-auto">
                        <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                            <i class="fa fa-facebook-f mr-2"></i>
                            <span class="font-weight-bold">Continue with Facebook</span>
                        </a>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Don't have an account? <a href="register.php" class="text-primary ml-2">Sign Up</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

    <script src="validations.js"></script>
</body>
</html>