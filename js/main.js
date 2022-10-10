$(document).ready(function() {
    const results = []; //10 test results array for checking if 2 or more resulting in batch fail
    var totalFails = 0;
    var startTime1, endTime1, totTime1;
    var startTime2, endTime2, totTime2;
    var startTime3, endTime3, totTime3;
    var startTime4, endTime4, totTime4;
    var startTime5, endTime5, totTime5;
    var startTime6, endTime6, totTime6;
    var startTime7, endTime7, totTime7;
    var startTime8, endTime8, totTime8;
    var startTime9, endTime9, totTime9;
    var startTime10, endTime10, totTime10;
	
	// stop form resubmitting on page refresh
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
	
	//start clock
	startTime();

	//hide fail image on load
    $('#failDiv').hide();


    //Set start time for buttons
    $("#btn1").click(function() {
        startTime1 = new Date($.now())
        $("#st1").val(formatDate(startTime1));
    });
    $("#btn2").click(function() {
        startTime2 = new Date($.now())
        $("#st2").val(formatDate(startTime2));
    });
    $("#btn3").click(function() {
        startTime3 = new Date($.now())
        $("#st3").val(formatDate(startTime3));
    });
    $("#btn4").click(function() {
        startTime4 = new Date($.now())
        $("#st4").val(formatDate(startTime4));
    });
    $("#btn5").click(function() {
        startTime5 = new Date($.now())
        $("#st5").val(formatDate(startTime5));
    });
    $("#btn6").click(function() {
        startTime6 = new Date($.now())
        $("#st6").val(formatDate(startTime6));
    });
    $("#btn7").click(function() {
        startTime7 = new Date($.now())
        $("#st7").val(formatDate(startTime7));
    });
    $("#btn8").click(function() {
        startTime8 = new Date($.now())
        $("#st8").val(formatDate(startTime8));
    });
    $("#btn9").click(function() {
        startTime9 = new Date($.now())
        $("#st9").val(formatDate(startTime9));
    });
    $("#btn10").click(function() {
        startTime10 = new Date($.now())
        $("#st10").val(formatDate(startTime10));
    });


    // on End test result, set end time, calculate and set total test time, 
    $(document).on('change', '#result1', function() {
		//if starttime not set reset end test if set acceidentally
		if($("#st1").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result1").selectedIndex = 0;
		//else store in results array set the end time, calculate total time and style select
		}else{		
			results[0] = $(this).val();
			endTime1 = new Date($.now());
			$("#et1").val(formatDate(endTime1));
			
			totTime1 = endTime1 - startTime1;
			totTime1 = msToTime(totTime1);
			$("#tt1").val(totTime1);
			if ($(this).val() == "fail") {
				console.log(totTime1);
				$(this).css("background-color", "#E41B17");           
			} else {
				$(this).css("background-color", "white");
			}
		}
		
    });
    $(document).on('change', '#result2', function() {
		if($("#st2").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result2").selectedIndex = 0;			
		}else{
			results[1] = $(this).val();
			endTime2 = new Date($.now());
			$("#et2").val(formatDate(endTime2));

			totTime2 = endTime2 - startTime2;
			totTime2 = msToTime(totTime2);
			$("#tt2").val(totTime2);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result3', function() {
		if($("#st3").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result3").selectedIndex = 0;			
		}else{
			results[2] = $(this).val();
			endTime3 = new Date($.now());
			$("#et3").val(formatDate(endTime3));

			totTime3 = endTime3 - startTime3;
			totTime3 = msToTime(totTime3);
			$("#tt3").val(totTime3);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result4', function() {
		if($("#st4").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result4").selectedIndex = 0;			
		}else{
			results[3] = $(this).val();
			endTime4 = new Date($.now());
			$("#et4").val(formatDate(endTime4));

			totTime4 = endTime4 - startTime4;
			totTime4 = msToTime(totTime4);
			$("#tt4").val(totTime4);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result5', function() {
		if($("#st5").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result5").selectedIndex = 0;			
		}else{
			results[4] = $(this).val();
			endTime5 = new Date($.now());
			$("#et5").val(formatDate(endTime5));

			totTime5 = endTime5 - startTime5;
			totTime5 = msToTime(totTime5);
			$("#tt5").val(totTime5);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result6', function() {
		if($("#st6").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result6").selectedIndex = 0;			
		}else{
			results[5] = $(this).val();
			endTime6 = new Date($.now());
			$("#et6").val(formatDate(endTime6));

			totTime6 = endTime6 - startTime6;
			totTime6 = msToTime(totTime6);
			$("#tt6").val(totTime6);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result7', function() {
		if($("#st7").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result7").selectedIndex = 0;			
		}else{
			results[6] = $(this).val();
			endTime7 = new Date($.now());
			$("#et7").val(formatDate(endTime7));

			totTime7 = endTime7 - startTime7;
			totTime7 = msToTime(totTime7);
			$("#tt7").val(totTime7);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");
				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result8', function() {
		if($("#st8").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result8").selectedIndex = 0;			
		}else{
			results[7] = $(this).val();
			endTime8 = new Date($.now());
			$("#et8").val(formatDate(endTime8));

			totTime8 = endTime8 - startTime8;
			totTime8 = msToTime(totTime8);
			$("#tt8").val(totTime8);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result9', function() {
		if($("#st9").val().length === 0){
			console.log('FIELD EMPTY');
			document.getElementById("result9").selectedIndex = 0;			
		}else{
			results[8] = $(this).val();
			endTime9 = new Date($.now());
			$("#et9").val(formatDate(endTime9));

			totTime9 = endTime9 - startTime9;
			totTime9 = msToTime(totTime9);
			$("#tt9").val(totTime9);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });
    $(document).on('change', '#result10', function() {
		if($("#st10").val().length === 0){
			//handle pressing end test by mistake
			document.getElementById("result10").selectedIndex = 0;			
		}else{
			results[9] = $(this).val();
			endTime10 = new Date($.now());
			$("#et10").val(formatDate(endTime10));

			totTime10 = endTime10 - startTime10;
			totTime10 = msToTime(totTime10);
			$("#tt10").val(totTime10);
			if ($(this).val() == "fail") {
				$(this).css("background-color", "#E41B17");				
			} else {
				$(this).css("background-color", "white");
			}
		}
    });




    //if select changes and more than 2 selects failed in results array set batch fail message and hidden input	 
    $(document).on('change', 'select', function() {
		
        var arrayLength = results.length;
		var fails =0;
		for (var i = 0; i < arrayLength; i++) {				
				if(results[i]=='fail'){
					fails++		
				}
				// if 2 or more fails display on page and set hidden input to fail
				if(fails>=2){
						 $("#batchResult").val('FAIL');
						 $('#failDiv').show();
						 $('#alert').text("BATCH FAILED!");
				}
				else{
						$("#batchResult").val('PASS');
						 $('#failDiv').hide();
						 $('#alert').text("");						
				}
		}		
       
    });

}); // end of document ready function