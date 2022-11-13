<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php?id=home');
  }
?>
<?php 
    $msg = $_SESSION['add_event'];
    $_SESSION['add_event'] = null;
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add Event</title>
    <link rel = "icon" href="img/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/addproduct.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>

<body>
<?php 
    include('header5.html');
    ?>   
    


<section id="cta">
        <form class="form" action="insert_event.php" method="POST">
          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12" id=col1>
              <div id="log-title">
                <h3 class="cta-heading"><i class="fa-solid fa-calendar"></i> Add Event</h3>
                <?php if ($msg) { ?>                
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg ?>
                        </div>
                    </div>

                </div>
              <?php } ?>
              </div>
              <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" class="form-control" name="name" placeholder="Event Name" required>
              </div>
            
              <div class="form-group">
                <label for="Event Location">Event Location</label>
                <input type="text" class="form-control" name="location" placeholder="Event Location" required>
              </div>
              <div class="form-group">
                <label for="Event Datetime">Event Datetime</label>
                <input type="datetime-local" class="form-control" name="time" placeholder="Event Datetime" required>
              </div>
              
              <div class="form-group">
              <label for="Event Details">Event Details</label>
              <textarea class="form-control" name="description" rows="4" cols="50" placeholder="Enter Event Description" required></textarea>
              </div>

        
              <button type="submit" class="btn btn-lg btn-block btn btn-success">Submit</button>
            </div>
          </div>
        </form>
</section>
    
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
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
