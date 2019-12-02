<?php    
//session_start();
//if(!isset($_SESSION["user_id"])) 
//{
    //header("Location: login.html");
//}  
//?>
<html>
   
	<head>
        <meta charset="utf-8">
		<title>Issues</title>
	
        <link href="dash.css" type="text/css" rel="stylesheet">
        <script src=".js" type="text/javascript"></script>
	</head>

	<body>
	    <header>
		<div id="headerBar">
		 <!--<div id="userlogin"><img id="loginIcon" src="bug.png" alt="Login icon">-->
		<a href="dash.php"><div id="theader">Bug Me Issue Tracker</div><img src ="bug.png" width=100px height =80px ></a>
             <span id="headerBarUserName"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]; ?><span>
            
        </div>
        <header>
        <div id="leftBar">
            <button type="submit" name="submit_form" id="submit_form" onclick="location.href='dash.php'">Home</button>
            <button type="submit" name="submit_form" id="submit_form" onclick="location.href='adduser.html'" >Add User</button>
            <button type="submit" name="submit_form" id="submit_form"onclick = "location.href='addissue.html'">New Issue</button>
            
            <button type="submit" name="submit_form" id="submit_form" onclick="location.href='logout.php'">Log Out</button>
            <input type="hidden" name="userID" id="userID" value="<?php echo $_SESSION["user_id"]?>">
        </div>
        <div id="controls">
           
            <!--<button type="submit" name="submit_form" id="submit_form" onclick="location.href='addissue.html'">Create New Issue</button>-->
        </div>
        <div id="issues">
            	
	<div class="Main" id="dash">

            <div id="heading1">
            <h1>Issues</h1>
            <h1><button type="submit" name="submit_form" id="submit_form" onclick="location.href='addissue.html'">Create New Issue</button></h1>
                
            </div>

            <div id="heading2">
                <label><strong>Filter by:</strong></label>
                <label><strong>ALL</strong></label>
                <label><strong>OPEN</strong></label>
                <label><strong>MY TICKETS</strong></label>
            </div>

            <table>
                <thead>
                    <th>Title :</th>
                    <th>Type :</th>
                    <th>status :</th>
                    <th>Assigned to :</th>
                    <th>Created :</th>
                </thead>
                
            </table>
		</div>
          </div>

	</body>
</html>