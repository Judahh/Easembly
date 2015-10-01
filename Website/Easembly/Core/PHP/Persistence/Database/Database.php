<?php
class Database {
    /*
            private $id;
            private $dbName='lddb'; // Indique o nome do banco de dados que ser� aberto
            private $user='lduser'; // Indique o nome do usu�rio que tem acesso
            private $password='ldpassword'; // Indique a senha do usu�rio
            private $url='lddb.cjjtjg8aan4o.sa-east-1.rds.amazonaws.com';
            private $port='3306';
            private $db='mysql://';

            private function DATABASEStart(){
                $this->$dbName="lddb"; // Indique o nome do banco de dados que ser� aberto
                $this->$user="lduser"; // Indique o nome do usu�rio que tem acesso
                $this->$password="ldpassword"; // Indique a senha do usu�rio
                $this->$url="lddb.cjjtjg8aan4o.sa-east-1.rds.amazonaws.com";
                $this->$port="3306";
                $this->$db='mysql://';
            }
            */

    private function runSql($sql) {//mysql://username:password@host:port/database
        $id;
        $dbName='lddb'; // Indique o nome do banco de dados que ser� aberto
        $user='lduser'; // Indique o nome do usu�rio que tem acesso
        $password='ldpassword'; // Indique a senha do usu�rio
        $url='lddb.cjjtjg8aan4o.sa-east-1.rds.amazonaws.com';
        $port='3306';
        $db='mysql://';
        //$this->DATABASEStart();
        if(!($id = mysql_connect($url.':'.$port, $user, $password))){
            echo "Unable to establish a connection to MySQL server. Please Contact the Administrator.";
            exit;
        }

        if(!($connection = mysql_select_db($dbName,$id))) {
            echo "Unable to establish a connection to MySQL server. Please Contact the Administrator.";
            exit;
        }

        if(empty($sql) OR !($id)){
            return 0;
        }

        if (!($functionReturn = @mysql_query($sql,$id))) {
            return $functionReturn;
        }
        mysql_close($id);
        return $functionReturn;
    }

    public function insertWithVarchar100FullNameAndVarchar100Password($varchar100FullName, $varchar100Password){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".')'
        );
    }

    public function insertWithVarchar100FullNameAndBigint32FacebookIdentification($varchar100FullName, $bigint32FacebookIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, bigint32FacebookIdentification)
                VALUES
                ('."$varchar100FullName".','."$bigint32FacebookIdentification".')'
        );
    }

    public function insertWithVarchar100FullNameAndBigint32GoogleIdentification($varchar100FullName, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$bigint32GoogleIdentification".')'
        );
    }

    public function insertWithVarchar100FullNameAndVarchar100PasswordAndBigint32FacebookIdentification($varchar100FullName, $varchar100Password, $bigint32FacebookIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password, bigint32FacebookIdentification)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".','."$bigint32FacebookIdentification".')'
        );
    }

    public function insertWithVarchar100FullNameAndVarchar100PasswordAndBigint32GoogleIdentification($varchar100FullName, $varchar100Password, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".','."$bigint32GoogleIdentification".')'
        );
    }

    public function insertWithVarchar100FullNameAndBigint32FacebookIdentificationAndBigint32GoogleIdentification($varchar100FullName, $bigint32FacebookIdentification, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, bigint32FacebookIdentification, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$bigint32FacebookIdentification".','."$bigint32GoogleIdentification".')'
        );
    }

    public function insertWithVarchar100FullNameAndVarchar100PasswordAndBigint32FacebookIdentificationAndBigint32GoogleIdentification($varchar100FullName, $varchar100Password, $bigint32FacebookIdentification, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password, bigint32FacebookIdentification, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".','."$bigint32FacebookIdentification".','."$bigint32GoogleIdentification".')'
        );
    }

    public function bigint32UserIdentificationInsertWithVarchar100FullNameAndVarchar100Password($varchar100FullName, $varchar100Password){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".')'
        );
        return mysql_insert_id();
    }

    public function bigint32UserIdentificationInsertWithVarchar100FullNameAndBigint32FacebookIdentification($varchar100FullName, $bigint32FacebookIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, bigint32FacebookIdentification)
                VALUES
                ('."$varchar100FullName".','."$bigint32FacebookIdentification".')'
        );
        return mysql_insert_id();
    }

    public function bigint32UserIdentificationInsertWithVarchar100FullNameAndBigint32GoogleIdentification($varchar100FullName, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$bigint32GoogleIdentification".')'
        );
        return mysql_insert_id();
    }

    public function bigint32UserIdentificationInsertWithVarchar100FullNameAndVarchar100PasswordAndBigint32FacebookIdentification($varchar100FullName, $varchar100Password, $bigint32FacebookIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password, bigint32FacebookIdentification)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".','."$bigint32FacebookIdentification".')'
        );
        return mysql_insert_id();
    }

    public function bigint32UserIdentificationInsertWithVarchar100FullNameAndVarchar100PasswordAndBigint32GoogleIdentification($varchar100FullName, $varchar100Password, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".','."$bigint32GoogleIdentification".')'
        );
        return mysql_insert_id();
    }

    public function bigint32UserIdentificationInsertWithVarchar100FullNameAndBigint32FacebookIdentificationAndBigint32GoogleIdentification($varchar100FullName, $bigint32FacebookIdentification, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, bigint32FacebookIdentification, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$bigint32FacebookIdentification".','."$bigint32GoogleIdentification".')'
        );
        return mysql_insert_id();
    }

    public function bigint32UserIdentificationInsertWithVarchar100FullNameAndVarchar100PasswordAndBigint32FacebookIdentificationAndBigint32GoogleIdentification($varchar100FullName, $varchar100Password, $bigint32FacebookIdentification, $bigint32GoogleIdentification){
        $this->runSql(
            'INSERT INTO `DatabaseEasembly`.`TableUser`
                (varchar100FullName, varchar100Password, bigint32FacebookIdentification, bigint32GoogleIdentification)
                VALUES
                ('."$varchar100FullName".','."$varchar100Password".','."$bigint32FacebookIdentification".','."$bigint32GoogleIdentification".')'
        );
        return mysql_insert_id();
    }

    public function bigint32UserIdentificationLoginWithVarchar100FullNameAndVarchar100Password($varchar100FullName, $varchar100Password){
        $functionReturn=$this->runSql(
            'select bigint32UserIdentification from TableUser where varchar100FullName='."$varchar100FullName".' and varchar100Password='."$varchar100Password".';'
        );
        return $functionReturn;
    }

    public function bigint32UserIdentificationLoginWithBigint32FacebookIdentification($bigint32FacebookIdentification){
        $functionReturn=$this->runSql(
            'select bigint32UserIdentification from TableUser where $bigint32FacebookIdentification='."$bigint32FacebookIdentification".';'
        );
        return $functionReturn;
    }

    public function bigint32UserIdentificationLoginWithBigint32GoogleIdentification($bigint32GoogleIdentification){
        $functionReturn=$this->runSql(
            'select bigint32UserIdentification from TableUser where $bigint32GoogleIdentification='."$bigint32GoogleIdentification".';'
        );
        return $functionReturn;
    }
}
?>