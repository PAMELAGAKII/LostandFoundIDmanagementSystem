<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register_process.php" method="POST">
        <label>First Name:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone"><br><br>

        <label>Location:</label><br>
        <input type="text" name="location"><br><br>

        <label>Role:</label><br>
        <select name="role">
            <option value="loser">Loser</option>
            <option value="finder">Finder</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
