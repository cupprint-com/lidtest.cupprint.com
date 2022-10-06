 <?php 
 
 // function to insert test row of data
 function insertTestResult($test,$conn,$jobNum,$sku,$batchResult,$line){
				 	 $query = "INSERT INTO cpLidTestResults (jobNumber,sku, startTime,result,endTime,testTime,batchResult,line)  VALUES(:jobNum,:sku,:startTime,:result,:endTime,:totalTime,:batchResult,:line) ";
                     $parameters = [
					  ":jobNum" => $jobNum,
					  ":sku" => $sku,
                      ":startTime" => $test[0],
					  ":result" => $test[1],
					  ":endTime" => $test[2],
					  ":totalTime" => $test[3],
					  ":batchResult" => $batchResult,
					  ":line" => $line,					  
                     ];                  
                                       
                     $stmt = $conn->prepare($query);
                     $stmt->execute($parameters);
                     $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
					 
 }
 
 
 //print_r($_POST);
 
 if(isset($_POST['submit'])){	
 
	 $jobNumber = $_POST['jobNo'];
	 $sku = $_POST['sku'];
	 $batchResult = $_POST['batchResult'];	 
	 $line = $_POST['line'];
	 // get results and assign to indexed array
	 $arr1=array_values($_POST['test1']);	  
	 $arr2=array_values($_POST['test2']);	
	 $arr3=array_values($_POST['test3']);
	 $arr4=array_values($_POST['test4']);
	 $arr5=array_values($_POST['test5']);
	 $arr6=array_values($_POST['test6']);
	 $arr7=array_values($_POST['test7']);
	 $arr8=array_values($_POST['test8']);
	 $arr9=array_values($_POST['test9']);
	 $arr10=array_values($_POST['test10']);
	 
	 // insert results into database
	 insertTestResult($arr1, $conn,$jobNumber,$sku,$batchResult,$line);	 
	 insertTestResult($arr2, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr3, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr4, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr5, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr6, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr7, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr8, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr9, $conn,$jobNumber,$sku,$batchResult,$line);
	 insertTestResult($arr10, $conn,$jobNumber,$sku,$batchResult,$line);
	
                        
 }					 
?>