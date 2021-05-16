<?php
    class Validate{
        
        //security check
        public function ValidateData($data){
            $data = trim($data); //removing whitespace and other predefined characters
            $data = stripslashes($data); //removes backlashes 
            $data = htmlspecialchars($data); //encoding user input to prevent the insert of html codes to the site 
            return $data;
        }
    }

