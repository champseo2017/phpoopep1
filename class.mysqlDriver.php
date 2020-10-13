<?php 
include("interface.dbDriver.php");
class MySQLDriver implements DBDriver {
    public function connect() {
       // connect to database
    }
    public function execute($query){
        // execute the query and output result
    }
}