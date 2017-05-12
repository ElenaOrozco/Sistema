<?php 


class Database extends PDO{
           
     public function __construct() {
         try{
              
             parent::__construct('mysql:host=localhost;dbname=mydb','root','');
             //parent::__construct('mysql:host=mysql.hostinger.mx;dbname=u237743182_mydb', 'u237743182_elena', 'aresricardo');
             parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         } catch (Exception $ex) {
              
             die('La base de datos seleccionada no existe!');
 
         }
          
     }   
      
 }





 ?>