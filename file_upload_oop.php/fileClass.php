<?php

class fileClass {
    public $fileinfo;
    public function __construct($x){
        $this->fileinfo =$x;
    }
    public function  upload() {
        $info = $this->fileinfo;
        $name = $info['name'];
        $tmpName = $info['tmp_name'];
        $filesize =$info['size'];
        $allowedsize = 512000 ; //500kb
        $allowedtype = ["jpeg", "png", "jpg", "pdf", "docx"];
        $errors = [];
        $data = pathinfo($name);
        $ext = strtolower($data['extension']);

        if($filesize>$allowedsize){
            $errors[]= "file must be 500kb";
        }
        if(!in_array($ext,$allowedtype)){
            $errors[]= "file must be jpg, png, jpeg, pdf, docx";
        }
        if(count($errors)>0){
            foreach($errors as $err){
                echo $err . "<br>";
            }
        }
        else{
            if(move_uploaded_file($tmpName,"uploads/" . $name)){
                echo "File uploaded Sucessfully";
            }
                
            }
    }
}

?>