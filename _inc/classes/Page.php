<?php

    class Page{

        private $page_name;

        public function __construct($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_stylesheets() {
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
            echo '<link rel="stylesheet" href="css/style.css">';
        }
            /**
         * Generuje odkazy na JS súbory pre pätu stránky
         *
         * Táto funkcia generuje odkazy na základné JS súbory a pridáva odkazy na špecifické
         * JS súbory podľa názvu aktuálnej stránky. Odkazy sú vložené na koniec body tagu.
         *
         * @return void
         */

        function add_scripts(){
            echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>');
            echo('<script src="js/app.js"></script>');
        
            //$page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
            switch($this->page_name){
                case 'recenzie':
                    echo('<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>');
                    echo('<script src="js/baguette.js"></script>');
                    break;  
            }
        }
    }

?>