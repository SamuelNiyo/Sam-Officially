<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Revenue Form</title>
</head>
<body>
    <h1><center>Revenue Form</center></h1>
    <center>
         <form action="insert_user.php" method="POST">
            <label for="id">ID</label>
            <input type="number" name="id" id="id"><br><br>

            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name"><br><br>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name"><br><br>

            <label for="tin_number">Tin Number</label>
            <input type="number" name="tin_number" id="tin_number"><br><br>

            <label for="date_of_birth">DOB</label>
            <input type="date" name="date_of_birth" id="date_of_birth"><br><br>

            <label for="address">Address</label>
            <input type="text" name="address" id="address"><br><br>

            <label for="email">Email</label>
            <input type="text" name="email" id="email"><br><br>

            <label for="registration_date">Registration Date</label>
            <input type="date" name="registration_date" id="registration_date"><br><br>

            <label for="agent_id">Agent Id</label>
            <input type="number" name="agent_id" id="agent_id"><br><br>

            <input type="submit" name="sbt" value="SUBMIT">
            <input type="reset" name="cnl" value="CANCEL"><br><br>
        </form>
    </center>
</body>
</html>
