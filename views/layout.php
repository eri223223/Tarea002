<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LODZ</title>

    <link rel="icon" type="image/x-icon" href="<?php echo APP_URL ?>../views/img/logop.png" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL ?>views/css/style.css">
    <link rel="icon" type="image/x-icon" href="views/src/logo-small.png">
</head>

</head>
<body>
    
    <header class="main-header">
        <!-- Main Box -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home Type One</a></li>
                                            <li><a href="index-2.html">Home Type Two</a></li>
                                            <li class="dropdown"><a href="index.html">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                        </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown"><a href="#">Event</a>
                                        <ul>
                                            <li><a href="event-list.html">Event List View</a></li>
                                            <li><a href="event-grid.html">Event Grid View</a></li>
                                            <li><a href="event-detail.html">Event Detail</a></li>
                                        </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>                              
                                    <li class="dropdown"><a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
                                            <li><a href="gallery-grid.html">Gallery 03 Column</a></li>
                                        </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                                            <li><a href="blog-list.html">Blog With Sidebar</a></li>
                                            <li><a href="blog-detail-1.html">Blog Detail 01</a></li>
                                            <li><a href="blog-detail-2.html">Blog Detail 02</a></li>
                                            <li><a href="error-page.html">Error Page</a></li>
                                        </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <!--Search Box-->
                            <div class="dropdown dropdown-outer">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--End earch Box-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse collapse clearfix">
                             <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Type One</a></li>
                                        <li><a href="index-2.html">Home Type Two</a></li>
                                        <li class="dropdown"><a href="index.html">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                            </ul>
                                        <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown"><a href="#">Event</a>
                                    <ul>
                                        <li><a href="event-list.html">Event List View</a></li>
                                        <li><a href="event-grid.html">Event Grid View</a></li>
                                        <li><a href="event-detail.html">Event Detail</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>                              
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
                                        <li><a href="gallery-grid.html">Gallery 03 Column</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-grid.html">Blog Grid View</a></li>
                                        <li><a href="blog-list.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-detail-1.html">Blog Detail 01</a></li>
                                        <li><a href="blog-detail-2.html">Blog Detail 02</a></li>
                                        <li><a href="error-page.html">Error Page</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
    </header>

    <main>
    <?php include_once "views/" . ('../' . ($view ?? "index.php")); ?>
    </main>

    <footer>
        
    </footer>
</body>
</html>