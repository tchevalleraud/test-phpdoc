<?php
    namespace TestPHPDoc;
        
    class Config {

        private $config;

        public function getConfig(){
            return $this->config;
        }

        public function setConfig($config){
            $this->config = $config;
            return $this;
        }

    }
?>