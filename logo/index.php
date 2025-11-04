<?php require_once '../config.php' ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $_site->name.' Logos Page' ?></title>
<style>
  body{background-color:#FFF;}
  ul{padding:0;list-style:none;}
  ul li{display:block;margin-bottom:20px;}
  ul li a{display:block;text-align:center;}
  img{max-width:100%;width:auto;display:block;margin:50px auto;}
</style>
</head>

<body>
  <img src="logo.png" alt="<?php echo $_site->name ?> Logo" />

  <ul class="text-center">
    <?php if (file_exists('logo.png')) echo '<li><a href="logo.png" title="PNG format" download>PNG</a></li>'; ?>
    <?php if (file_exists('logo.jpg')) echo '<li><a href="logo.jpg" title="JPG format" download>JPG</a></li>'; ?>
    <?php if (file_exists('logo.gif')) echo '<li><a href="logo.gif" title="GIF format" download>GIF</a></li>'; ?>
    <?php if (file_exists('logo.ai')) echo '<li><a href="logo.ai" title="AI format" download>AI</a></li>'; ?>
    <?php if (file_exists('logo.eps')) echo '<li><a href="logo.eps" title="EPS format" download>EPS</a></li>'; ?>
    <?php if (file_exists('logo.pdf')) echo '<li><a href="logo.pdf" title="PDF format" download>PDF</a></li>'; ?>
    <?php if (file_exists('logo.psd')) echo '<li><a href="logo.psd" title="PSD format" download>PSD</a></li>'; ?>
  </ul>
</body>
</html>
