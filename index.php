


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-39e9UaGkm/+yp6spIsVfzcs3j7ac7G2cg0hzmDvtG11pT1d7YMnOC26w4wMPhzsL" crossorigin="anonymous">
    <link href="./assests/styles.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

     <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/js/coreui.min.js" integrity="sha384-8QwFmRoIE/hV8Zk5C5KIRQ/y+WTWMYz/7B/T1WuhQLs2YaEQeZOnqOJ67j+khXyV" crossorigin="anonymous"></script>
    <!-- Option 1: CoreUI for Bootstrap CSS -->
    
    


   
  </head>
  <body  id="body"   style="background:#f3f4f7" >
    

    <?php

      // require "./Pages/Dashboard.php";
       function getPagePath() {
    $uri = $_SERVER['REQUEST_URI'];
    $uriParts = explode('?', $uri, 3); // Split URI at the first occurrence of '?'
    return $uriParts[0]; // Return only the path part
}
$sessionExist = true;
 if(!$sessionExist){
     // logout the user 
 }
 else{
   switch(getPagePath()){
    case "/mikes_project/index.php":
        return require "./Pages/Dashboard.php";
   case "/mikes_project/students":
      return require "./Pages/Students.php";
  case "/mikes_project/adminDashboard.php":
   return require "./Pages/Dashboard.php";

        default:
    return require "./Pages/Dashboard.php";
   }


 }

    ?>

  </body>
</html>