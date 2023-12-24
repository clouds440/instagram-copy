<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Instagram - Sign Up</title>
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
            <form action="registerationHandler.php" method="post" enctype="multipart/form-data">
                <div class="row">

                    <!-- Profile Picture -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <label for="fileUpload" class="btn btn-primary btn-block py-2">
                            Choose Profile Picture
                            <input type="file" id="fileUpload" name="fileUpload" accept=".jpg, .png" style="display: none;" required>
                        </label>
                        <img id="preview" src="#" alt="">
                    </div>

                    <!-- First Name -->
                    <div class="col-lg-6">
                        <div>
                            <span class="bg-white px-4 border-md">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="fname" placeholder="First Name" class="form-control bg-white border-md" required>
                    </div>

                    <!-- Last Name -->
                    <div class="col-lg-6">
                        <div>
                            <span class="bg-white px-4 border-md">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lname" placeholder="Last Name" class="form-control bg-white border-md" required>
                    </div>

                    <!-- Email Address -->
                    <div class="col-lg-12 mb-4">
                        <div>
                            <span class="bg-white px-4 border-md">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-md" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="input-group col-lg-12">
                        <div class="input-group-prepend">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-right-0 border-md h-100 font-weight-bold text-muted">
                            <option value="+92">+92</option>
                            <option value="+10">+10</option>
                            <option value="+15">+15</option>
                            <option value="+18">+18</option>
                            <option value="+12">+12</option>
                        </select>
                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3" required>
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

                    <div class="px-3 w-100 font-weight-bold">
                        <p id="errorMessage" style="color: red;"></p>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <input type="submit" value="Create your account" class="btn btn-primary btn-block py-2"/>
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
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

    <script>
          // Profile picture preview after uploading
        window.addEventListener('load', function() {
            document.getElementById('file-input').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                var img = document.getElementById('preview')
                img.onload = function() {
                URL.revokeObjectURL(img.src) // no longer needed, free memory
                }
                img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                img.classList.add('img-fluid')
            }
            });
        });
    </script>
</body>
</html>