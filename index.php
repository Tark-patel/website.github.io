<?php include_once('functions.php'); ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>t.p link   </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
  <body class="hm-gradient">
    
    <main>
        
        <div class="container mt-4">

           
            <div class="card ">
                <div class="card-body">
            
                    <div class="row">
                   
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up blue-text">Uploaded File</h2>
                        </div>
                   
                    </div>
                 
                    <table class="table table-hover table-responsive container">
                        <thead>
                            <tr>
                                <th scope="row">#</th>
                                <th class="th-lg"><a href="">Upload a file</a></th>
                                <th class="th-lg"><a href="">Image</a></th>
                            </tr>
                        </thead>
           
                        <tbody>
                           <?php foreach($user as $item): ?>

                           <tr>
                           <td>
                             <?php echo $item['id']; ?>
                           </td>
                           <td>
                             <?php echo $item['username']; ?>
                           </td>
                           <td>
                            <img src="<?php echo 'images/'. $item['image']; ?>"  width="10" height="14">
                             
                        

                            </a>
                            <i class="fas fa-download"> <a href="<?php echo 'images/'. $item['image']; ?>" download>download</i>
                           </td>
                           </tr>
                           
                           <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="my-4">
        </div>
      
    </main>
  
</body>
