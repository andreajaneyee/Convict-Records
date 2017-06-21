 google.charts.load('current', {
     'packages': ['bar']
 });
 google.charts.setOnLoadCallback(drawStuff);
 //alert("MY TEST");
 function drawStuff() {
     /*
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);
		*/
     //jsonData = data.toJSON();
     //$("#fortest").load("getdata3.php");
     //var str = document.getElementById('fortest').innerText;
     var stringdata = "OLD STRING";
     jsonData = $.ajax({
         //url: "getdata3.php",
         url: "getpeopleships.php",
         success: function(msg) {
             //alert(data);
             //stringdata = data;
             /*
  }
});
*/
             stringdata = msg;
             //goodjsonData = '{"cols":[{"label":"Opening Move","type":"string"},{"label":"Percentage","type":"number"}],"rows":[{"c":[{"v":"Kings pawn (e4)"},{"v":44}]},{"c":[{"v":"Queens pawn (d4)"},{"v":31}]},{"c":[{"v":"Knight to King 3 (Nf3)"},{"v":12}]},{"c":[{"v":"Queens bishop pawn (c4)"},{"v":10}]},{"c":[{"v":"Other"},{"v":3}]}]}';
             //var data = new google.visualization.DataTable(goodjsonData);
             var data = new google.visualization.DataTable(
                 stringdata);
             myjason = data.toJSON();
             //document.getElementById('fortest').innerHTML = myjason;
             // document.getElementById('fortest').innerHTML = stringdata;
             var options = {
                 title: 'Chess opening moves',
                 width: 900,
                 legend: {
                     position: 'none'
                 },
                 chart: {
                     title: 'Chess opening moves',
                     subtitle: 'popularity by percentage'
                 },
                 bars: 'horizontal', // Required for Material Bar Charts.
                 axes: {
                     x: {
                         0: {
                             side: 'top',
                             label: 'Percentage'
                         } // Top x-axis.
                     }
                 },
                 bar: {
                     groupWidth: "90%"
                 }
             };
             var chart = new google.charts.Bar(document.getElementById(
                 'top_x_div'));
             chart.draw(data, options);
         }
     });
 };