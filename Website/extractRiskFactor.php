<?php
    // extract the json file with the risk factors and keywords
    $bucket = "websitefyp";                     // bucket name
    $jsonName = "topics_with_keywords.json";    // file name
    $jData = new Database();
    $jsonData = $jData->extractJsonData($bucket, $jsonName);
    $jResult = $jData->getJsonData();

    // extract the json file with definition of risk factors
    $bucket = "websitefyp";                     // bucket name
    $jsonName = "definition.json";              // file name
    $defData = new Database();
    $defData->extractJsonData($bucket, $jsonName);
    $defResult = $defData->getJsonData();

    if ($jResult == "None" || $defResult == "None"){
?>
        <div class="row pb-4">
            <div class="col-12">
                <h3 class="pb-2" style="font-weight: 600;" id="riskfactortopic">Error !!! Unable to retrieve generated risk factors. Please contact the website administrator to resolve this issue.</h3>
            </div>
        </div>
<?php        
    }
    else{
        $array_key = array_keys($jResult);      // Get the key of the array
        $array_key_count = count($array_key);   // Count the number of elements in the array and store in variable
        
        // Loop through the display all the risk factors
        for ($i = 0; $i < $array_key_count; $i++){
            $curAKey = $array_key[$i];          // Risk factor
            $curKeyDef = $defResult[$curAKey];  // Risk factor definition
            $curArray = $jResult[$curAKey];     // Array of keywords
            $curArrayCount = count($curArray);  // Number of elements in the array of keywords
?>
            <div class="row pb-4">
                <!--Start risk factor section -->
                <div class="col-12">
                    <h3 class="pb-2" style="font-weight: 600;" id="riskfactortopic"><?php echo $curAKey?></h3>
                </div>
                <!-- End risk factor section -->

                <!-- Start risk factor definition section -->
                <div class="col-12">
                    <h5 class="pb-3" style="font-weight: 500; line-height:1.8;" id="riskfactordefinition"><?php echo $curKeyDef; ?></h5>
                </div>
                <!-- End risk factor definition section -->

                <!-- Start keywords and article link section -->
                <div class="col-12">
                    <p>
                    <?php echo "Topics common words: "; ?>
                    <?php 
                        for($j = 0; $j<$curArrayCount; $j++){
                            $word = $curArray[$j];
                            $front = "https://www.cancer.gov/publications/dictionaries/cancer-terms/search/";
                            $end = "/?searchMode=Begins";
                            $keyWord = str_replace("-","%20",$word); 
                            $link = $front.$keyWord.$end;
                    ?>
                            <?php echo "["; ?>
                            <a href=<?php echo $link;?>><?php echo $word?></a>
                            <?php echo "]"; ?>
                    <?php
                        }
                        $front = "https://pubmed.ncbi.nlm.nih.gov/?term=colorectal+risk+";
                        $articlelink = $front.$curAKey;
                    ?>
                    </P>
                    <p><a href="<?php echo $articlelink;?>" style="">Click here to access the research articles</a></p>
                </div>
                <!-- End keywords and article link section -->
            </div>
    <?php
        }
    }
    ?>