<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="home.css">
<html>

<head>
    <title>Employee Portal</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1b263b;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1b263b;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #778da9;
            color: #fff;
            padding: 20px;
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
            float: left;
            border-style: solid;
            border-color: #fff;
        }
        
        main{
            color: #1b263b;
            background: linear-gradient(-185deg, #e0e1dd, #778da9);
        }

        h2{
            font-size: 30px;
        }
        
        input{
            width: 100%;
            padding: 10px 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type=submit]{
            width: 100%;
            background-color: #1b263b;
            color: #fff;
            font-size: 20px;
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
    </style>
</head>

<body>
    <nav>
        <img src="../../images/logo.png" alt="logo" class="image1">
        <ul>
            <li><a href="home_admin.php">Home</a></li>
            <li><a href="schedule_admin.php">Schedule</a></li>
            <li><a href="request_admin.php">Requests</a></li>
            <li><a href="resources_admin.php">Resources</a></li>
            <li><a href="databases_admin.php">Databases</a></li>
            <li><a href="directory_admin.php">Employee Directory</a></li>
            <li><a href="../../index.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <h2>Requests</h2>
        <p>Welcome!</p>
        <p><form method='POST' action='../controller/RequestTimeOff.php'> 
            <h3>Name: <input type="text" name="name"></h3>
            <h3>Employee ID: <input type="text" name="EmpID"></h3>
            <h3>Start Date: <input type="date" name="start"></h3>
            <h3>End Date: <input type="date" name="end"></h3>
            <h3>Comments: <input type="text" name="comments"></h3>
            <input type="submit" value="submit" name="submit">
        </form></p>
    </main>

    <footer>
        <p>&copy; 2023 HRS Human Resource Services. All rights reserved.</p>
    </footer>
</body>

</html>