<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>View Plant Request</title>
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

    <div id = "main">
    <div id="cta">
    <h1 class = "cta-heading"><i class="fa-solid fa-list-check"></i> View Plant Request</h1>
    </div>
    
    
     <div class="form-group" id="pad">
        <input type="text" class="form-control" name="search" aria-describedby="emailHelp" placeholder="Search">
     </div>
     
     
     <div class="form-group" id="pad2">
            <select class="form-control" name="cat">
            <option value="Plant Name">Plant Name</option>
            <option value="Plant Name">Username</option>
            <option value="User Email">User Email</option>
            <option value="Description">Description</option>
            <option value="Time">Time</option>
           
        </select>
    </div>
    
     <div class="col-lg-12 col-md-12 col-sm-12" id = "pad3">
     <button type="submit" class="btn btn-lg btn-block btn-success"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
     </div>
    
    
    
    
        <table id="example" class="table table-light table-hover table-bordered pad" style="width:100%">
        
        <thead>
            <tr>
                        <th>Plant Name</th>
                        <th>Username</th>
                        <th>User Email</th>
                        <th>Description</th>
                        <th>Time</th>
                        <th>Actions</th>
            </tr>
        </thead>
            
        <tbody>
            
            <?php
                    
                    

                        $conn=new PDO('mysql:host=localhost:3306;dbname=project_o2;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        //database code execute, default : warning generate
                        $sqlquerystring="SELECT id, u_name, u_email, p_name, description, time FROM r_product ";
                        $returnobj=$conn->query($sqlquerystring);

                        
                    ///user data found
                        $tabledata=$returnobj->fetchAll();

                        foreach($tabledata AS $row){
                         ?>

                         <tr>
                         <td><?php echo $row['p_name']; ?></td>
                            <td><?php echo $row['u_name']; ?></td>
                            <td><?php echo $row['u_email']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo '<a href="addproduct.php" class="btn btn-lg btn-block btn btn-success"><i class="fa-solid fa-plus"></i> Accept Request</a><a href="delete_req.php?id= '.$row['id'].'" class="btn btn-lg btn-block btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Delete Request</a>'; ?></td>
                        </tr>
                        <?php
                    }
    ?>
            </tbody>
            
        
        </table>