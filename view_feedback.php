<?php
  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php?id=home');
  }
?>
<?php
        
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>View Feedback</title>
    <link rel = "icon" href="img/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    
    <?php 
    include('header4.html');
    ?>

    
    <div id="cta">
    <h1 class = "cta-heading"><i class="fa-solid fa-comment"></i> View Feedback</h1>
    </div>
    

    
    
    
    
        <table id="example" class="table table-light table-hover table-bordered pad" style="width:100%">
        
        <thead>
            <tr>
                        <th>Feedback</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Time</th>
                        <th>Action</th>
            </tr>
        </thead>
            
        <tbody>
                <?php
                echo  $html
                ?>
            </tbody>
            
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

