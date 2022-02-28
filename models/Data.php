<?php
    class Data
    {

        /**
         *this method creates the file person.json
        and injects the fields of the form record
         * @param array $userArray captures an array with the information of the register
         */
        public function saveData($userArray){
            if (file_exists("person.json"))
            {
                $content = file_get_contents("person.json");
                $data = json_decode($content);
                array_push($data,$userArray);
                file_put_contents("person.json",json_encode($data));

            }else{
                $data = array();
                array_push($data,$userArray);
                $f = fopen("person.json", "w");
                fwrite($f,json_encode($data));
                fclose($f);
            }
        }

        /**
         * this method takes the information from the file person.json
         * @return mixed json information
         */
        public function getData(){
            $content = file_get_contents("person.json");
            $data = json_decode($content,true);
            return $data;

        }

        /**
         * this method creates the commits.json file
        and injects the commits
         * @param array $arrayCommit captures an array with the date and the text
         */
        public function saveCommit($arrayCommit){
            if (file_exists("commits.json"))
            {
                $content = file_get_contents("commits.json");
                $data = json_decode($content);
                array_push($data,$arrayCommit);
                file_put_contents("commits.json",json_encode($data));

            }else{
                $data = array();
                array_push($data,$arrayCommit);
                $f = fopen("commits.json", "w");
                fwrite($f,json_encode($data));
                fclose($f);
            }
        }

        /**
         * this method takes the information from the file commits.json
         * @return mixed json information
         */
        public function getCommits(){
            $content = file_get_contents("commits.json");
            $data = json_decode($content,true);
            return $data;

        }
    }