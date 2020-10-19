<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">

</head>
<body>


<table>
<tr>
    <th>Field</th>
    <th>Data</th>  
</tr>

<tr>
    <td><b>Name:</b></td>
    <td><?php echo $_POST["name"] . '<br>'; ?></td>
</tr>

<tr>
    <td><b>Email:</b></td>
    <td><?php echo $_POST["email"] . '<br>'; ?></td>
</tr>

<tr>
    <td><b>Phone:</b></td>
    <td><?php echo $_POST["phone"] . '<br>'; ?></td>
</tr>

<tr>
    <td><b>Subject:</b></td>
    <td><?php echo $_POST["subject"] . '<br>'; ?></td>
</tr>

<tr>
    <td><b>Content:</b></td>
    <td><?php echo $_POST["content"] . '<br>'; ?></td>
</tr>

</table>
    
</body>
</html>