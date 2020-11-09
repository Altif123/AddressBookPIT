<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>Address Book</title>
</head>
<body>
<div class="container">
    <h1>Create Phone Book Entry</h1>
<form action="/create" method="POST">
    <div class="form-group">
        <label for="First_Name">First Name</label>
        <input type="text" name="First_Name" class="form-control" id="First_Name" placeholder="Enter First Name">
    </div>
    <div class="form-group">
        <label for="Last_Name">Last Name</label>
        <input type="text" name="Last_Name" class="form-control" id="Last_Name" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Address">
    </div>
    <div class="form-group">
        <label for="Phone">Phone</label>
        <input type="text" name="Phone" class="form-control" id="Phone" placeholder="Enter Phone Number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>