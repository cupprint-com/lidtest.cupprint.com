// helper functions
function padTo2Digits(num) {
  return num.toString().padStart(2, '0');
}

function formatDate(date) {
  return (
    [
      date.getFullYear(),
      padTo2Digits(date.getMonth() + 1),
      padTo2Digits(date.getDate()),
    ].join('/') +
    ' ' +
    [
      padTo2Digits(date.getHours()),
      padTo2Digits(date.getMinutes()),
      padTo2Digits(date.getSeconds()),
    ].join(':')
  );
}



function msToTime(s) {
		  var ms = s % 1000;
		  s = (s - ms) / 1000;
		  var secs = s % 60;
		  s = (s - secs) / 60;		  
		  secs = ('0' + secs).slice(-2);
		  console.log();
		  var mins = s % 60;
		  mins = ('0' + mins).slice(-2);
		  var hrs = (s - mins) / 60		  
		  hrs = ('0' + hrs).slice(-2);		  
		  
		  if(isNaN(secs)){
			  return 'You need to start the test first'; 
		  }else{
			  return  hrs+':'+mins + ':' + secs ;
		  }
	}

// digital clock
function startTime() {
	  const today = new Date();
	  let h = today.getHours();
	  let m = today.getMinutes();
	  let s = today.getSeconds();
	  m = checkTime(m);
	  s = checkTime(s);
	  document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
	  setTimeout(startTime, 1000);
	}

	function checkTime(i) {
	  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	  return i;
	}


