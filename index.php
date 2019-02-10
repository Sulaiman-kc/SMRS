<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">

        <!-- Row 1 for navbar -->
        <div class="row">

            <ul class=nav-list>
                <li><a href="#">Home</a> </li>
                <li>about</li>
                <li>contact us</li>
                <li>login</li>
            </ul>

        </div>
        <!-- Row 1 end -->

        <!-- Main row start -->
        <div class="row main">
            <div class="col-md-6">
                <h3>SMRS</h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, tenetur unde nobis ab sunt iusto officiis hic necessitatibus veniam, aliquam cupiditate consectetur nostrum quasi eveniet. Repellendus soluta temporibus veniam et.

            </div>

            <div class="col-md-6 colRight">

                <h3>Get your marks here</h3>

                <form action="#" method="POST">
                    <input id="searchInput" type="text" placeholder="Enter your student ID" name="s_id">
                    <input type="submit" class="btn btn-primary" value="Go" name="submitBtn">
                </form>

                <?php 
                 if(isset($_POST['submitBtn']) && ($_POST['s_id']!='')){
                    $s_id=$_POST['s_id'];

                    $conn = mysqli_connect('localhost','root','','SMRS') or die("DB CONNECT Error");
                    $query = "select * from student where s_id='$s_id'" ;

                    $result = mysqli_query($conn,$query);

                    if(mysqli_num_rows($result) <= 0){
                        echo "Studen Not found";
                    }
                    else{

                        $row = mysqli_fetch_array($result);

                        
                        echo "<br>S_ID : " , $row[0];
                        echo "<br>S_Name :" , $row[1];
                        echo "<br>m1 :" , $row[2];
                        echo "<br>m2 :" , $row[3];
                        echo "<br>m3 :" , $row[4];
                        echo "<br>m4 :" , $row[5];
                        echo "<br>Total :" , $row[6];
                        echo "<br>Percentage :" , $row[7];
                    }
                 }
                
                ?>
                

            </div>


        </div>
        <!-- Main row end -->

        <div class="row">footer</div>


    </div>
</body>
</html>