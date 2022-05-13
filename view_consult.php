<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
include '_dbconnect.php';
$q =  "SELECT name,designation,specialized,whtsapp_no,email  FROM consult";
$run = mysqli_query($con, $q);
$html = "";
if(mysqli_num_rows($run)>0){
    while($row = $run->fetch_assoc()){
        $html = $html. "<tr><td>" . $row["name"] . "</td><td>" . $row["designation"] . "</td><td>" . $row["specialized"] . "</td><td>". $row["whtsapp_no"] . "</td><td>". $row["email"] . "</td><td>". '<a class="btn btn-lg btn-block btn btn-success" href=""><i class="fa-brands fa-whatsapp"></i> Contact</a>' ."</td></tr>";
       
    }
  
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultant</title>
  <link rel="stylesheet" href="css/userhome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel = "icon" href="img/fav.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <section id="title">
    <div class="container-fluid" id="cf">
        
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="logo">
      <a href="userhome.php">
      <img class = "logo" src="img/LOGO3.png" alt="img">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto test">
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="userhome.php"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec"><i class="fa-brands fa-pagelines"></i> Plants</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec2"><i class="fa-solid fa-seedling"></i> Seeds</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec3"><i class="fa-solid fa-briefcase"></i> Other Services</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#Sec4"><i class="fa-solid fa-u"></i> Pots</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="feedback.php"><i class="fa-solid fa-comment"></i> Give Feedback</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="rqst_product.php"><i class="fa-solid fa-list-check"></i> Request Plants</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="mycart.php"><i class="fa-solid fa-bag-shopping"></i> My Cart</a>
      </li>

      <li class="nav-item">
        <a id= "test2" class="nav-link" href="logout.php"><i class="fa-solid fa-user"></i> Logout</a>
      </li>
      
    </ul>
    </div>
    </nav>
    

    <div id = "main">
    <div id="cta">
    <h1 class = "cta-heading"><i class="fa-solid fa-comment"></i> View Consultants</h1>
    </div>
    <table id="example" class="table table-light table-hover table-bordered pad" style="width:100%">
        
        <thead>
            <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Speacialized on</th>
                        <th>WhatsApp No</th>
                        <th>Email</th>
                        <th>Action</th>
            </tr>
        </thead>
            
        <tbody>
                <?php
                echo  $html
                ?>
            </tbody>
            
        </div>
        </table>
    
    <footer id="footer">
    <a id="icon-fb" href="#">
      <i class="s-icons fa-brands fa-facebook"></i>
    </a>
    <a id="icon-insta" href="#">
      <i class="s-icons fa-brands fa-instagram"></i>
    </a>
    <a id="icon-mail" href="mailto:#">
      <i class="s-icons fa-solid fa-envelope" href=""></i>
    </a>
    
    
    <p>© Copyright ProjectO2</p>

   </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>