<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$id = $_SESSION['id'];
$userid = $_SESSION['userid'];
$name = $_SESSION['name'];

if($email != false && $password != false ){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location:login.php');
        }
    }

}else{
    header('Location: login.php');
}
?>
<?php 

if ((isset($_GET['del']))) {
    $id = $_GET['del'];
    $query = "DELETE FROM usertable where id='$id'";
    $fire = mysqli_query($con, $query) or die("can not data." . mysqli_error($con));
    if ($fire) { ?> <script>
alert("Are you sure to delete ?");
</script>
<?php

    } else {
    ?>
<script>
alert('Not deleted');
</script>
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nippy Tech</title>
    <link rel="icon" type="image/x-icon" href="nippylogo.png">
    <link rel="icon" type="image/x-icon" href="nippylogo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexheader.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" href="dash.css">
    <style>
    .bxs-user-circle {

        font-size: 40px;
        color: black;

    }

    .nav5 {
        background: white;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 10px 40px 10px 40px;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: -160px;

    }

    .user {
        color: black;
        font-weight: 600;
        margin: 0px 0px 0px 0px !important;
    }

    .dropdown-toggle::after {
        display: inline-block;
        /* width: 20px; */
        /* height: 20px; */
        font-size: 40px;
        margin-left: 0.255em;
        margin-top: -90px !important;
        vertical-align: 0.255em;
        content: "";
        color: black;
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
        margin: 0px 0px -10px 0px;
    }

    button#dropdownMenuButton {
        background: transparent;
        border: none;
    }

    button#dropdownMenuButton:hover {
        background: transparent;
        border: none !important;
    }

    thead.bgt {
        background: #00356b !important;
        color: white !important;
    }

    .bbb {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 10px 10px 10px 10px;
    }

    .bgy {
        background-image: url(nippyimage/about.png);
        padding: 100px 0px 100px 0px;
        background-position: center !important;
        background-size: cover !important;
    }

    .bbbb {
        color: white !important;
        font-size: 40px !important;
    }

    @media (max-width: 480px) {



        .dropdown-menu {
            position: absolute;
            top: 100%;
            margin-top: 20px !important;
            left: -100px !important;

        }

        .bxs-user-circle {

            font-size: 30px !important;
            color: black;

        }

        .bbbb {
            color: white !important;
            font-size: 40px !important;
        }

        .bgy {
            background-image: url(nippyimage/about.png);
            padding: 100px 0px 100px 0px;
            background-position: center !important;
            background-size: contain !important;
        }
    }
    </style>
</head>

<body>


    <nav class="topnav navbar navbar-light bg-ligh nav5 justify-content-between">
        <a href="#">
            <img src="nippylogo.png" width="90px" />
        </a>

        <form class=" form-inline">
            <i class='bx bxs-user-circle'></i>
            <b class="users p-2">
                <?php echo $fetch_info['name'] ?>
            </b>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>.</b>
                </button>
                <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="logout-user.php"><i class="fa fa-power-off"></i>
                        LogOut</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo $fetch_info['name'] ?></a>
                    <a class="dropdown-item" href="#">Setting</a>

                </div>
            </div>
        </form>
    </nav>
    <div class="container-fluid bgy">
        <div class="overlay ">
            <h3 class="text-center bbbb">WelCome <?php echo $fetch_info['name'] ?>
            </h3>
        </div>
    </div>

    <br><br><br>
    <div class="container bbb">
        <div style="overflow-x:auto; ">

            <table class="table table-striped ">
                <thead class="bgt">
                    <tr>

                        <th scope="col">Name</th>

                        <th scope="col">Email</th>
                        <th scope="col">Moblie</th>

                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                              include("comm/connection.php");            
                                      $query = "SELECT * FROM usertable where email='$email'";
                                      
                                      
                                      
                                      $rs_result = mysqli_query($con, $query);
                                      if (mysqli_num_rows($rs_result) > 0) {

                                      while ($row = mysqli_fetch_assoc($rs_result)){
                  
                                      ?>
                    <tr>

                        <td><?php echo $row['name']?></td>

                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['mobile']?></td>

                        <td><button type="button" class="btn btn-success "><a
                                    href="updateuser.php?upd=<?php echo $row['id']?>"
                                    style="text-decoration: none; color:white;">Edit</a></button>
                        </td>

                        <td>
                            <a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $row['id']?>" class="btn btn"
                                style="background-color: #161b52; color:white;padding:5px 10px 5px 10px;">Delete</a>
                        </td>
                    </tr>


                    <?php
                                      
                                  }
                              }
                                  ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>