
<?php
    include "connnection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Navbar CSS</title>
    <style>
     * {
            margin:0; 
            padding:0;
        }
 
    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 
    
    nav ul {
        background:#37988e;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
    }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#d68d9a;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
    </style>

</head>
<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="newEmployee.php">Add Employee</a></li>
            <li><a href="deleteEmployee.php">Delete Employee</a></li>
        </ul>
    </nav>
</body>
</html>
