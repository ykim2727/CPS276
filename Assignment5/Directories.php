<?php

class Directories {

    public function submit(){
        if (isset($_POST["submitbutton"])){
            $folder = $_POST["folderName"];

            if (!glob("directories/{$folder}")){ 
                return $this->createDirectories();
            }
                
            else if (glob("directories/{$folder}")){
                return $this->duplicateError();
            }
        }
    }

    public function createDirectories(){ 
        $folder = $_POST["folderName"]; 
        $fileContents = $_POST["fileContents"];

        $success = mkdir ("directories/{$folder}"); 

            if ($success){

                chmod ("directories/{$folder}", 0777);
                file_put_contents("directories/{$folder}/readme.txt", $fileContents);

                $string = <<<HTML
                <p>File and directory were created!</p>
                <a href = 'directories/{$folder}/readme.txt'>Path where file is located</a>
                HTML;
                return $string;
            }

            else {
                $string = <<<HTML
                <p>Error: Directory or file cannot be created!</p>
                HTML;
                return $string;

            }
    }

    public function duplicateError(){ 
        $string = <<<HTML
        <p>A directory already exists with that name.</p>
        HTML;
        return $string;
    }    
}

?>
