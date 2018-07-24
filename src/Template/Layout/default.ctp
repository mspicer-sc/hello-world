<?php $cakeDescription = 'CakePHP: the rapid development php framework'; ?>
<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $cakeDescription; ?> : <?php echo $this->fetch('title'); ?></title>
<?php echo $this->Html->meta('icon'); ?>
<?php #echo $this->Html->css('base.css'); ?>
<?php #echo $this->Html->css('cake.css'); ?>
<?php echo $this->Html->css('bootstrap'); ?><?php echo $this->Html->script('jquery-3.3.1'); ?><?php echo $this->Html->script('bootstrap'); ?><?php echo $this->fetch('meta'); ?><?php echo $this->fetch('css'); ?><?php echo $this->fetch('script'); ?>
<style>
#footer{
	background-color:#4e5d6c;
	padding:10px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"> <a class="navbar-brand" href="#">Marc Spicer's Cake CMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li>
    </ul>
  </div>
</nav>
<?= $this->Flash->render() ?>
<div class="container clearfix">
  <?= $this->fetch('content') ?>
</div>
<footer id="footer">
  <div class="row">
    <div class="col-lg-12">
      <p>Made by <a href="#">Marc Spicer</a>. Code released under the <a href="#">MIT License</a>.<br />Based on <a href="https://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fontawesome.io/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>
    </div>
  </div>
</footer>
</body>
</html>
