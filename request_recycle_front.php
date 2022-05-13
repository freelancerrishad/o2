<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
    $msg = $_SESSION['add_req'];
    $_SESSION['add_req'] = null;
?>
<!DOCTYPE html>


      <body>
            <form action="request_recycle_back.php" method="POST">
                <h2>Request for recycle</h2>
                <?php if ($msg) { ?>                                  
                        <div class="alert alert-success dec" role="alert">
                            <p class="c"><?php echo $msg ?></p>
                        </div>
                <?php } ?>
                <input type=hidden name=email value='<?php echo $email; ?>'>
               
                <label for="address">Address: </label>
                <p> 
                <input type="text" name="address" id="address" placeholder="Enter address" required>
                <p>
                <label for="description">Description: </label></p>   
                <textarea id="description" name="description" rows="4" cols="50" placeholder="Enter Description" required></textarea>

                <button type='submit' id="btsubmit">Submit</button>
                
                <button onclick="window.location.href='userhome.php'" type="button"><i class="fa-solid fa-house"></i> Return Home</button>
                

            </form>
        </body>
</html>