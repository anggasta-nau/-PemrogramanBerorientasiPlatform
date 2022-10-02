<!DOCTYPE html>
<html lang="en">
<head>
    <title>hasil</title>
</head>
<body>
   <h1>Registration Form</h1>
   <table border="1">
       <tr>
           <td>Name : </td>
           <td><?php echo $_POST['name']; ?></td>
        </tr>
       <tr>
           <td>Address : </td>
           <td><?php echo $_POST['addr']; ?></td>
        </tr>
       <tr>
           <td> Gender : </td>
           <td><?php echo $_POST['gndr']; ?></td>
        </tr>
        <tr>
           <td> Profession : </td>
           <td><?php echo $_POST['prfsn']; ?></td>
        </tr>
   </table> 
</body>
</html>