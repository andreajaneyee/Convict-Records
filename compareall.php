<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
		  
		var stringdata = "OLD STRING";
		jsonData = $.ajax({
  url: "getallgroups.php?name=Age",
  success: function(msg){

stringdata = msg;

		 var data = new google.visualization.DataTable(stringdata);

		 
		 myjason = data.toJSON();
		 

          var options = {
          title: 'Number of convicts',
          legend: { position: 'none' },
          chart: { title: 'Number of convicts',
                   subtitle: 'Breakdown of Age' },
          bars: 'vertical'//, // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        //chart.draw(data, options);
		chart.draw(data, google.charts.Bar.convertOptions(options));
		
		
		
		
		  }
});
		
      };
	  
	  
	  function makenewgraph() {
		  //document.getElementById('fortest').innerHTML = "BUT";
		  
		  var e = document.getElementById("chooseselector");
var strUser = e.options[e.selectedIndex].value;

//document.getElementById('fortest').innerHTML = strUser;
		  
		  var stringdata = "OLD STRING";
		jsonData = $.ajax({
  url: "getallgroups.php?name="+strUser,
  success: function(msg){

stringdata = msg;

		 var data = new google.visualization.DataTable(stringdata);
		 
		 myjason = data.toJSON();
		 
	  var e = document.getElementById("chooseselector");
var strUser = e.options[e.selectedIndex].text;
		 
		 
        var options = {
          title: 'Number of convicts',
          legend: { position: 'none' },
          chart: { title: 'Number of convicts',
                   subtitle: 'Breakdown by '+strUser },
          bars: 'vertical'//, // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
		
		
		
		
		  }
});
		  
		  
		  
	  };
    </script>
  </head>
  <body>
    <p> Choose what data you want to see </p>
	<select id="chooseselector">
	<option value="Complexion">Complexion</option>
	<option value="Hair">Hair</option>
	<option value="Age">Age</option>
	<option value="Eyes">Eyes</option>
	<option value="Religion">Religion</option>
	<option value="Born">Place of birth</option>
	</select>
	<button  onclick="makenewgraph()">See graph</button>
	<div id="top_x_div" style="width: 900px; height: 500px;"></div>
	
	<div id="fortest"></div>
  </body>
</html>