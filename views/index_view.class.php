<?php

class IndexView{
    public function displayHeader($title){
        ?>
        <!DOCTYPE html> 
        <html>
            <head>
                <title><?php echo $title; ?></title>
                <meta>
                <!--<link rel="stylesheet" type="text/css" href="../www/css/style.css">-->
                <style>
                    #navbar{
                        width: 65%;
                        height: 50px;
                        border: 1px solid gray;
                        background-color: #ccc;
                    } 
                    #navbar div{
                        position: relative;
                        display: inline;
                        top: 10px;
                        padding: 25px;
                    }
                    #navbar div a{
                        text-decoration: none;
                        padding: 5px;
                   
                        
                    }
                    #navbar div a:hover{
                        
                    }
                </style>
            </head>
        <body>
            <div id="navbar">
                <div><a href="<?=BASE_URL?>/displaylog/"></a></div>
                <div><a href=""></a></div>
                <div><a href=""></a></div>
            </div>
        <?php
    }
    public function displayFooter(){
        ?>
        </body>
        <?php
    }
}
