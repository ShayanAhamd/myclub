<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MyClub</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- .........External CSS For Header................. -->
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- .........External CSS For Header................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Footer................. -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- .........External CSS For Footer................. -->

    <!-- ================================================= -->

    <!-- .........External CSS For Page.......... -->
    <link rel="stylesheet" href="../css/getInvolvedOverview.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/overview.css">
    <!-- .........External CSS For Page.......... -->


</head>

<body style="font-family: sans-serif;">
    <?php
            include_once './header.php';
            include_once './socialsidebar.php';
        ?>


    <!-- ...................Section 1................ -->
    <div class="container-fluid upper_border bg_grey">
        <div class="row w-75 mx-auto">
            <div class="col-md-6">
                <div class="title mt-2">
                    <h1 class="blue mt-5">How to Start a MY Club</h1>
                    <p>Establishing a MY Club begins with a desire to enhance the lives of young people in your community. Once the idea of a Club catches on, you’ll find momentum will build, and you’ll be on your way to making a real difference in young lives. </p>
                </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <div class="w-100 s1_rightDiv"
                    style='background-image: url("../images/images/img-grp.jpeg");'>
                </div>
            </div>
        </div>
        <br>
    </div>
    </div>
    <!-- ...................Section 1................ -->


    <!-- ...................Section 2................ -->
    <div class="container  my-5">
        <div class="container w-md-85 mx-auto">
            <div class="row text-left">
                <div class="col-md-12 px-2">
                    <h3>How to establish a MY Club in your community.</h3>
                    <p>Contact a Service Center – MYC has four Service Centers that support MY Clubs nationwide. After you gather community support, contact the closest Service Center to learn how to partner with a local Club. A MYC Director of Organizational Development (DOD) and local Club leaders will help your group take the next steps.</p>

                    <div>
                        <h5 class="mt-3 font-weight-bold">Islamabad Service Center </h5>
                        <p>Office Number 126 First Floor <br> Rehman Plaza, Sargodha <br> Phone: (923) 20 6622487</p>
                    </div>

                    <div>
                        <h5 class="mt-3 font-weight-bold">Islamabad Service Center </h5>
                        <p>Office Number 126 First Floor <br> Rehman Plaza, Sargodha <br> Phone: (923) 20 6622487</p>
                    </div>

                    <div>
                        <h5 class="mt-3 font-weight-bold">Islamabad Service Center </h5>
                        <p>Office Number 126 First Floor <br> Rehman Plaza, Sargodha <br> Phone: (923) 20 6622487</p>
                    </div>

                </div>
                    
                
            </div>

        </div>
    </div>
    <!-- ...................Section 2................ -->





    <!-- ...................Section 4................ -->
    <div class="container-fluid video_bg ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 text-left pl-5 pt-5">
                    <h1 class="child_saftey">
                        Child Safety is Our #1 Priority
                    </h1>
                    <p class="layer">
                        Layers of safety policies and guidelines create a safe, fun environment so kids can achieve.
                    </p>
                    <button class="learn">
                        LEARN MORE
                    </button>
                </div>
                <div class="container col-12 col-lg-5 pt-5 pb-3 pl-5">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-12 text-left">
                            <p class="video_hding">
                                Find a Club Near You.
                            </p>
                            <div class="col-sm-12 col-md-12 col-lg-12 text-left pl-0">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend zip_marker">

                                        <i class="fa fa-map-marker input-group-text zip_marker" aria-hidden="true"></i>
                                    </div>
                                    <input onkeyup="validate()" id="zip_form" type="text" class="form-control zip_form"
                                        placeholder="Enter ZIP" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 text-left pl-0">
                                <button class="btn_club" id="btn_clubs" disabled>
                                    FIND A CLUB
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...................Section 4................ -->


    <?php
            include_once './footer.php';
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function validate() {
        // alert("hello")
        // check if input is bigger than 3
        var value = document.getElementById('zip_form').value;
        if (value.length > 0) {
            document.getElementById("btn_clubs").disabled = false;
        } else {
            document.getElementById("btn_clubs").disabled = true;
        }
    }
    </script>

</body>

</html>