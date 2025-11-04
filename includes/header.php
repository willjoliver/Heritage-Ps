<?php
/**
 * Header Navigation Include
 * Usage: include 'includes/header.php';
 * 
 * Optional variables to set before including:
 * $phone = '(877) 590-4629'; // Phone number to display
 * $phone_link = '8775904629'; // Phone number for tel: link
 * $active_page = 'about'; // Slug of active page for highlighting
 * $header_class = 'text-center index'; // Additional header classes
 */

// Default values
if (!isset($phone)) $phone = '(877) 590-4629';
if (!isset($phone_link)) $phone_link = '8775904629';
if (!isset($active_page)) $active_page = '';
if (!isset($header_class)) $header_class = 'text-center alt services';
?>
<header class="<?php echo $header_class; ?>">
<div class="header-top hidden-xs">
    <div class="container">
        <div class="row">
            <div class="hidden-xs col-xs-6 col-sm-6 text-left">
                <a href="https://www.heritageps.net/" title="Heritage Payment Solutions">
                    <img src="/content/uploads/media/new-images/logo-header.png" alt="Heritage Payment Solutions Logo"/>
                </a>
            </div>
            <div class="hidden-xs col-xs-6 col-sm-6 text-right">
                <div class="right">
                    <span class="borders hidden"><a target="_blank" href="#" title="">Rep Login</a></span>
                    <span class="phone"><i class="fa fa-mobile-phone"></i> <?php echo $phone; ?></span>
                    <a href="/contact/" title="" class="btn btn-green" style="margin-left:15px;">Get Started Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="nav-container">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                    <span class="icon-bar"><span class="hidden">Icon Bar</span></span>
                    <span class="icon-bar"><span class="hidden">Icon Bar</span></span>
                    <span class="icon-bar"><span class="hidden">Icon Bar</span></span>
                </button>
                <a class="navbar-brand tablet-logo" href="https://www.heritageps.net/" title="Heritage Payment Solutions">
                    <img src="/content/uploads/media/new-images/logo-header.png" alt=" Logo"/>
                </a>
            </div>
            <div id="nav" class="collapse navbar-collapse">
                <ul class="nav-centered">
                    <li class="dropdown <?php echo ($active_page == 'about' || $active_page == 'why-heritage' || $active_page == 'industries-served') ? 'active' : ''; ?>">
                        <a href="https://www.heritageps.net/about/" title="About" class="dropdown-toggle" data-toggle="dropdown">
                            About <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($active_page == 'why-heritage') ? 'active' : ''; ?>">
                                <a href="https://www.heritageps.net/why-heritage/" title="Why Heritage">Why Heritage</a>
                            </li>
                            <li class="<?php echo ($active_page == 'industries-served') ? 'active' : ''; ?>">
                                <a href="https://www.heritageps.net/industries-served/" title="Industries Served">Industries Served</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo ($active_page == 'services' || $active_page == 'integrated-payments') ? 'active' : ''; ?>">
                        <a href="https://www.heritageps.net/services/" title="Services" class="dropdown-toggle" data-toggle="dropdown">
                            Services <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($active_page == 'integrated-payments') ? 'active' : ''; ?>">
                                <a href="https://www.heritageps.net/integrated-payments/" title="Integrated Payment Systems">Integrated Payment Systems</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo ($active_page == 'product-solutions' || $active_page == 'edge' || $active_page == 'etrak' || $active_page == 'sixpac') ? 'active' : ''; ?>">
                        <a href="https://www.heritageps.net/product-solutions/" title="Product Solutions" class="dropdown-toggle" data-toggle="dropdown">
                            Product Solutions <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($active_page == 'edge') ? 'active' : ''; ?>">
                                <a href="https://www.heritageps.net/edge/" title="Edge">Edge</a>
                            </li>
                            <li class="">
                                <a href="https://etrak.com/" target="_blank" title="Etrak">Etrak</a>
                            </li>
                            <li class="<?php echo ($active_page == 'sixpac') ? 'active' : ''; ?>">
                                <a href="https://www.heritageps.net/sixpac/" title="SixPac">SixPac</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo ($active_page == 'partners') ? 'active' : ''; ?>">
                        <a href="https://www.heritageps.net/partners/" title="Partners">Partners</a>
                    </li>
                    <li class="<?php echo ($active_page == 'affiliates') ? 'active' : ''; ?>">
                        <a href="https://www.heritageps.net/affiliates/" title="Affiliates">Affiliates</a>
                    </li>
                    <li class="<?php echo ($active_page == 'contact') ? 'active' : ''; ?>">
                        <a href="https://www.heritageps.net/contact/" title="Contact">Contact</a>
                    </li>
                </ul>
                <a href="tel:<?php echo $phone_link; ?>" class="tablet-phone hidden-sm"><?php echo $phone; ?></a>
            </div>
        </div>
    </nav>
</div>
<div class="content"><div class="container"><div class="row"></div></div></div>
</header>