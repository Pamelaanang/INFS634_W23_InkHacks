<?php

include(dirname(__FILE__) . "/Settings/db.php");

include('header.php');
?>


<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ink Hacks</title>
    <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="Assets/css/Mystyle.css" />
</head>

<body>
    <div id="main">
        <div class='container-fluid' id='cfluid' style='border:1px solid black;'>
            <div class='row'>
                <div class="col-10" style='padding-left:50px;height:20%;padding-top:20px'>
                    <br>
                    <h2><b>
                            <?php

                            $sid = $_GET['sid'];
                            $pid = $_GET['pid'];

                            $query = "SELECT * FROM schools s JOIN program p ON (s.program_id = p.program_id) 
                            WHERE p.program_id = $pid";
                            $result = $conn->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);

                            echo $row['program_name']; ?>:
                            <?php

                            echo $row['school_name'];
                            ?>


                        </b></h2>
                    <small>Your future starts now. Graduate school is the beginning of many
                        possibilities.</small>
                    <div class='row'>
                        <div style='padding-top:25px'>
                            <a href="#" style='text-decoration:none; color:black'> Programs</a>

                            <i class="bi bi-arrow-right"></i>

                            <a href="#" style='text-decoration:none; color:black'> Schools</a>


                            <i class="bi bi-arrow-right"></i>

                            <button onclick="window.location.href = '#';" class='btn btn-warning'
                                style='padding-top:2px; height:30px;color:black; background-color:#FEBA33; border-radius:10px'>
                                Courses</button>
                        </div>
                    </div>
                </div>

                <div class="col-2" style='text-align:right;padding-right:0px;'>
                    <img id="floatRightClear" src="Assets/img/mgu.webp" alt="Card image cap" height='200px'>
                </div>
            </div>
        </div>
        <br>

        <div class='row'>
            <div style='text-align:center'>
                <h6 style='color:black'>Semesters</h6>
            </div>
            <div style='padding-left:38%'>
                <button style="background-color:#BFBFBF;width:80px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    All</button>

                <button style="background-color:#BFBFBF;width:80px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    Fall</button>

                <button style="background-color:#BFBFBF;width:80px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    Winter</button>

                <button style="background-color:#BFBFBF;width:90px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    Summer</button>

            </div>
        </div>

        <br>

        <div class="wrapper">
            <div class='container'>

                <div class='row'>
                    <?php

                    $query = "SELECT * FROM courses c JOIN lecturers l ON (c.l_id = l.l_id) WHERE `school_id`= $sid" ; //creating query
                    $query_exc = $conn->query($query);
                    while ($results = $query_exc->fetch(PDO::FETCH_ASSOC)) {
                        $cid = $results['course_id'];
                      

                        ?>
                        <div class='col-5'>
                            <div class='row' style="border:1px solid black;border-radius:10px; background-color:#FEBA33;">
                                <div class='col-4' style="overflow: hidden">
                                    <img height='200px' min-width="100%" src="<?php echo $results['course_img'] ?>"
                                        style='padding-left:20px; padding-top:20px; padding-bottom:20px;'>
                                </div>
                                <div class='col-8' style='text-align:left;padding-top:5%'>
                                    <a href="document.php?cid=<?php echo  $cid ?>" style="text-decoration: none; color:black;">
                                        <h3><?php echo $results['course_name'] ?></h3>
                                        <p><?php echo $results['course_code'] ?></p>
                                        <p><?php echo $results['l_fname'] ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class='col-2'></div>

                        <!-- <div class='col-5'>
                            <div class='row' style="border:1px solid black;border-radius:10px; background-color:#FEBA33;">
                                <div class='col-4' style="overflow: hidden">
                                    <img height='200px' min-width="100%" src="Assets/img/under.webp"
                                        style='padding-left:20px; padding-top:20px; padding-bottom:20px;'>
                                </div>
                                <div class='col-8' style='color:black; text-align:left;padding-top:5%'>
                                    <a href="document.php" style="text-decoration: none; color:black;">
                                        <h3>Web Systems Design
                                            & Management</h3>
                                        <p>INFS 634</p>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <?php

                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <br>


    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>


</html>