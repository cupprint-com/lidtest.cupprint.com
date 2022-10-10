 <?php 
 
 // function to insert test row of data
 function insertTestResult($test,$conn,$jobNum,$sku,$batchResult,$line,$tester){
				 	 $query = "INSERT INTO cpLidTestResults (jobNumber,sku, startTime,result,endTime,testTime,batchResult,line,tester)  VALUES(:jobNum,:sku,:startTime,:result,:endTime,:totalTime,:batchResult,:line,:tester) ";
                     $parameters = [
					  ":jobNum" => $jobNum,
					  ":sku" => $sku,
                      ":startTime" => $test[0],
					  ":result" => $test[1],
					  ":endTime" => $test[2],
					  ":totalTime" => $test[3],
					  ":batchResult" => $batchResult,
					  ":line" => $line,	
                      ":tester" => $tester,		
                     ];                  
                                  
                     //get insert error messages
                     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
                     
                     $stmt = $conn->prepare($query);
                     $stmt->execute($parameters);
                     //$results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                     //print_r($stmt->errorInfo());
					 
 }
 
 //print_r($_POST);
 
 if(isset($_POST['submit'])){	
 
	 $jobNumber = $_POST['jobNo'];
	 $sku = $_POST['sku'];
	 $batchResult = $_POST['batchResult'];	 
	 $line = $_POST['line'];
	 $tester = $_POST['tester'];
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
	 insertTestResult($arr1, $conn,$jobNumber,$sku,$batchResult,$line,$tester);	 
	 insertTestResult($arr2, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr3, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr4, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr5, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr6, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr7, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr8, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr9, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	 insertTestResult($arr10, $conn,$jobNumber,$sku,$batchResult,$line,$tester);
	
                        
 }					 
?>