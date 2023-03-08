<?php

require "/var/www/html/composer/vendor/autoload.php";
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// Class for extracting json and text files from the s3 bucket
class Database{
    private $_jsonData; // variable that stores the retrieved json file data

    /**
     * Function that extracts json file from the s3 bucket
     * @param string $bucket bucket name
     * @param string $keyname file name to retrieve from the bucket
     */
    public function extractJsonData($bucket, $keyname){
        $s3 = new S3Client([
        'region'  => 'us-east-1',
        'version' => 'latest',
        'credentials' => [
            'key'    => "",
            'secret' => ""
        ]
        ]);

        // Check if the file exists
        $doesFileExists = $s3->doesObjectExist($bucket, $keyname);

        // If file does not exists
        if ($doesFileExists == False){
            $this->_jsonData = "None";
        }
        // Else if the file does exists
        else{
            $result = $s3->getObject([
                'Bucket' => $bucket,
                'Key'    => $keyname
            ]);
    
            // Print the body of the result by indexing into the result object.
            $response = (string) $result['Body'];
            $string = (json_decode($response,true));
            $this->_jsonData = $string;
        }
    }

    /**
     * Function that returns the json data
     * @return array _jsonData
     */
    public function getJsonData(){
        return $this->_jsonData;
    }
}
?>
