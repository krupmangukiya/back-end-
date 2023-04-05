<?php
$url_path = 'ua92-b4/39141934/';

$link = mysqli_connect("sdb-55.hosting.stackcp.net","student82-353031312ea5","ua92-studentAc","student82-353031312ea5");
if ($link === false) {
    die("Connection failed: ");
}

if ($_REQUEST['page'] == 'AddStudent') {
    if (isset($_POST['submit'])) {
        $TeacherID = $_POST['TeacherID'];
        $ParentID = $_POST['ParentID'];
        $FirstName = $_POST['FirstName'];
        $Surname = $_POST['Surname'];
        $Address = $_POST['Address'];
        $ClassID = $_POST['ClassID'];
        $sql = "INSERT INTO student (TeacherID,ParentID,FirstName,Surname,Address,ClassID) VALUES ('$TeacherID','$ParentID','$FirstName','$Surname','$Address','$ClassID')";
        if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error adding record ";
        }
    }
}

if ($_REQUEST['page'] == 'AddParent') {
    if (isset($_POST['submit'])) {
        $StudentID = $_POST['StudentID'];
        $Name = $_POST['Name'];
        $Surname = $_POST['Surname'];
        $sql = "INSERT INTO parent (StudentID,Name,Surname) VALUES ('$StudentID','$Name','$Surname')";
        if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error adding record ";
        }
    }
}

if ($_REQUEST['page'] == 'AddTeacher') {
    if (isset($_POST['submit'])) {
        $ClassID = $_POST['ClassID'];
        $Name = $_POST['Name'];
        $Surname = $_POST['Surname'];
        $Contact = $_POST['Contact'];
        $sql = "INSERT INTO teacher (ClassID,Name,Surname,Contact) VALUES ('$ClassID','$Name','$Surname','$Contact')";
        if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error adding record ";
        }
    }
}

if ($_REQUEST['page'] == 'AddClass') {
    if (isset($_POST['submit'])) {
        $Classname = $_POST['Classname'];
        $Capacity = $_POST['Capacity'];
        $Section = $_POST['Section'];
        $TeacherID = $_POST['TeacherID'];
        $StudentID = $_POST['StudentID'];
        $sql = "INSERT INTO class (Classname,Capacity,Section,TeacherID,StudentID) VALUES ('$Classname','$Capacity','$Section','$TeacherID','$StudentID')";
        if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error adding record ";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
       body {
          font-family: Arial, Helvetica, sans-serif;
          background: #D8F2FF;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
          display: flex;
        justify-content: center;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

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
          background-color: red;
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
        h3{
            color: red;
        font-size: 22px;
        margin-left: 100px;
        }

        table, tr, th {
        border: 1px solid;
        padding: 10px;
        }
        h1{
            color: red;
        }
        h2{
            color: red;
        }
        .button{
            position: absolute;
            width: 78px;
            height: 31px;
            background-color: red;
            color: white;
            border: 0;
        }
        </style>
    </head>
<body>
    <div class="navbar">

        <a href="/<?= $url_path; ?>">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/<?= $url_path; ?>?page=ViewStudent">Student</a>
                <a href="/<?= $url_path; ?>?page=ViewParent">Parent</a>
                <a href="/<?= $url_path; ?>?page=ViewTeacher">Teacher</a>
                <a href="/<?= $url_path; ?>?page=ViewClass">Class</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/<?= $url_path; ?>?page=AddStudent">Student</a>
                <a href="/<?= $url_path; ?>?page=AddParent">Parent</a>
                <a href="/<?= $url_path; ?>?page=AddTeacher">Teacher</a>
                <a href="/<?= $url_path; ?>?page=AddClass">Class</a>
            </div>
        </div>
        <a href="/<?= $url_path; ?>?page=Contact">Contact Us</a>
    </div>
    <?php

    if (!isset($_REQUEST['page'])) {
        ?>
        <h1>Welcome to Rishton Academy Primary School</h1>
        
        <p>Dear Visitor
         <br><br>
 
 Welcome to the website for Rishton Methodist Primary School. As a school we endeavor to provide the best possible education within a Christian setting. We value and look after the needs of every child and strive to make sure that all of our pupils enjoy their time here. Its a place to grow in friendship and life learning and when your child leaves at the end of year 6 we always hope to send them off being fully equipped to walk well through the rest of their education and life. Our aim is to offer a broad, balanced and appropriate curriculum which will encourage academic, aesthetic, physical, social, emotional and spiritual development.
 
  
 <br><br>
 We acknowledge and value our foundation by the Methodist Church, our solid links with the local Methodist community and the principles which form the basis of Methodism. We serve the families of our local community and together we, as John Wesley the founder of Methodism encouraged, seek to 'Watch over one another in love'. In so doing, we trust that all our pupils will grow & flourish to reach their full potential in every area of their lives both now & in the future.
 
  
 <br><br>
 Our children are encouraged to develop a mature and positive attitude towards themselves, to their relationships with others, to the community and to the life of school in general. Outstanding standards of behaviour and respect for others are expected and are supported by our strong Christian ethos, further underpinned by our core Christian values. We also aim to ensure that our curriculum provides a Christian setting in which children can grow in understanding and develop appropriate skills, attitudes and values.
 
  
 <br><br>
 We welcome you, our parents into school at all times, seeing you as the cornerstone in your child's education and we want to work with you to ensure that your child has the best possible start to their educational journey. It is only by keeping channels of communication open that we build upon our already open and harmonious relationships to continue to support and encourage your child during their time at Rishton Methodist Primary.
 
  
 <br><br>
 We hope that you enjoy visiting our school website.
 
  <br><br>
 
 Kindest regards
 <br>
 Janet Neale
 <br>
 Headteacher</p>

         <?php
    }

    if ($_REQUEST['page'] == 'ViewStudent') {
        ?>
        <h3>See all Students</h3>
        <table>
            <tr>
                <th width="150px">TeacherID<br></th>
                <th width="250px">ParentID<br></th>
                <th width="150px">FirstName<br></th>
                <th width="250px">Surname<br></th>
                <th width="150px">Address<br></th>
                <th width="250px">ClassID<br></th>
                
            </tr>
            <?php	
			$sql = mysqli_query($link, "SELECT TeacherID,ParentID,FirstName,Surname,Address,ClassID  FROM student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['TeacherID']}</th>
				<th>{$row['ParentID']}</th>
				<th>{$row['FirstName']}</th>
				<th>{$row['Surname']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['ClassID']}</th>
                
			</tr>";
			}
			?>
        </table>
        <?php
    }

    if ($_REQUEST['page'] == 'ViewParent') {
        ?>
        <h3>See all Parents</h3>
	
    <table>
    
        <tr>
            <th width="150px">StudentID<br></th>
            <th width="250px">Name<br></th>
            <th width="150px">Surname<br></th>
            
        </tr>
                
        <?php
        $sql = mysqli_query($link, "SELECT StudentID, Name,Surname  FROM parent");
        while ($row = $sql->fetch_assoc()){
        echo "
        <tr>
            <th>{$row['StudentID']}</th>
            <th>{$row['Name']}</th>
            <th>{$row['Surname']}</th>
            
        </tr>";
        }
        ?>
        </table>
        <?php
    }

    if ($_REQUEST['page'] == 'ViewTeacher') {
        ?>
        <h3>See all teacher</h3>
	
    <table>
    
        <tr>
            <th width="150px">ClassID<br></th>
            <th width="250px">Name<br></th>
            <th width="150px">Surname<br></th>
            <th width="250px">Contact<br></th>
            
        </tr>
                
        <?php
        $sql = mysqli_query($link, "SELECT ClassID, Name,Surname,Contact  FROM teacher");
        while ($row = $sql->fetch_assoc()){
        echo "
        <tr>
            <th>{$row['ClassID']}</th>
            <th>{$row['Name']}</th>
            <th>{$row['Surname']}</th>
            <th>{$row['Contact']}</th>
            
        </tr>";
        }
        ?>
        </table>
        <?php
    }

    if ($_REQUEST['page'] == 'ViewClass') {
        ?>
        <h3>See all class</h3>
	
    <table>
    
        <tr>
            <th width="150px">Classname<br></th>
            <th width="250px">Capacity<br></th>
            <th width="150px">Section<br></th>
            <th width="250px">TeacherID<br></th>
            <th width="150px">StudentID<br></th>
            
        </tr>
                
        <?php
        $sql = mysqli_query($link, "SELECT Classname, Capacity,Section,TeacherID,StudentID  FROM class");
        while ($row = $sql->fetch_assoc()){
        echo "
        <tr>
            <th>{$row['Classname']}</th>
            <th>{$row['Capacity']}</th>
            <th>{$row['Section']}</th>
            <th>{$row['TeacherID']}</th>
            <th>{$row['StudentID']}</th>
            
        </tr>";
        }
        ?>
        </table>
        <?php
    }
    if ($_REQUEST['page'] == 'AddStudent') {
        ?>
        <div class="student1">
            <br>
            <form method="post" action="/<?= $url_path; ?>?page=AddStudent">

                <label for="studentName">TeacherID :</label>
    			<input type="text" name="TeacherID" class="Classname">

                <br><br>

                <label for="studentName">ParentID :</label>
    			<input type="text" name="ParentID" class="Capacity">


    			<br><br>

                <label for="studentName">FirstName :</label>
    			<input type="text" name="FirstName" class="Section">

                <br><br>
                <label for="studentName">Surname :</label>
    			<input type="text" name="Surname" class="TeacherID">


    			<br><br>

                <label for="studentName">Address :</label>
    			<input type="text" name="Address" class="StudentID">

                <br><br>


                <label for="studentName">ClassID :</label>
    			<input type="text" name="ClassID" class="StudentID">

                <br><br>

    			<input type="submit" name="submit" class="button">

    		</form>
        </div>
        <?php
    }

    if ($_REQUEST['page'] == 'AddParent') {
        ?>
        <div>
            <br>
            <form method="post" action="/<?= $url_path; ?>?page=AddParent">


                <label for="parentName">StudentID:</label>
    			<input type="text" name="StudentID">

    			<br><br>
                <label for="parentName">Name:</label>
    			<input type="text" name="Name">

    			<br><br>
                <label for="parentName">Surname:</label>
    			<input type="text" name="Surname">

    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
        <?php
    }
    
    if ($_REQUEST['page'] == 'AddTeacher') {
        ?>
        <div>
            <br>
            <form method="post" action="/<?= $url_path; ?>?page=AddTeacher">

    			<label for="teacherName">ClassID:</label>
    			<input type="text" name="ClassID">

    			<br><br>

                <label for="teacherName">Name:</label>
    			<input type="text" name="Name">

    			<br><br>

                <label for="teacherName">Surname:</label>
    			<input type="text" name="Surname">

    			<br><br>

                <label for="teacherName">Contact:</label>
    			<input type="text" name="Contact">

    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
        <?php
    }

    if ($_REQUEST['page'] == 'AddClass') {
        ?>
        <div>
            <br>
            <form method="post" action="/<?= $url_path; ?>?page=AddClass">

    			<label for="className">Classname:</label>
    			<input type="text" name="Classname">

    			<br><br>

                <label for="className">Capacity:</label>
    			<input type="text" name="Capacity">

    			<br><br>

                <label for="className">Section:</label>
    			<input type="text" name="Section">

    			<br><br>

                <label for="className">TeacherID:</label>
    			<input type="text" name="TeacherID">

    			<br><br>

                <label for="className">StudentID:</label>
    			<input type="text" name="StudentID">

    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
        <?php
    }
    
    if ($_REQUEST['page'] == 'Contact') {
        ?>
        <div>
            <br>
            <form method="post" action="Contact.php">

                <label for="name">Name:</label>
    			<input type="text" name="name" required>
                <br><br>
                <label for="returnContact">Return contact email (optional):</label>
                <br>
    			<input type="email" name="returnContact">

    			<br><br>

                <label for="message">Message:</label>
                <br>
                <textarea name="message" rows="12" cols="80" required></textarea>

                <br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
        <?php
    }
    ?>
    
</body>
</html>