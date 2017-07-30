<!doctype html>
<html>

<head>
    <title>User Stats</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/userstyles.css">
</head>

<body>
    <div class="body-define indexContents">
        <div id="indexHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>User Stats</h1>
                        <p></p>
                        <p></p>
                        <?php 
                            include ('php/calculatepercentage.php');
                        ?>

                        <img class="userImg" src="<?php echo htmlspecialchars($_SESSION["img"]); ?>" alt="userSprite" />
                        <p>
                            <?php echo "Name: ".$_SESSION['name']."<br />";?></p>
                        <p>
                            <?php echo "Class: ".$_SESSION['cls']."<br />";?></p>  
                            
                        <p>
                            <?php echo "Stamina: ".$_SESSION['stm']."<br />";?></p>
                        <p>
                        <p>
                            <?php echo "Wisdom ".$_SESSION['wis']."<br />";?></p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: <?php echo $_SESSION['perc']."%" ?>">
                                <?php echo $_SESSION["perc"] ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
