<?php
   define('CP_STOCK_RUNNING', 1);
   $base = dirname(__FILE__);
   chdir($base);
   
   require_once 'config/includes.php';
   
   $db = new Database();
   $conn = $db->getConnection();
   include 'inc/submit.php';
   
   ?>
<!doctype html>
<html lang="en">
   <head>
      <!-- required readonly meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="css/styles.css"  />
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="js/helper.js"></script>
      <script src="js/main.js"></script>
      <title>Lid Test</title>
   </head>
   <body>
      <div class="container">
      <form action="index.php" method="post" id="lidTest" >
         
         <div class="row">
            <div class="col-sm"><h3 id="title">Lid Test Form</h3></div>
            <div class="col-sm text-center">           
            </div>
            <div class="col-sm"></div>
         </div>
         <div class="row">
            <div class="col-sm">
				
               <label for="jobNo">Enter Job No.</label><input type="text"  class="form-control" name="jobNo" required >
               <label for="sku">Enter SKU</label><input type="text" class="form-control" name="sku" required >
			   <label for="tester">Testers Name</label><input type="text" class="form-control" name="tester" required ><br>
			   
			   <select  id="lineSelect" class="form-select" name="line" required >
                        <option value="">Choose The Machine Line</option>
                        <option value="1">Line 1</option>
                        <option value="2">Line 2</option>
                        <option value="3">Line 3</option>
                        <option value="4">Line 4</option>
                        <option value="5">Line 5</option>
                        <option value="6">Line 6</option>
                        <option value="7">Line 7</option>
                        <option value="8">Line 8</option>
                        <option value="9">Line 9</option>
                        <option value="10">Line 18</option>
                        <option value="11">Line 55</option>
                        <option value="12">Line 56</option>                        
                     </select><br>
            </div>
            <div class="col-sm text-center">
               <div id="failDiv">			   
					<img src="fail.jpg" alt="fail" id="fail">
			   </div>			   
            </div>
            <div class="col-sm text-center">
            	<img src="logo.jpg" alt="logo" id="logo">
            	<div ><h4 id="clock"></h4></div>
            </div>
         </div>
         <br>
         <div class="row">
            <table class="table table-striped table-sm">
               <thead id="head">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Start Test</th>
                     <th scope="col">Start Time</th>
                     <th scope="col">End Test</th>
                     <th scope="col">End Time</th>
                     <th scope="col">Test Time</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td><button type="button" class="btn btn-success" id="btn1">Start</button></td>
                     <td><input id="st1" type="text"  class="form-control" name="test1[startTime1]"  readonly required /></td>
                     <td>
                        <select id="result1" name="test1[result1]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td ><input id="et1" type="text"  class="form-control" name="test1[endTime1]" required readonly></td>
                     <td ><input id="tt1" type="text"  class="form-control" name="test1[totalTime1]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">2</th>
                     <td><button type="button" class="btn btn-success" id="btn2">Start</button></td>
                     <td> <input id="st2" type="text"  class="form-control" name="test2[startTime2]" required readonly></td>
                     <td>
                        <select id="result2" name="test2[result2]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td><input id="et2" type="text"  class="form-control" name="test2[endTime2]" required readonly></td>
                     <td ><input id="tt2" type="text"  class="form-control" name="test2[totalTime2]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">3</th>
                     <td><button type="button" class="btn btn-success" id="btn3">Start</button></td>
                     <td><input id="st3" type="text"  class="form-control" name="test3[startTime3]" required readonly></td>
                     <td>
                        <select id="result3" name="test3[result3]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td><input id="et3" type="text"  class="form-control" name="test3[endTime3]" required readonly></td>
                     <td><input id="tt3" type="text"  class="form-control" name="test3[totalTime3]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">4</th>
                     <td><button type="button" class="btn btn-success" id="btn4">Start</button></td>
                     <td><input id="st4" type="text"  class="form-control" name="test4[startTime4]" required readonly></td>
                     <td>
                        <select id="result4" name="test4[result4]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td ><input id="et4" type="text"  class="form-control" name="test4[endTime4]" required readonly></td>
                     <td ><input id="tt4" type="text"  class="form-control" name="test4[totalTime4]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">5</th>
                     <td><button type="button" class="btn btn-success" id="btn5">Start</button></td>
                     <td ><input id="st5" type="text"  class="form-control" name="test5[startTime5]" required readonly></td>
                     <td>
                        <select id="result5" name="test5[result5]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td ><input id="et5" type="text"  class="form-control" name="test5[endTime5]" required readonly></td>
                     <td ><input id="tt5" type="text"  class="form-control" name="test5[totalTime5]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">6</th>
                     <td><button type="button" class="btn btn-success" id="btn6">Start</button></td>
                     <td><input id="st6" type="text"  class="form-control" name="test6[startTime6]" required readonly></td>
                     <td>
                        <select id="result6" name="test6[result6]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td><input id="et6" type="text"  class="form-control" name="test6[endTime6]" required readonly></td>
                     <td><input id="tt6" type="text"  class="form-control" name="test6[totalTime6]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">7</th>
                     <td><button type="button" class="btn btn-success" id="btn7">Start</button></td>
                     <td><input id="st7" type="text"  class="form-control" name="test7[startTime7]" required readonly></td>
                     <td>
                        <select id="result7" name="test7[result7]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td><input id="et7" type="text"  class="form-control" name="test7[endTime7]" required readonly></td>
                     <td><input id="tt7" type="text"  class="form-control" name="test7[totalTime7]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">8</th>
                     <td><button type="button" class="btn btn-success" id="btn8">Start</button></td>
                     <td><input id="st8" type="text"  class="form-control" name="test8[startTime8]" required readonly></td>
                     <td>
                        <select id="result8" name="test8[result8]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td><input id="et8" type="text"  class="form-control" name="test8[endTime8]" required readonly></td>
                     <td><input id="tt8" type="text"  class="form-control" name="test8[totalTime8]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">9</th>
                     <td><button type="button" class="btn btn-success" id="btn9">Start</button></td>
                     <td><input id="st9" type="text"  class="form-control" name="test9[startTime9]" required readonly></td>
                     <td>
                        <select id="result9" name="test9[result9]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td><input id="et9" type="text"  class="form-control" name="test9[endTime9]" required readonly></td>
                     <td><input id="tt9" type="text"  class="form-control" name="test9[totalTime9]" required readonly></td>
                  </tr>
                  <tr>
                     <th scope="row">10</th>
                     <td><button type="button" class="btn btn-success" id="btn10">Start</button></td>
                     <td ><input id="st10" type="text"  class="form-control" name="test10[startTime10]" required readonly></td>
                     <td>
                        <select id="result10" name="test10[result10]">
                           <option value="">Result</option>
                           <option value="pass">Pass</option>
                           <option value="fail">Fail</option>
                        </select>
                     </td>
                     <td><input id="et10" type="text"  class="form-control" name="test10[endTime10]" required readonly></td>
                     <td><input id="tt10" type="text"  class="form-control" name="test10[totalTime10]" required readonly></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm text-center">
               <br>
			    <input type="hidden" id="batchResult" name="batchResult" value="Pass">
               <input class="btn btn-lg btn-success" type="submit" id="submit" name="submit" value="Submit">
            </div>
            <div class="col-sm text-center" >
               <h1 id="alert"></h1>
            </div>
		</div> 
      </form>
	  
           
   </body>
</html>