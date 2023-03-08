<!DOCTYPE html>
<html lang="en">
<?php include_once(dirname(__FILE__) . "/header.php"); ?>
<title>Statistics</title>

<?php include_once "/var/www/html/Classes/getFromBucket.php"; ?>
<body>
    <!-- Include navbar  -->
    <?php include_once(dirname(__FILE__) . "/navbar.php"); ?>
    <!-- End Include navbar -->
    
    <!-- Start statistics -->
    <div class="container ml-lg-5">
        <div class="row ml-5 pl-lg-5 pt-5 mt-5">
            <div class="col-12 mt-5 mb-2">
                <h2 style="font-weight: 700;">Statistics of the generated colorectal cancer risk factors</h2>
                <h4 class="pb-4" style="font-weight: 600; color:#4D4D4D;">Here is the graph of the trending risk factors generated from scientific literature through text mining</h4>
                <?php include (dirname(__FILE__) . "/extractStatistics.php"); ?>
            </div>
        </div>
        <div class="row ml-5 pl-lg-5">
            <div class="col-12 mt-3">
                <h5>In the graph above, each bar represents a group of risk factors. The number of each group provides information on which risk factor is currently discussed more by people. In other words, it represents the activeness of the risk factor. For instance, 
                    Personal History risk factor has the highest number because there are more articles discussing personal history that causes colorectal cancer. While aged is the least discussed because there is a low rate of people who are diagnosed with colorectal cancer due to aged.</h5>
            </div>
        </div>
    </div>
    <!-- End statistics -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Include footer -->
    <?php include_once(dirname(__FILE__) . "/footer.php"); ?>
    <!-- End Include footer -->
</body>
</html>