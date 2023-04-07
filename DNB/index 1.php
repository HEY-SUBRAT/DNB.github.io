<!DOCTYPE html>
<html>

<head>

	<title>
		Digital Notice Board
	</title>
	
    <?php include 'css/style.php'; ?>
    <?php include 'links/links.php'; ?>
</head>

<body>
	<div class="container">
		<h1><img id="image" src="image/LOGO FINAl.png" alt="<h1>CREATIVE TECHNO COLLEGE<h1>"></h1>
		<b>Building Career Changings Lives...</b>
		<br><br>
		<div class="property" >
            <form class="form"  action="upload.php" method="POST" enctype="multipart/form-data">
                <!-- enctype="multipart/form-data we have to write that in form in upper else you dont upload the img -->
				<H6>Select files for first page:</H6>
                <input  type="file" class="files" name="first"  multiple="multiple">
				<H6>Select files for the second page:</H6>
                <input  type="file" class="files" name="second"  multiple="multiple">
				<H6>Select files for the third page:</H6>
                <input  type="file" class="files" name="third"  multiple="multiple">

				<br><br>
                  <h6> Write the Upcoming News........</h6>
				<textarea name="text" id="text" placeholder="Enter the news here...." cols="40" rows="10"></textarea>
                <br><br>
        <button class="button-85" type="submit" name="submit">SaVe</button>
		<br>
		<a href="dnb.php">Check Form</a>
			</form>
		</div>
        
</body>
</html>
