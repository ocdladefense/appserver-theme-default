<?php
/*
define("APP_URL", "https://appdev.ocdla.org");
define("STORE_URL","https://ocdla--ocdpartial.sandbox.my.site.com");
define("ORG_URL","https://test.ocdla.org");
define("LOD_URL", "https://lodtest.ocdla.org");

http://www.menucool.com/tooltip/css-tooltip
*/
?>
<ul id="desktop-icons" class="sidebar-links">
    <li id="home" class="side-menu-item tooltip">
        <a href="/home">
            <i class="fas fa-home fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>Home</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="search" class="side-menu-item tooltip">
        <a href="/search">
            <i class="fa-solid fa-magnifying-glass fa-2x"></i>
        </a>
        <div class="right">
            <h3>Search</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="library-of-defense" class="side-menu-item tooltip">
        <a target="_new" href="<?php print LOD_URL; ?>">
            <i class="fa-solid fa-scale-balanced fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>Library of Defense</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="ocdla-org" class="side-menu-item tooltip">
        <a target="_new" href="<?php print ORG_URL; ?>">
            <i class="fa-solid fa-building fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>OCDLA Homepage</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="legal-resource-library" class="side-menu-item tooltip">
        <a href="/legal-resource-library">
            <i class="fa-solid fa-book-bookmark fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>Legal Resource Library</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    

    <li class="side-menu-item tooltip">
        <a href="<?php print STORE_URL . "/OcdlaEvents"; ?>" target="_new">
            <i class="fas fa-calendar-day fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>OCDLA Store</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="jobs" class="side-menu-item tooltip">
        <a href="/jobs">
            <i class="fas fa-briefcase fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>Jobs</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="car" class="side-menu-item tooltip">
        <a href="/car/list">
            <i class="fa-solid fa-gavel fa-2x"></i>
        </a>
        <div class="right">
            <h3>Criminal Appellate Reviews</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li class="side-menu-item tooltip">
        <a href="<?php print STORE_URL . "/Videos"; ?>" target="_new">
            <i class="fas fa-video fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>Videos</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="member" class="side-menu-item tooltip">
        <a href="/directory/members">
            <i class="fa-solid fa-people-group fa-2x"></i>
        </a>
        <div class="right">
            <h3>Membership Directory</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li id="expert" class="side-menu-item tooltip">
        <a href="/directory/experts">
            <i class="fa-solid fa-person-chalkboard fa-2x"></i>
        </a>
        <div class="right">
            <h3>Expert Witness Diretory</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>

    <li class="side-menu-item tooltip">
        <a href="<?php print ORG_URL ."/contact-us"; ?>" target="_new">
            <i class="fas fa-mobile-alt fa-2x" aria-hidden="true"></i>
        </a>
        <div class="right">
            <h3>Contact OCDLA</h3>
            <!-- <p>LOD Description here</p> -->
            <i></i>
        </div>
    </li>
</ul>