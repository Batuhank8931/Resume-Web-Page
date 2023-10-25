
<?php

// please fill those information in order to  get the data from SQL
/*

$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";
$tablename = "your_table_name";
$columnname = "your_table_column_name";


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    $jsonString= $row[$columnname];
}

$data = json_decode($jsonString, true);

$conn->close();

*/


// Please remove below section if you uncommnet upper lines.---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$file_path = 'maindata.txt';

$jsonString = file_get_contents($file_path);

$data = json_decode($jsonString, true);

// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batuhan Karakaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href = "stylepage1.css" rel="stylesheet" />
</head>
<body>

    <!--offcanvas------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="offcanvas offcanvas-start d-flex flex-column-reverse flex-sm-row p-0 m-0" tabindex="1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="back col-12 col-sm-4 row gx-0"  >
        <div class="col m-4 m-sm-5 align-self-end p-0">
          <h5 class="mb-3 mt-4 ">
            Thank you for your consideration.
            </h5>
            <button class="btn rounded-0" style="width: 100%; background-color: white; color:#1d3c45; font-weight: bold ; text-align: center;" >
              <span>LEARN MORE</span>
            </button>
        </div> 
      </div>
      <div class="col-12 col-sm-8 row gx-0">
        <div class="row p-4 justify-content-end gx-0">

        <button type="button" class="btn-close close align-items-center" data-bs-dismiss="offcanvas" aria-label="Close" style="width: 100px; height:30px; color:red;">
        </button>
        </div>
          <div class=" row align-self-center m-4 pb-0 col-10">
            <h5 class="pb-1" style="font-size: 15px;" ><?php echo ($data['main']["Letter2"][0]);?></h5>     

          </div>
          <div class="row align-self-end gx-0">

          </div>
      </div>
    </div>
    <!--offcanvas- end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!--header------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    
    <div class="h-25 d-flex justify-content-between back">
        <div class="m-4 m-sm-5">
            <h1 style="color: white;"><?php echo ($data['main']["Personal"][0]);?></h1>
            <h5 style="color: white;"><?php echo ($data['main']["Personal"][5]);?></h5>
        </div>

        <button type="button " class="m-4 m-sm-5 btn p-0"  data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-collection-fill" viewBox="0 0 16 16">
                <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
            </svg>
            <span class="align-middle hellobutton">About Me</span>
        </button>
    </div>
    <div class="back" style="height: 0.5px;">
        <hr class=" hr m-4 m-sm-5 mt-0 mb-0 mt-sm-0 mb-sm-0 back " />
    </div>
    
    <div class="h-50 d-flex justify-content-between back">
        <div class="m-4 m-sm-5 col-m-10 align-items-center">
            <div>
                <h6 style="color: white;"><?php echo ($data['main']["Letter1"][0]);?></h6>
            </div>            
        </div>
        <div class="mr-sm-5 mb-0 mt-0 mb-sm-0 mt-sm-4 col-3 col-lg-2 mr-lg-0 d-none d-sm-flex" style="height:170px;">
            <div class="profilephoto">
            <?php $decodedImage = base64_decode($data['main']["Personal"][6]);
            echo '<img class="img-thumbnail" src="data:image/png;base64,' . base64_encode($decodedImage) . '" style="border-radius: 50%; border: 10px solid rgba(244, 166, 34, .5);" alt="PNG Image">';
            ?>
            </div>
        </div>
    </div>
    <!--header- end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!--navbar------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="h-25 back">
        <div class="navbar-container col-12 col-sm-5">
            <ul class="d-flex justify-content-between m-4 m-sm-5 mt-0 mt-sm-0 mb-0 mb-sm-0 mr-4 mr-sm-5 ">
              <li class="nav-link active-link pr-0 ">
                <a href="#">Experience
                </a>
                <div class="underline mt-3"></div>
              </li>
              <li class="nav-link p-0 submit2" type="button">
                <a href="#">Skills</a>
                <div class="underline mt-3" ></div>
              </li>
              <li class="nav-link p-0 submit3" type="button">
                <a href="#">Projects</a>
                <div class="underline mt-3"></div>
              </li>
            </ul>
          </div>
    </div>
    <!--navbar- end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="back" style="height: 0.5px;">
        <hr class="hr m-4 m-sm-5 mt-0 mb-0 mt-sm-0 mb-sm-0 " />
    </div>
    <div class="back " style="height:35px; width:100%; position:absolute; z-index: -1;"></div>
   
   
    <div class="d-flex">
        <!--sidebar-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <div class=" back col-sm-2 d-sm-flex flex-column d-none">
            <div>
                <div class="back " style="height:35px;"></div>
                <button class="btn custom-button rounded-0 sidebarbtn " type="submit" value="Education" >
                    <span>Education</span>
                    <span>
                        <i id="Educationarrow" class="arrow down" style="align-self: right;" ></i>
                    </span>
                </button>
                <div class="row p-0 m-0" id="Education" style="display: none;">
                    <div class="searchform " style="height: auto;" >

                    <?php
                            $education = $data['education']["School"];

                            $edunumber= count($education);
                            $xa = 0;
                
                            while($xa < $edunumber) {
                                echo('
                                <div class="p-3">
                                        ');echo($data['education']["School"][$xa]);echo('
                                </div>
                                ');
                                $xa++;
                            };
                        ?>  
                    </div>
                </div>

            </div>
            <div>
                <div class="back " style="height:15px;"></div>
                <button class="btn custom-button rounded-0 sidebarbtn " type="submit" value="Job" >
                    <span>Job Experience</span>
                    <span>
                        <i id="Jobarrow" class="arrow down" style="align-self: right;" ></i>
                    </span>
                </button>

                <div class="row p-0 m-0" id="Job" style="display: none;">
                    <div class="searchform " style="height: auto;" >

                        <?php
                            $jexperinece = $data['experience']["Company"];

                            $jexnumber= count($jexperinece);
                            $xa = 0;
                
                            while($xa < $jexnumber) {
                                echo('
                                <div class="p-3">
                                        ');echo($jexperinece[$xa]);echo('
                                </div>
                                ');
                                $xa++;
                            };

                        ?>                       
                    </div>
                </div>

            </div>
            <div>
                <div class="back " style="height:15px;"></div>
                <button class="btn custom-button rounded-0 sidebarbtn " type="submit" value="Skills" >
                    <span>Skills</span>
                    <span>
                        <i id="Skillsarrow" class="arrow down" style="align-self: right;" ></i>
                    </span>
                </button>
                <div class="row p-0 m-0" id="Skills" style="display: none;">
                    <div class="searchform " style="height: auto;" >

                    <?php
                            $skexperi = $data['skills']["subjetcs"];

                            $skexnu= count($skexperi);
                            $xa = 0;
                
                            while($xa < $skexnu) {
                                echo('
                                <div class="p-3">
                                        ');echo($skexperi[$xa]);echo('
                                </div>
                                ');
                                $xa++;
                            };

                        ?>             
                    </div>
                </div>
            </div>
            <div>
                <div class="back " style="height:15px;"></div>
                <button class="btn custom-button rounded-0 sidebarbtn " type="submit" value="Projects" >
                    <span>Projects</span>
                    <span>
                        <i id="Projectsarrow" class="arrow down" style="align-self: right;" ></i>
                    </span>
                </button>

                <div class="row p-0 m-0" id="Projects" style="display: none;">
                    <div class="searchform " style="height: auto;" >


                        <?php
                            $prexperi = $data['projects']["title"];

                            $prexnu= count($prexperi);
                            $xa = 0;
                
                            while($xa < $prexnu) {
                                echo('
                                <div class="p-3">
                                        ');echo($prexperi[$xa]);echo('
                                </div>
                                ');
                                $xa++;
                            };

                        ?>  

                    </div>
                </div>

            </div>

        </div>
        <!--sidebar- end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!--mainpage-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


        <div class="col-12 col-sm-10">
            <div>
                <div class="m-4 m-sm-5 mb-0 mb-sm-0 mt-0 mt-sm-0 scrollcon">
                    <div class="forms">
                    <?php
                        $experience = $data['experience']["Company"];

                        $chartnumber= count($experience);

                        $xi= 0;
                        $totalyears=0;

                        while ($xi < $chartnumber){
                            $year = $data['experience']["Years"][$xi];
                            $totalyears=$totalyears+$year;
                            $xi++;
                        }; 

                        $x = 1;
                        
                        while($x <= $chartnumber) {
                            $xs=$chartnumber-$x;

                            $company = $data['experience']["Company"][$xs];
                            $year = $data['experience']["Years"][$xs];
                            $jobtitle = $data['experience']["Title"][$xs];
                            $title = $data['experience']["Bussiness"][$xs];
                            $discription = $data['experience']["Description"][$xs];
                            $link = $data['experience']["Pages"][$xs];
                            
                        

                            $rate= ($year/$totalyears)*100;
                            if ($year == 1) {
                                $pulural = " year";
                            } else {
                                $pulural = " years";
                            };

                            echo('

                            <div class="align-items-center scrollitem pt-2 d-flex " >
                                <h5 style="color: black; text-align:center;"> ');echo($company);echo(' </h5>
                                <h6 style="color: black; text-align:center; "> ');echo($jobtitle);echo(' </h6>
                                    <div class="skill-bar d-flex align-items-center" style=" 
                                    background: 
                                    radial-gradient(closest-side, #1d3c45 80%, transparent 50% 90%),
                                    conic-gradient(rgba(255,255,255,0.25) ');echo(100-$rate);echo('%,  #be7f40 10%);">
                                        <h6 style="color: white; width: 100%; text-align: center;">');echo($year.$pulural);echo('</h4>
                                    </div>
                            </div>
                        ');
                        $x++;
                    };
                    
                ?>
                    </div>
                </div>    

            </div>

            <div class="m-4 m-sm-5 p-2 justify-content-center border border-grey">

                <div class="text-center row ">
                    <p class="h2" style="align-self: center; margin-top:20px; margin-bottom:25px; ">Education</p>

                    <div class="row">
                        <div class="col">
                            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                                <?php
                                    $education = $data['education']["School"];

                                    $edunumber= count($education);
                                    $x = 0;
                        
                                    while($x < $edunumber) {
                                        echo('
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top">
                                                <div class="inner-circle"></div>
                                                <p class="h6 mt-3 mb-1">');echo($data['education']["School"][$x]);echo('</p>
                                                <p class="h6 text-muted mb-0 mb-lg-0">');echo($data['education']["Educationtime"][$x]);echo('</p>
                                            </div>
                                        </div>
                                        ');
                                        $x++;
                                    };

                                ?>
                            </div>
                        </div>
                    </div>


                </div>  
            </div>        


            <div class="m-4 m-sm-5 p-2 justify-content-center border border-grey">
                <div class="text-center row ">
                    <p class="h2" style="align-self: center; margin-top:20px; margin-bottom:25px;">Job Experience</p>
                </div>  
                    <div class="main-timeline">
                    <?php
                        $experience = $data['experience']["Company"];

                        $chartnumber= count($experience);


                        $xt = 1;
                        
                        while($xt <= $chartnumber) {
                            $x=$chartnumber-$xt;


                            $company = $data['experience']["Company"][$x];
                            $year = $data['experience']["Years"][$x];
                            $jobtitle = $data['experience']["Title"][$x];
                            $timetable = $data['experience']["timetable"][$x];
                            $title = $data['experience']["Bussiness"][$x];
                            $discription = $data['experience']["Description"][$x];
                            $link = $data['experience']["Pages"][$x];


                            $xi= 0;
                            $totalyears=0;

                            while ($xi < $chartnumber){
                                $totalyears=$totalyears+1;
                                $xi++;
                            };                  

                            $rate= ($year/$totalyears)*100;
                            if ($year == 1) {
                                $pulural = " year";
                            } else {
                                $pulural = " years";
                            };

                            echo('
                            <div class="timeline">
                                <div class="icon"></div>
                                <div class="date-content">
                                    <div class="date-outer">
                                        <span class="date">
                                        <span class="month">');echo($year.$pulural);echo('</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="timeline-content">
                                    <h5 class="title">');echo($company);echo(' - ');echo($jobtitle);echo('</h5>
                                    <h6>');echo($timetable);echo('</h6>
                                    <h6>');echo($title);echo('</h6>
                                    <h6> <a href="');echo($link);echo('"> ');echo($link);echo('</a></h6>
                                    <p class="description">');echo($discription);echo('</p>
                                </div>
                            </div>
                            ');
                            $xt++;
                        };
                        
                    ?>



                </div>
            </div>
        </div>     
        <!--mainpage- end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    </div>    

    <!--footer------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <footer class="back ">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 back">

            <div class="me-5 d-none d-lg-block back"> </div>

        </section>


        <section class="">
            <div class="text-start">

                <div class="row m-0 mt-4 m-4 m-sm-5 mb-0 mb-sm-0">
                    

                    <div class="col-12 col-sm-4 mb-sm-1 mb-5 p-0" >

                        <h6 class="text-uppercase fw-bold mb-4">CONTACT INFORMATION</h6>
                        <p><i class="fas fa-home"></i><?php echo ($data['main']["Personal"][2]);?></p>

                        <p><i class="fas fa-phone"></i><?php echo ($data['main']["Personal"][4]);?></p>
                        <p>
                        <i class="fas fa-envelope"></i>
                        <?php echo ($data['main']["Personal"][3]);?>
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <section class="p-0 m-4 m-sm-5 mt-0 mb-0 mt-sm-0 mb-sm-0 back">

        <div class="text-start d-flex justify-content-between col-12 col-sm-2">
                <a href="<?php echo ($data['main']["Personal"][7]);?>" style="color:white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                </a>
                <a href="<?php echo ($data['main']["Personal"][8]);?>"style="color:white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
                <a href="<?php echo ($data['main']["Personal"][9]);?>"style="color:white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                </a>
                <a href="<?php echo ($data['main']["Personal"][10]);?>"style="color:white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
                <a href="<?php echo ($data['main']["Personal"][11]);?>"style="color:white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </a>
            </div>



        </section>
        <section>
            <div class="back" style="height: 0.5px;">
                <hr class=" hr m-4 m-sm-5 mt-4 mb-4 mt-sm-4 mb-sm-4 back " />
            </div>
        </section>

        <section class="row no-gutters m-4 m-sm-5 back">

            <div class="col-12 col-sm-6 pl-2">

            </div>


            <div class="col-12 col-sm-6 pl-2"> 
                <div class="input-group mt-4">

                    <div class="input-group mb-3 border border-white ">
                        <input type="text" class="form-control rounded-0" placeholder="Sing up for the e-newsletter">

                        <div class="input-group-append border border-white">
                            <button class="btn back rounded-0" type="submit" style="height: 100%;">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path fill="#FFFFFF" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>


        </section>



        <section>
            <div class="back" style="height: 0.5px;">
                <hr class=" hr m-4 m-sm-5 mt-4 mb-4 mt-sm-4 mb-sm-4 back " />
            </div>
        </section>

        
        <section class="row no-gutters m-4 m-sm-5 mb-0 mb-sm-0 back justify-content-center">

            <div class="col-12 col-sm-8 d-flex justify-content-center"> 
               
                <ul style="list-style: none; justify-content: center;">
                    <li>
                        <span class="p-1" style="font-size: 10px;">
                            Privicy Policy
                        <span class="p-1" style="font-size: 10px;">
                            Cookie Policy
                    </li>
                    <li>
                        <p class="mb-3 mt-4 p-1" style="font-size: 12px;">
                            Copyright 2023
                        <p>
                    </li>
                </ul>

            </div>


        </section>
    </footer>
    <!--footer -end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="scriptpage1.js"></script>
</body>
</html>