<?php 

//404page.php
error_reporting(0);

$error = $_SERVER["REDIRECT_STATUS"];

$test = '404';

$error_title = '';
$error_message = '';
$error_message2 = '';

$error_t = '404 Site the site found is available!';
$error_e = '404! Site not found!';
$error_T = '404 Site';

$error_string = 'Error-Code';

$error1 = '';

$error_message3 = '';

$error_png = 'yes.png';

$uri='';
$error_message4 = '';

if($error == 404) {
    $error_title = '404 Page Not Found';
    $error_message = 'The document/file requested was not found on this server.';
    $error_message2 = 'This error page is invalid or not available or online.';
    $error_T = '404! Site not found!';
    $error_png = 'not.png';
    $uri = current_url();
    $error_message4 = 'In the .htaccess directory there are not a URL wiht the name: ';

}else {
    $error_T = '404 Site the site found is available!';
    $error_png = 'yes.png';
    $uri = "";
    $error_message4 = '';
}

if($error == 404) {
    $error_message3 = 'Site not found.';
}

if($erro == 404) {
    $error_string = 'Error-Code:';
}else{
    $error_string = '';
}

function current_url() {
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $validURL = str_replace('&', '&amp', $url);

    return $validURL;
}


?>

<!DOCTYPE html>
<html lang="en-en">
    <head>
        <title><?php echo $error_T?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $error_png ?>"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1><?php echo 'You are running a 404 Page in PHP using .htaccess File'; ?></h1>
            <h1><?php echo $error_title; ?></h1>
            <h5><?php echo $error_message; ?></h5>
            <h6><?php echo $error_message4 .$uri; ?></h6>
            <a href="404page">ErrorSITE$=$404!</a>
            <a href="index">Home</a>
        </div>
        <div class="form-group form text-center" style="margin-bottom:10">
            <h2><?php echo $error_message2; ?></h2>
            <h2><?php echo 'Code: '. $error_string. $error; ?></h2>
            <h2><?php echo $error_message3; ?></h2>
        </div>
        <div class="form-group form text-decoration text-align:justify!important" style="margin-bottom">
            <h5><?php echo 'Developer-Studio 2019-2022 copyright'; ?></h5>
            <h5><?php echo 'AquaBlue-Stdio 2021-2022 copyright'; ?></h5>
            <h5><?php echo 'Insider Cube-Studio 2021-2022 copyright'; ?></h5>
            <h5><?php echo 'GameMotion-Studio 2021-2022 copyright'; ?></h5>
            <h5><?php echo 'Mineccraft1904-Studio 2019-2022 copyright'; ?></h5>
            <h5><?php echo 'Vinala-Cup-Noschen Studio 2021-2022 copyright'; ?></h5>
            <h5><?php echo 'Doubley-Studio 2019-2022 copyright'; ?></h5>
            <h5><?php echo 'Doublex 2019-2022 copyright'; ?></h5>
            <h5><?php echo 'GoOnTheTop10Games 2019-2022 copyright'; ?></h5>
        </div>
    </body>
</html>
