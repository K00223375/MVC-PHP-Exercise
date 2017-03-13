<?php
//Query string
$table='results';
$studentID=$_POST["studID"];
$sqlData="SELECT Distinct StudID, students.FirstName, students.LastName, ModID , modules.ModuleTitle, Grade  FROM $table, students, modules Where StudID = '$studentID' && students.StudentID = '$studentID' && ModID = modules.ModuleID";  //get the data from the table

$sqlTitles="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name IN ('students', '$table', 'modules') AND COLUMN_NAME IN ('StudID', 'FirstName', 'LastName', 'ModID', 'ModuleTitle','Grade')";  //get the table column descriptions

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
