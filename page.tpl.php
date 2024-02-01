<?php

// This is the template for the default theme which happens to be for OCDLA.....


 $user = current_user();
 
 $loginMessage = !$user->is_logged_in() ? "Logged in as Guest" : "Hello {$user->getFirstName()}";
 // $profileUrl = !$user->is_logged_in() ? "#" : "/user/profile";
 $profileUrl = STORE_URL . "/AccountManager";
?>


<body style="background-color: rgba(191,161,46,1.0); color: rgba(255,255,255,1.0);">
    
    <!-- This is where the drawer menu items will go -->
    
    <?php 

        component("drawer", "sidebar", array("secondary_links" => $secondary_links));

    ?>
    
    <div id="wrapper" style="min-height: 100%; min-width: 100%; background-color: #fff;">

        <div id="header">

            <div id="header-content" class="header-content">

				<div id="drawer-toggle">
                    <span id="drawer-toggle-button" style="display:inline-block;">&#9776;</span>
                </div>

                <div id="logo">
                    <a href="<?php print APP_URL; ?>">
                        <img src="/content/images/logo.png" />
                    </a>
                </div>

                <div id="banner">&nbsp;</div>

                <div id="float-right">

                    <div id="search-form">

                        <form class="devsite-search-form" action="https://developers.google.com/s/results" method="get">

                            <div class="devsite-search-container">
                                <div class="devsite-searchbox">
                                    <input style="padding:4px;" aria-activedescendant="" aria-autocomplete="list"
                                        aria-label="Search" aria-haspopup="false" aria-multiline="false"
                                        autocomplete="off" class="devsite-search-field devsite-search-query" name="q"
                                        placeholder="Search" type="text" value=""
                                        aria-controls="devsite-search-popout-container-id-1">
                                    <div class="devsite-search-image material-icons" aria-hidden="true"></div>
                                </div>
                            </div>

                            <div class="devsite-popout" id="devsite-search-popout-container-id-1">
                                <div class="devsite-popout-result devsite-suggest-results-container" devsite-hide=""></div>
                            </div>

                        </form>

                    </div>

                    <div id="user-area">

                        <?php if($user->is_logged_in()) : ?>
                            <a class="login" href="/logout">logout</a>
                        <?php else : ?>
                            <a class="login" href="/login">login</a>
                        <?php endif; ?>

                        <a id="user-icon" href="<?php print $profileUrl; ?>" title="<?php print $loginMessage; ?>">
                            <svg id="user-widget" width="40" height="40" viewBox="0 0 100 100"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <circle cx="50" cy="50" r="50" style="fill: rgba(210, 165, 80);" />
                                    <text x="50%" y="50%" font-size="3.0em" fill="#ffffff" text-anchor="middle"
                                        stroke="#ffffff" stroke-width="0px"
                                        dy=".3em"><?php print $user->getInitials(); ?></text>
                                </g>
                            </svg>
                        </a>

                    </div><!-- end user-area -->

                </div><!-- end float-right -->


                <!-- <div class="icon" id="mobile-icon">&#9776;</div> -->
            </div>

        </div>

        <!--end header-->




        <div id="main">

            <div id="container">

                <div class="container-content">
                            
                    <div id="container-left" class="column column-left">

                            <?php include "desktop-links.tpl.php"; ?>
                    </div>


                    <div id="stage" class="column column-middle">

                        <div id="stage-content">

                            <?php echo $content; ?>

                        </div>

                    </div>


                    <div id="container-right" class="column column-right">

                            <!-- Context UI-->
                    </div>

                </div> <!-- end container-content -->

            </div>
            <!--end container-->

        </div> <!--end page -->


        <div id="modal-backdrop">
            <div id="modal">
                <div id="modal-content">

                
                </div>
                <div id="loading">
                    <div id="loading-wheel"></div>
                </div>
            </div>
        </div>

        <div id="loading">
            <div id="loading-wheel"></div>
        </div>

        <div id="positioned-context-container"></div>

    </div>


    <?php require "footer.tpl.php"; ?>

                        
</body>


