<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>

<body>
    <h1><center>User Form</center></h1>
    <center>
        <form action="user form.php" method="POST">
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

            <input type="submit" value="Register">
        </form>
        <br>
        <form action="home.html">
            <input type="submit" value="Back to Home">
        </form>
    </center>
</body>

</html>
