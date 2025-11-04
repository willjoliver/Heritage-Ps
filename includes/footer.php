<?php
/**
 * Footer Include
 * Usage: include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php";
 * 
 * Optional variables to set before including:
 * $back_to_top_id = 'post-1'; // ID for back to top anchor link
 * $phone_link = '8775904629'; // Phone number for mobile footer
 */

// Default values
if (!isset($back_to_top_id)) $back_to_top_id = 'content';
if (!isset($phone_link)) $phone_link = '8775904629';

// Cache busting using file modification time
$style_version = file_exists($_SERVER['DOCUMENT_ROOT'] . '/content/themes/default/style.css') 
    ? filemtime($_SERVER['DOCUMENT_ROOT'] . '/content/themes/default/style.css') 
    : time();
$app_version = file_exists($_SERVER['DOCUMENT_ROOT'] . '/content/themes/default/app.js') 
    ? filemtime($_SERVER['DOCUMENT_ROOT'] . '/content/themes/default/app.js') 
    : time();
?>
<footer id="footer" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <img src="/content/uploads/media/new-images/logo-footer.png" alt="Heritage Payment Solutions Logo"/>
                <p style="font-size:1.3rem;margin-top:.5rem;">Heritage Payment Solutions is a registered ISO of Fifth Third Bank, N.A., Cincinnati, OH.</p>
            </div>
            <a href="#<?php echo $back_to_top_id; ?>" title="Back to top" class="back-to-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
                <span class="hidden">Back to Top</span>
            </a>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-left">
                    <span class="text-uppercase">Copyright &copy; <?php echo date('Y'); ?> | Heritage Payment Solutions <span></span>All Rights Reserved. <a href="/privacy-policy/" title="Privacy Policy">Privacy Policy</a></span>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <span>Digital marketing by <a href="https://phoscreative.com" target="_blank">PHOS Creative</a>.</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="mobile-footer">
    <ul class="x2">
        <li>
            <a href="tel:<?php echo $phone_link; ?>" title="Give us a call">
                <span><i class="hidden-xs fa fa-mobile"></i>Call Us</span>
            </a>
        </li>
        <li>
            <a href="/review/" target="_blank" title="Review Heritage Payment Solutions">
                <span><i class="hidden-xs fa fa-thumbs-up"></i>Review Us</span>
            </a>
        </li>
    </ul>
</div>

<div id="banner-top">
    <span>Call Now To Get Started! <?php echo $phone ?? '(877) 590-4629'; ?></span>
</div>

<!-- CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,700italic,600italic,400italic"/>
<link rel="stylesheet" href="https://www.heritageps.net/content/themes/default/_/css/header.css">
<link rel="stylesheet" href="https://www.heritageps.net/content/themes/default/_/css/footer.css">
<link rel="stylesheet" href="https://www.heritageps.net/content/themes/default/style.css?v=<?php echo $style_version; ?>">

<!-- JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<script src="https://www.heritageps.net/content/themes/default/app.js?v=<?php echo $app_version; ?>"></script>

</body>
</html>
