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

  <?php  require_once ("config.php"); 
    $username=$_GET['username'];
    $query = "SELECT * from user where username='$username'"; 
    if (!$query) die("SQL query error encountered :".mysqli_error($conn) );
    // Here
    $row = mysqli_query($conn,$query);
    $rows = mysqli_fetch_array($row);

  ?>
  
<form name="staff" method="post" action="admin_updatestaff.php">
<h1>Manager Profile Page</h1>
    <fieldset>
        <legend><b>Personal Information</legend>
        <table>
        
            
            <tr>
                <td><b>Name</td>
                <td><input type ="text" name="name" value ="<?php echo $rows['name']; ?>"></td>
            </tr>
            <tr>
                <td><b>Username</td>
                <td><input type ="text" name="username" value ="<?php echo $rows['username']; ?>" readonly></td>
            </tr>
            <tr>
                <td><b>Password</td>
                <td><input type ="text" name="password" value ="<?php echo $rows['password']; ?>" readonly></td>
            </tr>
            <tr>
                <td><b>Contact Number</td>
                <td><input type ="text" name="phoneno" value ="<?php echo $rows['phoneno']; ?>"></td>
            </tr>
            <tr>
                <td><b>Work Email</td>
                <td><input type ="text" name="email" value ="<?php echo $rows['email']; ?>"></td>
            </tr>
            
        </table>
    </fieldset>
    
    <br>  
        <button value="Update" class="btn btn-default">Update</button>
    <?php
        
    ?>
</div>
    </form>

</div>

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
