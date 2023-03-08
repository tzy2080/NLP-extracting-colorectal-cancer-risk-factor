<!DOCTYPE html>
<html lang="en">
<?php include_once(dirname(__FILE__) . "/Website/header.php"); ?>
<title>Colorectal cancer text mining</title>
<style>
    /* Font family */
    body {
        font-family: 'Open Sans', sans-serif;
    }

    /* Slider image sive and orientation */
    #carouselImage {
        height: 80vh;
        background-position: center;
        background-size: cover;
    }

    /* Text underline */
    hr.divider {
        max-width: 5rem;
        border-width: .2rem;
        border-color: #f4623a;
    }

    /* Text underline */
    hr.light {
        max-width: 5rem;
        border-width: .2rem;
        border-color: #fff;
    }

    /* Overlay for the sliding panel */
    .color-overlay {
        width: 100%;
        height: 100%;
        background: #212529;
        opacity: .6;
        position: absolute;
    }

    /* Extra small devices (phones, less than 574px) */
    @media (max-width: 574px) {
        #caption1 {
            font-size: 1.6rem;
        }

        #caption2 {
            font-size: 1.5rem;
        }

        #caption3 {
            font-size: 1.2rem;
        }

        #carouselCaption {
            top: 20%;
        }

        #sectionImg {
            width: 250px;
            height: 250px;
        }

        #sectionText {
            font-size: 1.0rem;
            font-weight: 600;
        }

        #sectionTitle {
            font-size: 1.8rem;
        }

        #section {
            height: 100%;
        }

        #title {
            font-size: 2rem;
        }
    }

    /* Small devices (phones, 575px - 766px) */
    @media (min-width: 575px) {
        #caption1 {
            font-size: 2rem;
        }

        #caption2 {
            font-size: 1.8rem;
        }

        #caption3 {
            font-size: 1.4rem;
        }

        #carouselCaption {
            top: 28%;
        }

        #sectionImg {
            width: 280px;
            height: 280px;
        }

        #sectionText {
            font-size: 1.0rem;
            font-weight: 600;
        }

        #sectionTitle {
            font-size: 2.0rem;
        }

        #section {
            height: 100%;
        }

        #title {
            font-size: 2.5rem;
        }
    }

    /* Small devices (landscape phones, 767px - 990px) */
    @media (min-width: 767px) {
        #caption1 {
            font-size: 2.2rem;
        }

        #caption2 {
            font-size: 1.6rem;
        }

        #caption3 {
            font-size: 1.4rem;
        }

        #carouselCaption {
            top: 28%;
        }

        #sectionImg {
            width: 300px;
            height: 300px;
        }

        #sectionText {
            font-size: 1.1rem;
            font-weight: 600;
        }

        #sectionTitle {
            font-size: 2.0rem;
        }

        #section {
            height: 100%;
        }

        #title {
            font-size: 2.6rem;
        }
    }

    /* Medium devices (tablets, 991px - 1198px) */
    @media (min-width: 991px) {
        #caption1 {
            font-size: 3rem;
        }

        #caption2 {
            font-size: 1.8rem;
        }

        #caption3 {
            font-size: 1.6rem;
        }

        #carouselCaption {
            top: 28%;
        }

        #sectionImg {
            width: 350px;
            height: 350px;
        }

        #sectionText {
            font-size: 1.2rem;
            font-weight: 600;
        }

        #sectionTitle {
            font-size: 2.0rem;
        }

        #section {
            height: 100%;
        }

        #title {
            font-size: 3.0rem;
        }

        #benefitContainer {
            height: 180px;
        }
    }

    /* Large devices (desktops, higher than 1199px) */
    @media (min-width: 1199px) {
        #caption1 {
            font-size: 3.5rem;
        }

        #caption2 {
            font-size: 2.0rem;
        }

        #caption3 {
            font-size: 1.8rem;
        }

        #carouselCaption {
            top: 35%;
        }

        #sectionImg {
            width: 400px;
            height: 350px;
        }

        #sectionText {
            font-size: 1.2rem;
            color: #4D4D4D !important;
            font-weight: 600;
        }

        #sectionTitle {
            font-size: 2.5rem;
        }

        #section {
            height: 100%;
        }

        #title {
            font-size: 3.0rem;
        }

        #benefitContainer {
            height: 140px;
        }
    }
</style>

<body>
    <!-- Include navigation bar -->
    <?php include_once("/var/www/html/Website/navbar.php"); ?>
    <!-- End Include navigation bar -->

    <br>
    <br>
    <br>
    <br>

    <!-- Start Sliding panel -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Start Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- End Indicators -->

        <!-- Start The slideshow -->
        <div class="carousel-inner">
            <!-- Start slide 1 -->
            <div class="carousel-item active" id="carouselImage" style="background-image: url(Website/Images/index/doc2.jpg);">
                <div class="color-overlay"></div>
                <div class="carousel-caption" id="carouselCaption" style="position: absolute;">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <h1 style="font-weight:600;" id="caption1">What we do?</h1>
                        </div>
                        <div class="col-9 mt-4">
                            <h2 style="font-weight:600; line-height: 1.5;" id="caption2">Our purpose is to provide the latest information about the risk factors of colorectal cancer to promote awareness among the public</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End slide 1 -->

            <!-- Start slide 2 -->
            <div class="carousel-item" id="carouselImage" style="background-image: url(Website/Images/index/system.jpg);">
                <div class="color-overlay"></div>
                <div class="carousel-caption" id="carouselCaption" style="position: absolute;">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <h1 style="font-weight:600;" id="caption1">System</h1>
                        </div>
                        <div class="col-9 mt-4">
                            <h2 style="font-weight:600; line-height: 1.5;" id="caption2">Our system uses text mining technique to extract colorectal cancer risk factor from PubMed article.</h2>
                            <h5>Click <a href="/Website/aboutus.php">here</a> to learn more</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End slide 2 -->

            <!-- Start slide 3 -->
            <div class="carousel-item" id="carouselImage" style="background-image: url(Website/Images/index/features.jpg);">
                <div class="color-overlay"></div>
                <div class="carousel-caption" id="carouselCaption" style="position: absolute;">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <h1 style="font-weight:600;" id="caption1">Features</h1>
                        </div>
                        <div class="col-9 mt-4">
                            <h2 style="font-weight:600; line-height: 1.5;" id="caption2">Access <a href="/Website/riskfactors.php">risk factors</a> and <a href="/Website/statistics.php">statistics</a> generated by our system</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End slide 3 -->
        </div>
        <!-- End slide show -->

        <!-- Start Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        <!-- End Left and right controls -->
    </div>
    <!-- End sliding panel -->

    <!-- Start overview section-->
    <div class="row mx-0">
        <div class="col-12 mt-5 mb-2 text-center align-self-center">
            <h1 class="mt-4" style="font-weight: 600" id="title">Overview of Colorectal Cancer</h1>
            <hr class="divider mt-4">
        </div>
    </div>
    
    <div class="row justify-content-center mx-0 mb-5 pb-5" id="section">
        <div class="col-12 col-lg-10 align-self-center px-5">
            <!-- Only shows on larger screen size and above -->
            <div class="row mx-0 d-none d-xl-flex">
                <div class="col-12 col-md-6 my-auto">
                    <img src="Website/Images/index/colon.png" id="sectionImg">
                </div>
                <div class="col-12 col-md-6 my-auto px-0">
                    <h1 class="pb-4" style="font-weight: bold;" id="sectionTitle">What is colorectal cancer?</h1>
                    <p id="sectionText">Colorectal cancer (CRC) is the development of cancer that starts in the colon or the rectum.</p>
                    <p class="pb-4" id="sectionText">There are also other names for this type of cancer such as colon cancer or bowel cancer.</p>
                </div>
            </div>
            <!-- Only show on screen size smaller than large -->
            <div class="row mx-0 d-xl-none">
                <div class="col-12 my-auto px-0">
                    <h1 class="pb-4" style="font-weight: bold;" id="sectionTitle">What is colorectal cancer?</h1>
                    <p id="sectionText">Colorectal cancer (CRC) is the development of cancer that starts in the colon or the rectum.</p>
                    <p class="pb-4" id="sectionText">There are also other names for this type of cancer such as colon cancer or bowel cancer.</p>
                </div>
                <div class="col-12 my-auto">
                    <div class="row mx-0 justify-content-center">
                        <img src="Website/Images/index/colon.png" id="sectionImg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mx-0" id="section">
        <div class="col-12 col-lg-10 align-self-center px-5">
            <!-- Only shows on larger screen size and above -->
            <div class="row mx-0 d-none d-xl-flex">
                <div class="col-12 col-md-6 my-auto px-0">
                    <h1 class="pb-4" style="font-weight: bold" id="sectionTitle">What are the symptoms of colorectal cancer?</h1>
                    <li id="sectionText" class="pb-4">Persistent change in bowel habits, including diarrhea or constipation or a change in the consistency of stool</li>
                    <li id="sectionText" class="pb-4">Rectal bleeding or blood in stool</li>
                    <li id="sectionText" class="pb-4">Persistent abdominal discomfort, such as cramps, gas or pain</li>
                    <li id="sectionText" class="pb-4">A feeling that your bowel doesn't empty completely</li>
                    <li id="sectionText" class="pb-4">Weakness or fatigue</li>
                    <li id="sectionText" class="pb-4">Unexplained weight loss</li>
                </div>
                <div class="col-12 col-md-6 my-auto text-right">
                    <img src="Website/Images/index/symptoms4.png" id="sectionImg">
                </div>
            </div>
            <!-- Only shows on screen size smaller than large -->
            <div class="row mx-0 d-xl-none">
                <div class="col-12 my-auto px-0">
                    <h1 class="pb-4" style="font-weight: bold" id="sectionTitle">What are the symptoms of colorectal cancer?</h1>
                    <li id="sectionText" class="pb-4">Persistent change in bowel habits, including diarrhea or constipation or a change in the consistency of stool</li>
                    <li id="sectionText" class="pb-4">Rectal bleeding or blood in stool</li>
                    <li id="sectionText" class="pb-4">Persistent abdominal discomfort, such as cramps, gas or pain</li>
                    <li id="sectionText" class="pb-4">A feeling that your bowel doesn't empty completely</li>
                    <li id="sectionText" class="pb-4">Weakness or fatigue</li>
                    <li id="sectionText" class="pb-4">Unexplained weight loss</li>
                </div>
                <div class="col-12 my-auto">
                    <div class="row mx-0 justify-content-center">
                        <img src="Website/Images/index/symptoms4.png" id="sectionImg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End overview section -->

    <!-- Start available treatments section -->
    <div class="row mx-0 mb-5">
        <div class="col-12 mt-5 mb-2 text-center align-self-center">
            <h1 class="mt-4 mb-4" style="font-weight: 600" id="title">Available treatments</h1>
            <h5 style="font-weight: 600; color:#4D4D4D;">Fortunately, there are many different kinds of treatments available to treat this disease</h5>
        </div>
    </div>

    <div class="row mx-0">
        <div class="container">
            <div class="row mx-0">
                <div class="col-12 col-xl-4 px-0 pb-5 pb-xl-0">
                    <div class="card mx-auto py-5" style="width: 20rem; background-color:#F4F6F6; border: none;">
                        <div class="card-body">
                            <h3 class="card-title text-left pb-3" style="font-weight: 700;">Surgery</h3>
                            <p class="card-text text-left pb-4" style="font-weight: 600; color:#4D4D4D; font-size: 1.rem;">Involves the removal of the tumor and surrounding healthy tissue through surgical operation.</p>
                            <div class="row mx-0">
                                &nbsp
                                &nbsp
                                &nbsp
                                <i class="gg-arrow-long-right" style="color: #007bff;"></i>
                                <a href="https://www.cancer.net/cancer-types/colorectal-cancer/types-treatment" class="pl-3" style="text-decoration: none; font-weight: 600; line-height:0.4">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 px-0 pb-5 pb-xl-0">
                    <div class="card mx-auto py-5" style="width: 20rem; background-color:#F4F6F6; border: none;">
                        <div class="card-body">
                            <h4 class="card-title text-left pb-3" style="font-weight: 700;">Radiation therapy</h4>
                            <p class="card-text text-left pb-4" style="font-weight: 600; color:#4D4D4D; font-size: 1.rem;">This treatment involves the usage of high-energy x-rays to destroy cancer cells.</p>
                            <div class="row mx-0">
                                &nbsp
                                &nbsp
                                &nbsp
                                <i class="gg-arrow-long-right" style="color: #007bff;"></i>
                                <a href="https://www.cancer.net/cancer-types/colorectal-cancer/types-treatment" class="pl-3" style="text-decoration: none; font-weight: 600; line-height:0.4">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 px-0 pb-5 pb-xl-0">
                    <div class="card mx-auto py-5" style="width: 20rem; background-color:#F4F6F6; border: none;">
                        <div class="card-body">
                            <h4 class="card-title text-left pb-3" style="font-weight: 700;">Medication</h4>
                            <p class="card-text text-left pb-4" style="font-weight: 600; color:#4D4D4D; font-size: 1.rem;">This treatment involves the usage of medication to destroy the cancer cells.</p>
                            <div class="row mx-0">
                                &nbsp
                                &nbsp
                                &nbsp
                                <i class="gg-arrow-long-right" style="color: #007bff;"></i>
                                <a href="https://www.cancer.net/cancer-types/colorectal-cancer/types-treatment" class="pl-3" style="text-decoration: none; font-weight: 600; line-height:0.4">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mx-0 mt-5 mb-5 pb-5">
        <div class="col-10 col-md-6 text-center">
            <h5 style="font-weight: light; color:#4D4D4D;">However no matter how effective are these treatments, <small class="" style="font-weight: bold; font-size: 1.25rem">Prevention is Better than Cure</small></h5>
            <h5 class="pt-4" style="font-weight: light; color:#4D4D4D;">Therefore, we hope that our system is able to educate the public and raise awareness about the risk factors of colorectal cancer</h5>
        </div>
    </div>
    <!-- End available treatments section -->

    <!-- Include footer -->
    <?php include_once(dirname(__FILE__) . "/Website/footer.php"); ?>
    <!-- End Include footer -->
</body>
</html>