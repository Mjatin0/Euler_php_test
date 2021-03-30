<?php
    include 'db.php';
    include 'header.php';


    if (isset($_SESSION['id'])) {
        header("Location: index.php");
    }

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);




    $name_error = "";
    $email_error = "";
    $password_error = "";
    $confirmpassword_error = "";
    $name = "";
    $email = "";

    if (isset($_POST['reg_user'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $confirmPassword = $conn->real_escape_string($_POST['confirm_password']);
        $alreadymail = "";


        $sql = "SELECT *  FROM `admin`  WHERE email = '$email' ";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if (!empty($row['email'])) {
            $alreadymail = ($row['email']);
        }
        if (empty($name)) {
            $name_error = "Please enter your name";
        } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            $name_error = "Name must contain only alphabets and space";
        }
        if (empty($email)) {
            $email_error = "Please enter your email";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && empty($email)) {
            $email_error = "Please Enter Valid Email ID";
        } elseif ($email == $alreadymail) {
            $email_error = "This Email is already registered with us either login or use another email";
        }
        if (empty($password)) {
            $password_error = "Please enter your password";
        } elseif (strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
        }
        if (empty($confirmPassword)) {
            $confirmpassword_error = "Please enter your Confirm Password";
        } elseif ($confirmPassword != $password) {
            $confirmpassword_error = "Password and Confirm Password do not match";
        }

        if (empty($name_error) && empty($email_error) && empty($password_error) && empty($confirmpassword_error)) {
            $sql = "INSERT INTO `admin` (name ,email, password ,confirm_password)
    VALUES ('" . $name . "', '" . $email . "','" . $password . "','" . $confirmPassword . "')";
            if (mysqli_query($conn, $sql)) {
                echo  '<script>alert("You have Successfully signed up")</script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    mysqli_close($conn);
    ?>

  <div class="jumbotron bg-secondary mt-2 mb-4 p-3">
      <h1 class="text-center">Admin Sign Up Page</h1>
  </div>
  <div class="container">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
              <div class="row mt-3 p-1">
                  <div class="col-md-6">
                      <label for="firstname" class="mb-2">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?php echo $name; ?>">
                      <span class="text-danger"><?php if (isset($firstname_error)) echo $firstname_error; ?></span>
                  </div>
                  <div class="col-md-6">
                      <label for="email" class="mb-2">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo $email; ?>">
                      <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                  </div>
              </div>
              <div class="row mt-3 p-1">
                  <div class="col-md-6">
                      <label for="password" class="mb-2">Password</label>
                      <input type="password" class="form-control" name="password">
                      <span class="text-danger"><?php if (isset($password_error))  echo $password_error; ?></span>
                  </div>
                  <div class="col-md-6">
                      <label for="confirm_password" class="mb-2">Confirm Password</label>
                      <input type="password" class="form-control" name="confirm_password">
                      <span class="text-danger"><?php if (isset($confirmpassword_error)) echo $confirmpassword_error; ?></span>
                  </div>
              </div>
              <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary" name="reg_user">Submit</button>
                  <button type="reset" class="btn btn-primary  ml-2">Reset</button>
              </div>
          </div>
      </form>
      <p class="mt-4">
          Already a member? <a href="login.php">Sign in</a>
      </p>
  </div>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  </body>

  </html>