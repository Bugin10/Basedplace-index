<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('/usr/lib/cgi-bin/templog.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {

   }



   if($_GET["option"] == null)
   {
      $ret = $db->query("SELECT * from temps WHERE timestamp>datetime('now', '-24 hour', 'localtime')");
   }
   else
   {
      $datestring = date('Y-m-d H:i:s');
      //echo $datestring;
      $option = $_GET["option"];
      $ret = $db->query("SELECT * from temps WHERE timestamp>datetime('now', '-$option hour', 'localtime')");
   }


while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
   foreach($row as $key => $value){
      echo $key."  =  ". $value."\n";
   }
}
$db->close();

?>
