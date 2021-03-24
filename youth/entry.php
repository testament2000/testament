<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<title>Youth Empowerment Assembly</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/animate.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%7CMontserrat%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%7CDosis%3A400%2C700&#038;ver=4.5' type='text/css' media='all'/>
<link rel='stylesheet' href='icons/elegantline/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all'/>


    <style type ="text/css">
    .wrapper{
        width:850px;
        margin:0 auto;
    }
    .page-header h2{
    margin-top:0;

    }
    table tr td: last-child a{
margin-right:15px;

    }
    </style>

    <script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
</head>

<body background="nig.jpg"> 


<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header clearfix">
                <h2 class="pull-left">Youth Empowerment Assembly</h2>
                <a href="index.html" class="btn btn-success pull-right"> Login Page</a>
                </div>

                <?php

                require_once "config.php";
                $sql = "SELECT * FROM user";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                                echo "<table class='table table-bordered table-striped'>";
                            echo"<thead>";
                        echo"<tr>";


                           echo "<th>#</th>";
                            echo"<th>Firstname</th>";
                            echo"<th>Middlename</th>";
                            echo" <th> Lastname Number</th>";
                            echo"<th>State</th>";
                            echo"<th>Username</th>";
                            echo"<th>Password</th>";
                            echo"<th>Gender</th>";
                             echo"<th>Date of birth</th>";
                             echo"<th>time of registration</th>";
                             echo"<th>Email</th>";
                             echo"<th>Phone</th>";
                            
                            echo "</tr>";
                            echo"</thead>";

                            echo"<tbody>";

                            while($row=mysqli_fetch_array($result)){

                                echo "<tr>";

                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['firstname'] . "</td>";
                                    echo "<td>" . $row['middlename'] . "</td>";
                                    echo "<td>" . $row['lastname'] . "</td>";
                                    echo "<td>" . $row['state'] . "</td>";
                                    echo "<td>" . $row['username'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td>" . $row['gender'] . "</td>";
                                    echo "<td>" . $row['date_of_birth'] . "</td>";
                                    echo "<td>" . $row['time'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['phone'] . "</td>";
                                   
                                echo"</tr>";
                            }
                            echo"</tbody>";
                            echo "</table>";

                            mysqli_free_result($result);
                        } else{
                            echo "<p class ='lead'> <em> no records were found.</em></p>";
                            }
                    }else{
                    echo "error: could not be able to execute $sql." . mysqli_error($link);

                    }

                    mysqli_close($link);
            ?>

                

    





            </div>
        </div>
    </div>
</div>  
   


<script src="assets/js/jquery.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="contact/topvalidate.js"></script>
<script src="contact/bottomvalidate.js"></script>
</body>
</html>