           <!-- ============================================================== -->
           <!-- Topbar header - style you can find in pages.scss -->
           <!-- ============================================================== -->
           <header class="topbar" data-navbarbg="skin5" style="background: #071227;">
               <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                   <div class="navbar-header" data-logobg="skin5" style="background: #071227;">
                       <!-- This is for the sidebar toggle which is visible on mobile only -->
                       <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                               class="ti-menu ti-close"></i></a>
                       <!-- ============================================================== -->
                       <!-- Logo -->
                       <!-- ============================================================== -->
                       <a class="navbar-brand" href="index.php">
                           <!-- Logo icon -->
                           <b class="logo-icon ">
                               <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                               <!-- Dark Logo icon -->
                               <img src="../assets/images/logo-icon.png" alt="homepage"
                                   style="width: 55px;height: 50px;" class="light-logo" />

                           </b>
                           <!--End Logo icon -->
                           <!-- Logo text -->
                           <span class="logo-text">
                               <!-- dark Logo text -->
                               <img src="../assets/images/logo.png" style="width: 150px;height: 20px;margin-top:20px;"
                                   alt="homepage" class="light-logo" />

                           </span>
                           <!-- Logo icon -->
                           <!-- <b class="logo-icon"> -->
                           <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                           <!-- Dark Logo icon -->
                           <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                           <!-- </b> -->
                           <!--End Logo icon -->
                       </a>
                       <!-- ============================================================== -->
                       <!-- End Logo -->
                       <!-- ============================================================== -->
                       <!-- ============================================================== -->
                       <!-- Toggle which is visible on mobile only -->
                       <!-- ============================================================== -->
                       <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                           data-toggle="collapse" data-target="#navbarSupportedContent"
                           aria-controls="navbarSupportedContent" aria-expanded="false"
                           aria-label="Toggle navigation"><i class="ti-more"></i></a>
                   </div>
                   <!-- ============================================================== -->
                   <!-- End Logo -->
                   <!-- ============================================================== -->
                   <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5"
                       style="background: #071227 !important;">
                       <!-- ============================================================== -->
                       <!-- toggle and nav items -->
                       <!-- ============================================================== -->
                       <ul class="navbar-nav float-left mr-auto">
                           <li class="nav-item d-none d-md-block"><a
                                   class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                   data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                           <!-- ============================================================== -->
                           <!-- create new -->
                           <!-- ============================================================== -->

                           <!-- ============================================================== -->
                           <!-- Search -->
                           <!-- ============================================================== -->

                       </ul>
                       <!-- ============================================================== -->
                       <!-- Right side toggle and nav items -->
                       <!-- ============================================================== -->
                       <ul class="navbar-nav float-right">
                           <!-- ============================================================== -->
                           <!-- Comment -->
                           <!-- ============================================================== -->
                           <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                           <!-- ============================================================== -->
                           <!-- End Comment -->
                           <!-- ============================================================== -->
                           <!-- ============================================================== -->
                           <!-- Messages -->
                           <!-- ============================================================== -->




                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                       class="font-24 mdi mdi-bell" style="position:relative;"></i>
                                   <?php
                                require_once "./config.php";

                                $sql = "SELECT COUNT(*) AS number4 FROM `order_notification` WHERE `status` = 'pending'";
                                $result = $link->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                   <p style="position:absolute;top: 12px;right:6px;" class=" badge badge-primary">
                                       <?php echo $row['number4'] ?></p>

                                   <?php  
                                }
                                    } else {
                                        echo "0";
                                    }
                                ?>
                               </a>
                               <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown"
                                   aria-labelledby="2">
                                   <ul class="list-style-none"
                                       style="height: 350px;overflow-x: hidden;overflow-y: scroll;">

                                       <?php
                        require_once "config.php";

                        $sr_no = 1;
                        $sql = "SELECT * FROM `order_notification`  ORDER BY id DESC;";
                            
                        $result = $link->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>

                                       <?php if($row["status"] == 'pending'){ ?>
                                       <li class="bg-light">
                                           <div class="">
                                               <!-- Message -->
                                               <a href="#.php?id=<?php echo $row["order_id"]; ?>"
                                                   class="link border-top">
                                                   <div class="d-flex no-block align-items-center p-10">
                                                       <!-- <img src="../images/<?php echo $row["image"]; ?>" style="border-radius: 100%;width: 40px;height: 40px;" alt=""> -->
                                                       <div class="m-l-10">
                                                           <h5 class="m-b-0"><?php echo $row["user_name"]; ?></h5>
                                                           <!-- <span class="mail-desc"><?php echo substr($row["description"], 0, 25);echo "..."; ?></span>  -->
                                                       </div>
                                                   </div>
                                               </a>

                                           </div>
                                       </li>
                                       <?php }else{?>
                                       <li class="bg-white">
                                           <div class="">
                                               <!-- Message -->
                                               <a href="#.php?id=<?php echo $row["order_id"]; ?>"
                                                   class="link border-top">

                                                   <div class="d-flex no-block align-items-center p-10">
                                                       <!-- <img src="../images/<?php echo $row["image"]; ?>" style="border-radius: 100%;width: 40px;height: 40px;" alt=""> -->
                                                       <div class="m-l-10">
                                                           <h5 class="m-b-0"><?php echo $row["user_name"]; ?></h5>
                                                           <!-- <span class="mail-desc"><?php echo substr($row["description"], 0, 25);echo "..."; ?></span>  -->
                                                       </div>
                                                   </div>
                                               </a>

                                           </div>
                                       </li>
                                       <?php }?>


                                       <?php  
                                }
                                    } else {
                                        
                                    ?>
                                       <div class="text-center pt-5">
                                           <h3>NO ORDER PLACED NOW</h3>
                                       </div>
                                       <?php }?>
                                   </ul>
                               </div>
                           </li>





                           <!-- ============================================================== -->
                           <!-- End Messages -->
                           <!-- ============================================================== -->

                           <!-- ============================================================== -->
                           <!-- User profile and search -->
                           <!-- ============================================================== -->
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                       src="../images/<?php echo $_SESSION["image"] ?>" alt="user"
                                       class="rounded-circle" width="31"></a>
                               <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                   <a class="dropdown-item" href="./profile.php"><i class="ti-user m-r-5 m-l-5"></i> My
                                       Profile</a>

                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="./change_password.php"><i
                                           class="ti-key m-r-5 m-l-5"></i>Change Password</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="./logout.php"><i
                                           class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                   <div class="dropdown-divider"></div>
                                   <div class="p-l-30 p-10"><a href="./profile.php"
                                           class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                               </div>
                           </li>
                           <!-- ============================================================== -->
                           <!-- User profile and search -->
                           <!-- ============================================================== -->
                       </ul>
                   </div>
               </nav>
           </header>
           <!-- ============================================================== -->
           <!-- End Topbar header -->
           <!-- ============================================================== -->
           <!-- ============================================================== -->
           <!-- Left Sidebar - style you can find in sidebar.scss  -->
           <!-- ============================================================== -->
           <aside class="left-sidebar" data-sidebarbg="skin5">
               <!-- Sidebar scroll-->
               <div class="scroll-sidebar" style="background: #071227;">
                   <!-- Sidebar navigation-->
                   <nav class="sidebar-nav">
                       <ul id="sidebarnav" class="p-t-30" style="background: #071227;">

                           <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                   href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                       class="hide-menu">Dashboard</span></a></li>



                           <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                   href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                       class="hide-menu">Ecommerce</span></a>
                               <ul aria-expanded="false" class="collapse  first-level">

                                   <li class="sidebar-item"><a href="./add_products.php" class="sidebar-link"><i
                                               class="mdi mdi-note-plus"></i><span class="hide-menu"> Add Products
                                           </span></a></li>

                                   <li class="sidebar-item"><a href="list_products.php" class="sidebar-link"><i
                                               class="mdi mdi-border-inside"></i><span class="hide-menu"> list Products
                                           </span></a></li>

                                   <li class="sidebar-item"><a href="./list_order.php" class="sidebar-link"><i
                                               class="mdi mdi-border-inside"></i><span class="hide-menu"> list Orders
                                           </span></a></li>

                                   <li class="sidebar-item"><a href="./add_banner.php" class="sidebar-link"><i
                                               class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Baners
                                           </span></a></li>
                                   <li class="sidebar-item"><a href="./list_banner.php" class="sidebar-link"><i
                                               class="mdi mdi-border-inside"></i><span class="hide-menu"> List Baners
                                           </span></a></li>
                               </ul>
                           </li>

                           <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                   href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                       class="hide-menu">News & Stories</span></a>
                               <ul aria-expanded="false" class="collapse  first-level">

                                   <li class="sidebar-item"><a href="./add_news_and_stories.php" class="sidebar-link"><i
                                               class="mdi mdi-note-plus"></i><span class="hide-menu"> Add News & Stories
                                           </span></a></li>

                                   <li class="sidebar-item"><a href="./list_news_and_stories.php" class="sidebar-link"><i
                                               class="mdi mdi-border-inside"></i><span class="hide-menu"> list News & Stories
                                           </span></a></li>


                               </ul>
                           </li>










                       </ul>
                   </nav>
                   <!-- End Sidebar navigation -->
               </div>
               <!-- End Sidebar scroll-->
           </aside>
           <!-- ============================================================== -->
           <!-- End Left Sidebar - style you can find in sidebar.scss  -->
           <!-- ============================================================== -->