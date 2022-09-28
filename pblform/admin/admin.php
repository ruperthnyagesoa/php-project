<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received Forms</title>
    <link rel="icon" type="image/png" href="img/fav.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./admin.css">
</head>

<body>
	<div class="container">
        <h2 class="text-center mt-2">Project Based Learning Forms Admin Panel</h2>
    <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="py-3 text-center">S.No.</th>
                <th class="py-3 text-center">Name</th>
                <th class="py-3 text-center">Phone</th>
                <th class="py-3 text-center">Group ID</th>
                <th class="py-3 text-center">Mentor</th>
                <th class="py-3 text-center">Topic</th>
                <th class="py-3 text-center">Summary</th>
                <th class="py-3 text-center">Link</th>
                <th class="py-3 text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "pbl_form";
        
            $con = mysqli_connect($server, $username, $password, $database);

            $sql ="select * from forms";
            $query =mysqli_query($con, $sql);
            while($rows = mysqli_fetch_assoc($query)) {  
                $links = $rows['link'];  
        ?>
            <tr>
            <td class="py-3 text-left"><?php echo $rows['srno']; ?></td>
            <td class="py-3 text-left"><?php echo $rows['name']; ?></td>
            <td class="py-3 text-left"><?php echo $rows['phone']; ?></td>
            <td class="py-3 text-left"><?php echo $rows['grpid']; ?> </td>
            <td class="py-3 text-left"><?php echo $rows['mentor']; ?> </td>
            <td class="py-3 text-left"><?php echo $rows['topic']; ?> </td>
            <td class="py-3 text-left"><?php echo $rows['summary']; ?> </td>
            <td class="py-3 text-left"><?php echo "<a href='$links' target='_blank'>Visit</a>" ?> </td>
            <td class="py-3 text-left"><?php echo $rows['dt']; ?> </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>
</div>

</body>
</html>