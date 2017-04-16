<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>E-Recruitment | Login</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=base_url('css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/normalize.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/login.css')?>">
    <link rel="shortcut icon" href="<?= base_url('images/favicon.ico'); ?>">
    <script src="<?=base_url('js/prefixfree.min.js')?>"></script>
</head>

<body>
<div class="wrapper">
    <form class="login" method="post" action="<?=site_url('auth/verifylogin')?>">
        <p class="title">Log In - PT. Mangli Djaya Raya</p>
        <?=$this->session->flashdata('login')?>
        <?=form_error('username')?>
        <input type="text" size="20" placeholder="Username" name="username" autofocus/>
        <i class="fa fa-user"></i>
        <?=form_error('password')?>
        <input type="password" size="20" placeholder="Password" name="password" />
        <i class="fa fa-key"></i>
        <button type="submit">
            <i class="spinner"></i>
            <span class="state">Log in</span>
        </button>
    </form>
    <footer><a target="blank" href="http://www.unej.ac.id/">Universitas Jember</a></footer>
    </p>
</div>
<script src="<?=base_url('js/jquery-3.2.1.min.js')?>"></script>

<script src="<?=base_url('js/index.js')?>"></script>

</body>
</html>
