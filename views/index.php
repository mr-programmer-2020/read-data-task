<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../read-data-task/template/css/bootstrap.min.css">   
    <link rel="stylesheet" href="../read-data-task/template/css/style.css">
    <title>Document</title>
</head>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="split left">
  <div class="centered">
    <h2>CSV File Data</h2>
    <div>
    <table class="table ">
    <tr>
    <th>login</th>
    <th>title</th>
    <th>lastname</th>
    <th>firstname</th>
    <th>gender</th>
    <th>email</th>
    </tr>

  <?php foreach($csvData as  $data){ ?>
  <tr>
    <td><?php echo $data[0];?></td> 
    <td><?php echo $data[1];?></td>
    <td><?php echo $data[2];?></td>
    <td><?php echo $data[3];?></td>
    <td><?php echo $data[4];?></td>
    <td><?php echo $data[5];?></td>
  </tr>

  <?php }?>

</table>
    </div>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <h2>Json File Data</h2>
    <div>

<table class="table">

    <tr>
    <th>login</th>
    <th>title</th>
    <th>lastname</th>
    <th>firstname</th>
    <th>gender</th>
    <th>email</th>
    <th>picture</th>
    <th>address</th>
  </tr>

  <?php foreach($jsonData as  $data){ ?>
  <tr>
    <td><?php echo $data['login'];?></td> 
    <td><?php echo $data['title'];?></td>
    <td><?php echo $data['lastname'];?></td>
    <td><?php echo $data['firstname'];?></td>
    <td><?php echo $data['gender'];?></td>
    <td><?php echo $data['email'];?></td>
    <td><img src="<?php echo $data['picture'];?>"></td>
    <td><?php echo $data['address'];?></td>
  </tr>

  <?php }?>
</table>
    
    </div>
  </div>
</div>
     
</body>
</html> 

 