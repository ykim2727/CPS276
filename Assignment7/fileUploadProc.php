<?php
require_once "Pdo_methods.php";
class Files extends PdoMethods{

    public function verifyFile(){
        if (isset($_POST["submitbutton"])){
            if ($_FILES["file"]["type"] != "application/pdf"){
                return "File must be a pdf";
            }
            else if ($_FILES["file"]["size"] > 100000){
                return "File is too big";
            }
            else {
                return $this->addFile();
            }
        }
    }

    public function addFile(){
        $serverFiles = ["newsletterorform1.pdf",
                    "newsletterorform2.pdf",
                    "newsletterorform3.pdf",
                    "newsletterorform4.pdf",
                    "newsletterorform5.pdf",
                    "newsletterorform6.pdf",
                    "newsletterorform7.pdf",
                    "newsletterorform8.pdf",
                    "newsletterorform9.pdf",
                    "newsletterorform10.pdf"];

        $filename = $_POST["filename"];
        $file = $_FILES["file"]["name"];
            if (in_array($file, $serverFiles, false)){
                $filepath = "testdocuments/{$file}";
                return $this->insertDb($filepath);
            }

            else{ 
                echo $file;
                echo "There was a problem";
            
            }
    }

    public function insertDb($filepath){
        $pdo = new PdoMethods();

        $sql = "INSERT INTO files (file_name, file_path) VALUES (:fname, :fpath)";
            
        $bindings = [
            [':fname',$_POST['filename'],'str'],
            [':fpath',$filepath,'str'],
        ];

        $result = $pdo->otherBinded($sql, $bindings);
        
        if($result === 'error'){
            return 'There was an error adding the file';
        }
        else {
            return 'File has been added';
        }
    }

}

?>

