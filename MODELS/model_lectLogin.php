<?php
//Query string
$table='lecturer';
$lectID=$_POST["lectID"];
$lectPW=$_POST["lectPW"];
$sqlData="SELECT * FROM $table WHERE lectID='$lectID'";  //get the data from the table

//execute the 2 queries
$rsData=getTableData($conn,$sqlData);
$rsTitles=getTableData($conn,$sqlTitles);

//check the results
$arrayData=checkResultSet($rsData);
$arrayTitles=checkResultSet($rsTitles);


//close the connection
$conn->close();
?>


</body>
</html>
