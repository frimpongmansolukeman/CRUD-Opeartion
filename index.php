<?php require_once "process.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<?php
if(isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>
<div class="row justify-content-center">
<?php 

$result = $mysqli->query("SELECT * FROM data") or die(mysqli_error($mysqli));
//print out results
?>
<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Location
                </th>
                
                <th colspan="2">
                    Action
                </th>
                
            </tr>
        </thead>
        <?php
            while($row = $result->fetch_assoc()): ?> 
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><a href="index.php?edit=<?php echo $row['id']?>" class="btn btn-info">Edit</a></td>
                <td><a href="process.php?delete=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php endwhile;?>
    </table>
</div>
  <form action="process.php" method="post">
       <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="enter your name" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
        <label for="location">location</label>
        <input type="text" name="location" class="form-control" placeholder="enter your location" value="<?php echo $location; ?>">
        </div>
        <div class="form-group">
        <?php 
            if($update == true):
        ?>
        <input type="submit" name="update" class="btn btn-info"value="update">
        <?php else: ?>
        <input type="submit" name="save" class="btn btn-primary"value="save">
        <?php endif; ?>
        </div>
  </form>  
  </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>