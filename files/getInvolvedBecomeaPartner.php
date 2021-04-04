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
    <div class="container-fluid upper_border bg_grey pt-4">
        <div class="row w-75 mx-auto">
            <div class="col-md-6">
                <div class="title">
                    <h1 class="blue ">Help MY Clubs of Pakistan Provide Great Futures for All Children </h1>
                    <p class='mt-3'>Companies must support important causes to maintain relevance and importance in our
                        world. There are many studies that speak to the reasons to partner. </p>
                </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <div class="w-100 s1_rightDiv" style='background-image: url("../images/images/img-k.jpeg");'>
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
                    <h3>Why Become a Partner? </h3>
                    <p>Companies must support important causes to maintain relevance and importance in our world. There
                        are many reasons and studies that speak to the reasons to partner. </p>
                    <ul>
                        <li class='a'>84% of Pakistani believe that businesses have a responsibility to bring about
                            societal change (2016 Global Strategies Group)</li>
                        <li class='a'>80% of global consumers agree that business must play a role in addressing
                            societal issues (2016 Edelman Trust Barometer)</li>
                        <li class='a'>32% of consumers buy from brands doing social or environmental work (2016 Unilever
                            Consumer Study)</li>
                        <li class='a'>72% of consumers have donated to charity at the register (2016 Catalyst’s
                            Revelations at the Register Report)</li>
                    </ul>
                    <div class='mt-5'>
                        <h5 class="mt-3 font-weight-bold">About Partnering with MY Clubs of Pakistan </h5>
                        <p>Thanks for your interest in MY Clubs of Pakistan (MYCP). There are many reasons to partner
                            with our organization, and we look forward to discussing opportunities with your company
                            further. New corporate partnerships that help advance the work of our organization are
                            always welcome. MYCP is interested in partnering with companies that have solid brand images
                            and reputations. Whether new or established, any prospective partner must have a strong
                            corporate mission and be an industry leader. Key factors for evaluating a potential partner
                            include the partner’s ability to leverage its assets, raise awareness, make a corporate
                            contribution and/or raise funds and engage its employees and leadership, locally and
                            nationally. For a fact sheet about corporate partnerships to use as a guide</p>

                        <ul>
                            <li class='a'>MYCP does not endorse products, promote the sale of products or mandate that
                                Clubs or members endorse, purchase or sell any product or service excerpt our kits.</li>
                            <li class='a'>All partnerships requires a minimum financial commitment.</li>
                        </ul>
                        <p class="mt-2">
                            More businesses are realizing the social and economic benefits of strategic nonprofit
                            partnerships. MY Club of Pakistan has some of the best corporate partnerships in the
                            industry, has won awards for its partnerships and can present case studies for partnerships.
                            We look forward to discussing how your company, your customers, your clients and your
                            employees can help bring about great futures for all youth.
                        </p>
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
                    <a href="./getInvolvedOverview.php">
                        <button class="learn">
                            LEARN MORE
                        </button>
                    </a>
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