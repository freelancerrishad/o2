
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Signup</title>
  <link rel="stylesheet" href="css/signup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel = "icon" href="img/fav.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <section id="title">
    <div class="container-fluid" id="cf">
        <form class="form" action="signup3.php" method="POST">
        


            
        
        
        <div class="col-lg-6 col-md-12 col-sm-12" id=col1>
        <div class="logo5" id="log-title">
                    <h2 id="pad"><i class="fa-solid fa-user"></i> Admin Signup</h2>
                </div>
                
            
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control rounded-pill gap2" name="name" aria-describedby="emailHelp" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control rounded-pill gap2" name="email" aria-describedby="emailHelp" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control rounded-pill gap2" name="add" aria-describedby="emailHelp" placeholder="Your address" required>
              </div>
              <div class="form-group">
                <label for="p_num">Phone Number</label>
                <input type="text" class="form-control rounded-pill gap2" name="p_num" aria-describedby="emailHelp" placeholder="Your Phone Number" required>
              </div>
              <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control rounded-pill gap2" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
              </div>
             
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control rounded-pill gap2" name="password" aria-describedby="emailHelp" placeholder="Your Password" required>
              </div>
              <div class="last form-group">
                  <label for="cpassword">Confirm Password</label>
                  <input type="password" class="form-control rounded-pill gap2" name="cpassword" aria-describedby="emailHelp" placeholder="Confirm Your Password" required>
              </div>
              <button type="submit" class="btn btn-lg btn-block btn-success rounded-pill gap3">Create Account</button>
              <button onclick="window.location.href='login.php?id=home'" type="button" class="btn btn-lg btn-block btn-outline-success rounded-pill gap2">Already Have an Account</button>
              <div class="gap">
              <a class="ret-home" href="adminhome.php"><i class="fa-solid fa-house-user"></i> Return Home</a>
                </div>
              </div>
        </div>

        </form>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>