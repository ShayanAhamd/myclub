</style>
<!-- for upper row -->
<div class="container-fluid" style="background-color: #dcf5b0;">
    <div class="row">
        <div class="col-md-5 offset-md-1 py-4 ">
            <div class="row">
                <div class="col-6">
                    <a href="./home.php">

                        <img src="../images/logo.png" alt="navbar_logo..." height="55px" width="240px">

                    </a>
                </div>
                <div class="col-6 text-right pt-2">
                    <button class="navbar-toggler d-md-none flex-row-reverse" type="button" data-toggle="collapse"
                        data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        <i class="fa fa-bars blue" aria-hidden="true" style="font-size: 27px;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 pt-4 text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 d-none d-md-inline-block px-0 mx-0 text-right">
                        <button class="blue_bg search_btn"><i class="fa fa-search search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-6 col-md-5 px-2 mx-0 ">
                        <button class="club_btn w-100">
                            <i class="fa fa-map-marker blue" aria-hidden="true"></i><span class="pl-2">FIND A
                                CLUB</span>
                        </button>
                    </div>
                    <div class="col-6 col-md-5 px-2 mx-0">
                        <a href="./donatenow.php">
                            <button class="donate_btn w-100">
                                <span class="donate">DONATE NOW</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- for navbar -->

<nav class="navbar navbar-expand-md navbar-dark blue_bg sticky-top mb-0">
    <div class="collapse navbar-collapse flex-column small_bg_color" id="navbar">
        <ul class="navbar-nav w-80 justify-content-center  " id="navbar">
            <li class="nav-item d-block text-center pl-3 pl-md-0 d-md-none active"
                style="background-color: #f5f0ef;border-bottom: 2px solid #dcd7d6;">
                <div class="input-group w-75 py-3 mx-auto" style="border:none">
                    <div class="input-group" style="border: 2px solid #88BA30; border-radius:5px">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn blue_bg" type="button">
                                <i class="fa fa-search text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item pl-3  dropdown mx-md-auto">
                <a class="nav-link active remove_focus text-left" href="#" id="servicesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us
                </a>

                <div class="dropdown-menu dropdown-menu border_bottom_blue  p-0" aria-labelledby="servicesDropdown">
                    <div class="text-right mr-3">
                        <span class="btn font-weight-bold close_btn"
                            onclick='document.getElementByClassName(".dropdown").style.display = "none"'>&times;</span>
                    </div>
                    <div class="d-md-flex align-items-start border_bottom_blue">
                        <div class="img_div_1">
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./overview.php">Overview</a>
                            <a class="dropdown-item blue" href="./our_mission.php">Our Mission & Story</a>
                            <a class="dropdown-item blue" href="./club_imapct.php">Club Impact</a>
                            <a class="dropdown-item blue" href="./local_club.php">Local Clubs</a>
                            <a class="dropdown-item blue" href="./child_saftey.php">Child Safety</a>
                            <a class="dropdown-item blue" href="./covid-19.php">COVID-19</a>
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./annual_report.php">Annual Report</a>
                            <a class="dropdown-item blue" href="leadership.php">Leadership</a>
                            <a class="dropdown-item blue" href="./our_partners.php">Our Partners</a>
                            <a class="dropdown-item blue" href="./alumni_hall_of_fame.php">Alumni Hall of Fame</a>
                            <a class="dropdown-item blue" href="./military_youth.php">Youth Centers</a>
                            <a class="dropdown-item blue" href="./native_lands.php">Clubs on Native Lands</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item pl-3  dropdown mx-md-auto">
                <a class="nav-link  active remove_focus text-left" href="#" id="servicesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Get Involved</a>
                <div class="dropdown-menu dropdown-menu-left border_bottom_blue  p-0"
                    aria-labelledby="servicesDropdown">
                    <div class="text-right mr-3">
                        <span class="btn font-weight-bold close_btn"
                            onclick='document.getElementByClassName(".dropdown").style.display = "none"'>&times;</span>
                    </div>
                    <div class="d-md-flex align-items-start border_bottom_blue">
                        <div class="img_div_4">
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./getInvolvedOverview.php">Overview</a>
                            <a class="dropdown-item blue" href="./waysToGive.php">Way to Give</a>
                            <a class="dropdown-item blue" href="./joinAlumniFriends.php">Join Alumni & Friends</a>
                            <a class="dropdown-item blue" href="./advocacy.php">Advocate for Youth</a>
                            <a class="dropdown-item blue" href="./getInvolvedVolunteer.php">Volunteer</a>
                            <a class="dropdown-item blue" href="./getInvolvedStartaClub.php">Start a Club</a>
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./getInvolvedEquaity&Justice.php">Equity & Social
                                Justice</a>
                            <a class="dropdown-item blue" href="./getInvolvedInvestinKids.php">#InvestInKids</a>
                            <a class="dropdown-item blue" href="./getInvolvedBecomeaPartner.php">Become a Partner</a>
                            <a class="dropdown-item blue" href="./getInvolvedUpcomingEvents.php">Events</a>
                        </div>
                        <div class="pt-3 list blue_bg_2 mr-2" style="width:250px">
                            <h6 class="pl-2 text-white font-weight-bold">STAY INFORMED WITH NEWS AND UPDATES</h6>
                            <div class="input-group mb-3 ml-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text input_icon_1"><i class="fa fa-envelope input_icon_2"
                                            aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control input_form" placeholder="email address"
                                    aria-label="Amount (to the nearest dollar)">
                            </div>
                            <button class="sign_up_header_btn btn ml-2">SIGN UP</button>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item pl-3  dropdown mx-md-auto ">
                <a class="nav-link  active remove_focus text-left" href="#" id="servicesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kids In Need</a>
                <div class="dropdown-menu dropdown-menu border_bottom_blue  p-0" aria-labelledby="servicesDropdown">
                    <div class="text-right mr-3">
                        <span class="btn font-weight-bold close_btn"
                            onclick='document.getElementByClassName(".dropdown").style.display = "none"'>&times;</span>
                    </div>
                    <div class="d-md-flex align-items-start border_bottom_blue">
                        <div class="img_div_2">
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./kids_overview.php">Overview</a>
                            <a class="dropdown-item blue" href="./kids_saftey_threats.php">Safety & Threats</a>
                            <a class="dropdown-item blue" href="./kids_workforce_readiness.php">Workforce Readiness</a>
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./kids_cycle_of_inequity.php">Cycles of Inequity</a>
                            <a class="dropdown-item blue" href="./kids_elevate_youth_voices.php">Elevate Youth
                                Voices</a>
                            <a class="dropdown-item blue" href="./kids_mentorship_voice.php">Mentorship Voices</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item pl-3  dropdown mx-md-auto">
                <a class="nav-link  active remove_focus text-left" href="#" id="servicesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programs</a>
                <div class="dropdown-menu dropdown-menu border_bottom_blue  p-0" aria-labelledby="servicesDropdown">
                    <div class="text-right mr-3">
                        <span class="btn font-weight-bold close_btn"
                            onclick='document.getElementByClassName(".dropdown").style.display = "none"'>&times;</span>
                    </div>
                    <div class="d-md-flex align-items-start border_bottom_blue">
                        <div class="img_div_3">
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./programsOverview.php">Overview</a>
                            <a class="dropdown-item blue" href="./programsSportsRecreation.php">Sports & Recreation</a>
                            <a class="dropdown-item blue" href="./programsEducation.php">Education</a>
                            <a class="dropdown-item blue" href="./programsTheArts.php">The Arts</a>
                            <a class="dropdown-item blue" href="./programsHealthWellness.php">Health & Wellness</a>
                            <a class="dropdown-item blue" href="./programsWorkforceReadiness.php">Workforce
                                Readiness</a>
                        </div>
                        <div class="pt-3 list">
                            <a class="dropdown-item blue" href="./programsCharacterLeadership.php">Character &
                                Leadership</a>
                            <a class="dropdown-item blue" href="./programsTeensYoungAdults.php">Team & Young Adults</a>
                            <a class="dropdown-item blue" href="./programsInitiatives.php">Initiatives</a>
                            <a class="dropdown-item blue" href="./programsYouthOfTheYear.php">Youth of the Year</a>
                            <a class="dropdown-item blue" href="./programsMyFuture.php">My Future</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item pl-3  active mx-md-auto">
                <a class="nav-link remove_focus text-left" href="./news&stories.php">News & Stories</a>
            </li>
            <li class="nav-item pl-3  active mx-md-auto">
                <a class="nav-link remove_focus text-left" href="./ecomerceMain.php">Shop Now</a>
            </li>
        </ul>
    </div>
</nav>