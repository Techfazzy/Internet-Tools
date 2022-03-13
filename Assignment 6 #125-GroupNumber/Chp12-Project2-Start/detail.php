<?php
include 'travel-data.inc.php';


    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 12</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />

</head>

<body>
    <?php include 'header.inc.php'; ?>
    


    <!-- Page Content -->
    <main class="container">
        <div class="row">
        
           <?php include 'left.inc.php'; ?>
           
            <div class="col-md-10">
                <div class="row">
                   
                    <?php   /* you will need to replace this hard-coded data with appropriate PHP */ 
                        $id = (int)$_GET['id'];
                       foreach($images as $value){
                           if($value['id'] == $id){
                              $src = "images/medium/".$value['path'];
                              $title = $value['title'];
                              $description = $value['description'];
                              $user = $value['title'];
                              $country = $value['title'];
                              $city = $value['title'];
                              $taken = $value['taken'];
                              $tags = $value['tags'];
                           }
                       }
                        echo"<div class='col-md-8'> 
                                <img class='img-responsive' src='{$src}' alt='{$title}'>
                             <p class='description'>{$description}</p>

                             </div>
                             <div class='col-md-4'>  
                              <h2>{$title}</h2>
                              <div class='panel panel-default'>
                            <div class='panel-body'>
                                <ul class='details-list'>
                                    <li>By: <a href='#'>{$user}</a></li>
                                <li>Country: <a href='#'>{$country}</a></li>
                                    <li>City: <a href='#'>{$city}</a></li>
                                    <li>Taken on: {$taken}</li>
                                </ul>
                            </div>
                        </div>
                        <div class='btn-group btn-group-justified' role='group' aria-label='...'>
                            <div class='btn-group' role='group'>
                                <button type='button' class='btn btn-default'><span class='glyphicon glyphicon-heart' aria-hidden='true'></span></button>
                            </div>
                            <div class='btn-group' role='group'>
                                <button type='button' class='btn btn-default'><span class='glyphicon glyphicon-save' aria-hidden='true'></span></button>
                            </div>
                            <div class='btn-group' role='group'>
                                <button type='button' class='btn btn-default'><span class='glyphicon glyphicon-print' aria-hidden='true'></span></button>
                            </div>
                            <div class='btn-group' role='group'>
                                <button type='button' class='btn btn-default'><span class='glyphicon glyphicon-comment' aria-hidden='true'></span></button>
                            </div>
                        </div>
                        <h4>Tags</h4>
                        <div class='panel panel-default'>
                            <div class='panel-body' id='tags'>
                      ";  
                      for ($i=0; $i<count($tags); $i++) {
                              echo"<span class='label label-default'> {$tags[$i]} </span>";
                         }
                        
                
                     echo" </div>
                        </div>";
                        
                    ?>    

                    </div>  <!-- end right-info column -->
                </div>  <!-- end row -->
                
                
                
            <!-- Related Projects Row -->

            <!-- /.row -->
                            

            </div>  <!-- end main content area -->
        </div>
    </main>
    
    <footer>
        <div class="container-fluid">
                    <div class="row final">
                <p>Copyright &copy; 2017 Creative Commons ShareAlike</p>
                <p><a href="#">Home</a> / <a href="#">About</a> / <a href="#">Contact</a> / <a href="#">Browse</a></p>
            </div>            
        </div>
        

    </footer>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>