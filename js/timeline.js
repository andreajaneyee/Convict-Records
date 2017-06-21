
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
		  
		var stringdata = "OLD STRING";
		jsonData = $.ajax({
  url: "gettimeline.php",
  success: function(msg){

stringdata = msg;

		 var data = new google.visualization.DataTable(stringdata);
		 
		 myjason = data.toJSON();
		 

        var options = {
          title: 'Chess opening moves',
          width: 900,
            colors: ['#eb7600'],
            
            
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'bottom', label: 'Year of conviction'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
		
		
		
		
		  }
});
		
		
		
		
		
		
      };
