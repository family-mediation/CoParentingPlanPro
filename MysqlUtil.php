<?php
    

class Database
{
    private $dbConnection;
    private function connect($srvr, $usnm, $pwd, $database)
    {
    
    }
    function printTable($tableName, string $query)
    {
    $result;
    $columns;
    $mysqlConnection = new mysqli("localhost", "root", "", "jmdorders");
    if(!$mysqlConnection)
    {
        print "<span> Unable to connect to the database </span>";
    }
    else
    {
     $result = $mysqlConnection->Query($query, MYSQLI_STORE_RESULT);
    if($result){
     $columns = $result->fetch_fields();
         print
    "
<table class='table table-striped' id='".$tableName."'>
  <thead>
    <tr>
    ";
    // create the header for the table.
            foreach($columns as $col )
            {
                    print "<th scope='col'>".$col->name ."</th>";
            }
print "
    </tr>
  </thead>
  <tbody> 
  ";
                foreach($result as $row )
            {       print "<tr>";
                    foreach($columns as $col)
                    print "<td>". $row[$col->name] ."</td>";
                    print "</tr>";
            }
print "
  </tbody>
</table>
";
        }
        else
        {
        print "<span> No results found </span>";
        }
     }
   
    }
    function printForm($tableName)
    {
    $result = 2;
    $Fields;
    $mysqlConnection = new mysqli("localhost", "root", "", "jmdorders");
    if(!$mysqlConnection)
    {
        print "<span> Unable to connect to the database </span>";
    }
    else
    {
    $query = "SELECT * FROM ".$tableName."";
    $result = $mysqlConnection->Query($query, MYSQLI_STORE_RESULT);
    if($result){
     $Fields = $result->fetch_fields();
         print
            "<div class='mb-3'> "; foreach($Fields as $field)
            {
                print 
                   "<label for='exampleFormControlInput1' class='form-label'> ".$field->name." </label>
                  <input type='email' class='form-control' id='exampleFormControlInput1' placeholder='name@example.com'>";
            }
            print 
                "</div>
                <div class='mb-3'>
                    <label for='exampleFormControlTextarea1' class='form-label'>Example textarea</label>
                    <textarea class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>
                    <input class='btn btn-primary' type='submit' value='Submit'>
                </div>";
            }
        else
        {
        print "<span> No results found </span>";
        }
     }
        
    }
    function getData(string $query)
    {
    $result;
    $columns;
    $mysqlConnection = new mysqli("localhost", "root", "", "jmdorders");
    if(!$mysqlConnection)
    {
        print "<span> Unable to connect to the database </span>";
        return false;
    }
    else
    {
     $result = $mysqlConnection->Query($query, MYSQLI_STORE_RESULT);
    if($result){
        return $result->fetch_assoc();
        
                }
            else
        {
        print "<span> No results found </span>";
                return false;
        }   
    }
        
  
    
    }
      function getAllData(string $query)
    {
    $result;
    $columns;
    $mysqlConnection = new mysqli("localhost", "root", "", "jmdorders");
    if(!$mysqlConnection)
    {
        print "<span> Unable to connect to the database </span>";
        return false;
    }
    else
    {
     $result = $mysqlConnection->Query($query, MYSQLI_STORE_RESULT);
    if($result){
        return $result->fetch_all();
        
                }
            else
        {
        print "<span> No results found </span>";
                return false;
        }   
    }
      }
    function icalExport()
    {
        // Open a file
        
        return 1;
    }
}
?>
