<!DOCTYPE html>
<html lang="en">
<?php include_once(dirname(__FILE__) . "/header.php"); ?>
<title>Risk factors</title>

<?php include_once "/var/www/html/Classes/getFromBucket.php"; ?>
<body>
    <!-- Include navbar  -->
    <?php include_once(dirname(__FILE__) . "/navbar.php"); ?>
    <!-- End Include navbar -->
    
    <!-- Start generated topics -->
    <div class="container ml-lg-5">
        <div class="row ml-5 pl-lg-5 pt-5 mt-5">
            <div class="col-12 mt-5 mb-2">
                <h2 style="font-weight: 700;">Main topics generated on colorectal cancer risk factors</h2>
                <h4 class="pb-4" style="font-weight: 600; color:#4D4D4D;">Here are the groups of risk factors that are generated from scientific literature through text mining</h4>
                <?php include (dirname(__FILE__) . "/extractRiskFactor.php"); ?>
            </div>
        </div>
    </div>
    <!-- End generated topics -->

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