<?php require('inc/random_quotes.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chris Crane</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/main.css" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center">Chris Crane</h1>
                    <p>
                        <img id="imgProfilePhoto" src="/images/Chris_Crane_Universal.jpg" class="img-fluid rounded shadow mx-auto d-block" alt="Chris Crane with wife at Universal Studios" />
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <h2 class="text-center">About Me</h2>
                    <p>
                        I live in Newfoundland, Canada, with my wife and 3 kids. For the past 5 years I have been employed as
                        a Manager of IT, and as a Senior Systems Analyst for 13 years prior to that. What seems like ages ago
                        I completed my Bachelors Degree in Computer Science and Applied Mathematics.
                    </p>
                    <p>
                        I am really looking forward to interacting with everyone in the course over the next few months!
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <h2 class="text-center">Random Quote</h2>
                    <blockquote>
                        <p class="font-italic">
                            <?php echo $randquote["quote"] ?>&quot;
                        </p>
                        <p class="font-weight-bold">
                            <?php echo $randquote["author"] ?>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- jQuery JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    </body>
</html>