<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/angulars.css">
	
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="app/route.js"></script>    
<script src="app/controllers/newController.js"></script>    


    <body ng-app="app1">

        <nav class="navbar navbar-expand-sm navbar-dark  bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><h3>WELCOME</h3></a>
                <div class="collpase navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                    
                             
                            <li class="nav-item">
                              <a class="nav-link" href="#!home" class="btn btn-out">Home</a>
    
                            </li>
                            
                            <li class="nav-item">
                             <a class="nav-link" href="#!course" class="btn btn-out">Courses</a>
                            </li>
                            
                           </ul>
            </div>
    </div>
    </nav><br><br><br><br><br>
    
    <div class="ng-view"></div><br>
   
</body>
</html>