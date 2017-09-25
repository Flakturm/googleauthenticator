<?php
require 'vendor/autoload.php';
$authenticator = new PHPGangsta_GoogleAuthenticator();
$secret = $authenticator->createSecret();


$website = 'Google Authenticator APP';
$title= 'DEMO';
$qrCodeUrl = $authenticator->getQRCodeGoogleUrl( $title, $secret, $website );

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $website; ?></title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/master.css">
    </head>
    <body class="bg-faded">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 text-center">
                    <h1>Google Authenticator</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <img class="mx-auto d-block" src="//lh5.googleusercontent.com/-grWf5z0PGeY/TxqNGtUIm6I/AAAAAAAAABI/LgiCjxruWXU/s128/authenticator-128.png">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <img class="mx-auto d-block img-responsive" src="<?php echo $qrCodeUrl; ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3 clearfix">
                    <form id="otp-form" class="" action="" method="post">
                        <div class="form-group">
                            <input type="number" name="otp" value="" class="form-control" placeholder="xxxxxx" required>
                        </div>
                        <input type="hidden" name="secret" value="<?php echo $secret; ?>">
                        <button type="submit" class="btn btn-lg btn-block btn-primary float-right" data-loading-text="Verifying...">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Check
                        </button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3 mt-3">
                    <div class="alert" role="alert"></div>
                </div>
            </div>
        </div>
    </body>
    <script src="//code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="/js/script.js" charset="utf-8"></script>
</html>
