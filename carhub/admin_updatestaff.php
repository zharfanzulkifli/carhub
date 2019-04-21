<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>


</style>
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <a href="admin_homepage.php"><i class="far fa-list-alt"></i>View All </a>
            
            <button class="dropdown-btn"><i class="fas fa-user-tie"></i>Manage User
                <i class="fa fa-caret-down" class="active"></i>
            </button>

        <div class="dropdown-container">
            <a href="admin_managemanager.php"style="font-size:17px">Manager</a>
            <a href="admin_managestaff.php"style="font-size:17px">Staff</a>
            <a href="admin_managecustomer.php"style="font-size:17px">Customer</a>
        </div>

        <div>
            <span class="logout-space"></span><button type="button" class="btn btn-default btn-xs logout-below"> <a href="logout.php"onClick = "window.alert('You Have Logged Out')" style="font-size:13px">
                <span class="glyphicon glyphicon-log-out"></span> Log out </a>
            </button>
        </div>
  </div>

<div username="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
  <?php

    require_once ("config.php"); 

    $name = $_POST["name"]; 
     $username = $_POST["username"];
     $password = $_POST["password"];
     $phoneno=$_POST["phoneno"];
     $email =  $_POST["email"];
    


   $username = $_POST["username"];


$sql= "update user set name='$name',username='$username', password='$password', 
phoneno='$phoneno', email='$email'
WHERE username='$username'" ;
$query = mysqli_query($conn,$sql);


    ?>
<br><br>
</div>
<script>
        alert("Update successful.");
        window.location.href="admin_managestaff.php"
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
<script>
  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have msultiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
  </script>   


</body>
</html> 
