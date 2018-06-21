<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        form {
            width: 330px;
            display: block;
        }

        form input {
            float: right;
        }

        form button {
            display: block;
        }

        form input[type="file"] {
            width: 90px;
        }
    </style>
</head>
<body>

<!-- all input fields should have an id -->
<form action="" method="post">
    <label for="name">Enter your name</label>
    <input name="name" type="text" id="name">
    <br>
    <br>
    <label for="b-day">Enter your b-day</label>
    <input type="date" name="b-day" id="b-day">
    <br>
    <br>
    <label for="password">Enter your password</label>
    <input type="password" name="password" id="password">
    <br>
    <br>
    <label for="gender">Select your gender</label>
    <select name="gender" id="gender">
        <option value="Female">Female</option>
        <option value="Male">Male</option>
        <option value="Mermaid">Mermaid</option>
        <option value="Merman">Merman</option>
    </select>
    <br>
    <br>
    <label for="picture">Attach your picture</label>
    <input type="file" id="picture" name="picture">
    <br>
    <br>
    <label for="checkbox">Do you want to receive a newsletter?</label>
    <input type="checkbox" name="checkbox" id="checkbox">
    <br>
    <br>
    <button type="submit">Submit</button>
</form>

<table>
    <tr>
        <td>User name</td>
        <td><?= isset($_POST['name']) ? ($_POST['name']) : "" ?></td>
    </tr>
    <tr>
        <td>B-day</td>
        <td><?= isset($_POST['b-day']) ? ($_POST['b-day']) : "" ?></td>
    </tr>
    <tr>
        <td>User password</td>
        <td><?= isset($_POST['password']) ? ($_POST['password']) : "" ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?= isset($_POST['gender']) ? ($_POST['gender']) : "" ?></td>
    </tr>
    <tr>
        <td>Newsletter status</td>
        <td><?= isset($_POST['checkbox']) ? ($_POST['checkbox']) : "" ?></td>
    </tr>
</table>

<?//= var_dump($_POST['b-day']) ?>

</body>
</html>