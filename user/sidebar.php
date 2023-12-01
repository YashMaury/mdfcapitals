<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="">
        <div class="mobile-only-brand pull-left">

            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="dashboard.php">

                        <img class="brand-img img-responsive" style="margin: 0px auto; max-width: 160px;"
                            src="../cclogo.png" />
                    </a>
                </div>
            </div>




            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left mobile-only-view"
                href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>



            <li class="menu-item list-inline-item navmenu " style="list-style: none; display: none;"><a
                    class="navbar-toggle nav-link">
                    <div class="lines"><span></span><span></span><span></span></div>
                </a>

            </li>



            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i
                    class="zmdi zmdi-more"></i></a>



        </div>



        <div id="ctl00_mobile_only_nav" class="mobile-only-nav ">


            <ul class="nav navbar-right top-nav ">

                <li class="dropdown auth-drp">
                    <a id="ctl00_lbtnLogOutTop"
                        href="javascript:__doPostBack(&#39;ctl00$lbtnLogOutTop&#39;,&#39;&#39;)"><img
                            src="images/users.png" id="ctl00_imgUserDP" alt="user" class="user-auth-img img-circle"
                            style="display: none;" /><img src="images/users.png" alt="user"
                            class="user-auth-img img-circle" /></a>

                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                        data-dropdown-out="flipOutX">
                        <li></li>
                        <li>
                            <a href="EditProfile.php"><i class="zmdi zmdi-edit "></i><span>Edit Profile </span></a>
                        </li>
                        <li>
                            <a href="ChangePassword.php"><i class="zmdi zmdi-email"></i><span>Change
                                    Password</span></a>
                        </li>
                        <li class="divider"></li>

                        <li>
                            <i class="zmdi zmdi-power"></i><span>Log Out</span>
                        </li>
                    </ul>
                </li>





            </ul>

        </div>

    </div>
    <div class="clearfix"></div>

</nav>

<div class="fixed-sidebar-left ">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="down-list "><a href="dashboard.php" data-toggle="collapse" data-target="#Main_2121_dr">
                <div class="pull-left">
                    <i class=" fa fa-home mr-20"></i><span class="right-nav-text">Dashboard</span>
                </div>
                <div class="clearfix">
                </div>
            </a></li>


        <li class="down-list"><a href="javascript:void(0);" data-toggle="collapse" data-target="#LIQUIDITY">
                <div class="pull-left">
                    <i class="zmdi zmdi-assignment mr-20"></i><span class="right-nav-text">Invest</span>
                </div>
                <div class="pull-right">
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
                <div class="clearfix">
                </div>
            </a>
            <ul id="LIQUIDITY" class="collapse collapse-level-1 two-col-list">
                <li><a href="invest.php">New Invest</a></li>
                <li><a href="my-invest.php">My Invest</a></li>


            </ul>
        </li>




        <li class="down-list"><a href="javascript:void(0);" data-toggle="collapse" data-target="#with">
                <div class="pull-left">
                    <i class="zmdi zmdi-download mr-20"></i><span class="right-nav-text">WITHDRAW</span>
                </div>
                <div class="pull-right">
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
                <div class="clearfix">
                </div>
            </a>
            <ul id="with" class="collapse collapse-level-1 two-col-list">
                <li><a href="withdraw.php">Withdraw Request</a></li>
                <li><a href="my-withdraw.php">Withdraw Report</a></li>


            </ul>
        </li>






        <li class="down-list"><a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr">
                <div class="pull-left">
                    <i class="zmdi zmdi-assignment mr-20"></i><span class="right-nav-text">P2P Transfer</span>
                </div>
                <div class="pull-right">
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
                <div class="clearfix">
                </div>
            </a>
            <ul id="form_dr" class="collapse collapse-level-1 two-col-list">
                <li><a href="transfer.php">New Transfer</a></li>

                <!--<li><a href="DirectIncome.aspx">Transaction Details </a></li>-->


            </ul>
        </li>




        <!-- <li class="down-list"><a href="Trans-Wallet">-->
        <!--    <div class="pull-left">-->
        <!--        <i class="zmdi zmdi-card mr-20"></i><span class="right-nav-text">Fund Transfer</span>-->
        <!--    </div>-->
        <!--    <div class="clearfix">-->
        <!--    </div>-->
        <!--</a></li>-->





        <li class="down-list"><a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr">
                <div class="pull-left">
                    <i class=" fa fa-sitemap mr-20"></i><span class="right-nav-text">COMMUNITY</span>
                </div>
                <div class="pull-right">
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
                <div class="clearfix">
                </div>
            </a>
            <ul id="app_dr" class="collapse collapse-level-1">
                <li><a href="det.php?p=rl">Referral Link</a></li>
                <li><a href="det.php?p=md">My Direct Team</a></li>
                <!-- Glintel::Need to validate -->
                <!-- placement is not working hard coded ID is fix -->
                <li><a href="det.php?p=t">My Team</a></li>
            </ul>
        </li>

        <li class="down-list">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Tran1">
                <div class="pull-left"><i class="zmdi zmdi-assignment mr-20"></i><span
                        class="right-nav-text">Earnings</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Tran1" class="collapse collapse-level-1">



                <li><a href="daily-income.php">Daily Income </a></li>
                <li><a href="level-income.php">Level Income </a></li>
                <li><a href="reward-income.php">Reward Income </a></li>

            </ul>
        </li>







        <li>
            <hr class="light-grey-hr mb-10" />
        </li>
        <li class="down-list">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#setting">
                <div class="pull-left"><i class="zmdi zmdi-settings  mr-20"></i><span
                        class="right-nav-text">Settings</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="setting" class="collapse collapse-level-1">
                <li><a href="det.php?p=p">Profile</a></li>
                <li><a href="det.php?p=ps">Password</a></li>

            </ul>
        </li>





        <li class="down-list"><a href="support.php">
                <div class="pull-left">
                    <i class="fa fa-user-secret  mr-20"></i><span class="right-nav-text">SUPPORT</span>
                </div>
                <div class="clearfix">
                </div>
            </a></li>

        <li class="down-list">
            <a id="ctl00_lbtnLogout" href="logout.php">
                <div class="pull-left"><i class="zmdi zmdi-power mr-20"></i><span class="right-nav-text"> Logout</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
    </ul>
</div>

<div class="right-sidebar-backdrop">
</div>