<?php
namespace Khanguyennfq\Unlock\Singleton;
class DBConnect
{
   private static DBConnect $conn;
   protected string $host = "";
   protected string $username = "";
   protected string $password = "";

   private function __construct()
   {
       $this->host = "AWS_Database";
       $this->username = "khajackie";
       $this->password = "123456";
   }
   public static function getConn(): DBConnect {
       if (!isset(self::$conn)){
           self::$conn = new  DBConnect();
       }
       return self::$conn;
   }
}
