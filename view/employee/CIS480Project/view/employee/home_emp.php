<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<html>

<head>
    <title>Employee Portal</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1f2833;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1b263b;
            color: #fff;
            padding: 5px;
            text-align: center;
        }

        nav {
            background-color: #45a29e;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #c5c6c7;
        }
        
        h1{
            text-align: center;
            padding: 20px;
        }
        h3{
            text-align: center;
        }
        p{
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .image1 {
            width: 10%;
            height: 10%;
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        /*responsive*/

        @media (max-width: 600px){
            header{
                padding: 10px;
            }
            nav{
                padding: 5px;
            }
            nav ul{
                padding: 5px;
            }
        }

        /*Dropdown css for account*/

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #1f2833;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <img src="../../images/header.png" alt="logo" class="image1">
    </header>
    <nav>
        <ul>
            <li><a href="home_emp.php">Home</a></li>
            <li><a href="schedule_emp.php">Schedule</a></li>
            <li><a href="request_emp.php">Requests</a></li>
            <li><a href="directory_emp.php">Employee Directory</a></li>
            <li><a href="../../index.php">Logout</a></li>
            <div class="dropdown">
                <button class="dropbtn">Account 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="pwChange_emp.php">Change Password</a>
                </div>
            </div>
        </ul>
    </nav>

    <main>
        <h1>Home</h1>
        <h3>Welcome to the employee portal home page. ou can access various features and information related to your employment.</h3>
    </main>

    <footer>
        <p>&copy; 2023 HRS Human Resource Services. All rights reserved.</p>
    </footer>
</body>

</html>