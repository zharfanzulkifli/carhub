
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

    <div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>

  
    <caption><b><h1>List Of Details Of All User</h1></b></caption>
    <table >
          <tr>

             <th>Name</th>
              <th>Type</th>
              <th>Username</th>
              <th>Password</th>
              <th>Phone Number</th>
              <th>Email</th>
              
              <th></th>
            <th></th>
        </tr>
    <?php
    require_once ("config.php"); 
    $query = mysql_query("select * from customer");
    if (!$query) die("SQL query error encountered :".mysql_error() );
    while ($record = mysql_fetch_array($query))
    {
    ?>
    <tr align=center>
      <TD align=left><?php echo $record["name"]; ?></TD>
      <TD><?php echo $record["type"]; ?></TD>
      <TD><?php echo $record["username"]; ?></TD>
      <TD><?php echo $record["password"]; ?></TD>
      <TD><?php echo $record["phoneno"]; ?></TD>
      <TD><?php echo $record["email"]; ?></TD>

      

    </tr>
 
        <?php}
        mysqli_close($conn);
        ?>
    </table>
</div>
</body>
</html> 