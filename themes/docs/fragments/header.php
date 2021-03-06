<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="<?php echo $mk_settings ["author"]; ?>">

    <title><?php echo $settings ["sitetitle"] . ' | ' . $mk_settings ["title"]; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $theme ["htmlresources"]; ?>css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $theme ["htmlresources"]; ?>css/simple-sidebar.css" type="text/css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $theme ["htmlresources"]; ?>css/bytn.css" type="text/css" rel="stylesheet">
        
        <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $theme ["htmlresources"]; ?>css/font-awesome.min.css" type="text/css">
    
    <?php if (file_exists($settings ["sitepath"] . '/config/analytics.php')){
	include ($settings ["sitepath"] . '/config/analytics.php');
    } ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
