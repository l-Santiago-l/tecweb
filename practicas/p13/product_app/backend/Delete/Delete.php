<?php
    namespace TECWEB\DELETE;
    use TECWEB\DB\DataBase;
    include_once __DIR__.'/DataBase/DataBase.php';
    class Delete extends DataBase{

        public function __construct($db, $user = 'root', $pass='1234') {
            parent::__construct($user, $pass, $db);
        }
    }


?>