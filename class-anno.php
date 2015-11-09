<?php



class Anno{


    public $page = 'explore';
    function __construct(){



        if(isset($_GET['page']) && $_GET['page']){
            $this->page = $_GET['page'];
        }

    }
}
