google.charts.load('current', {'packages': ['geochart']});
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
      var data = google.visualization.arrayToDataTable([
        ['City',   'Convict Population'],
        ['Sydney',     1033],
        ['Moreton Bay',  57],
        ['Port Macquarie',     6],
        ['Norfolk Island',   23],
        ['Campbelltown',     61],
        ['Hyde Park',   29],
        ['Goulburn',   16],
        ['Parramatta',   140],
        ['Illawarra',   2],
        ['Mount York',   2],
        ['Mount Victoria',   2],
        ['Hunter River',   6],
        ['Minto',   2],
        ['Airds', 2],
        ['Penrith', 193],
        ['Windsor', 216],
        ['Paterson', 8],
        ['Maitland', 64],
        ['Luskintyre', 17],
        ['Bathurst', 172],
        ['Cawdor', 8],
        ['Bringelly', 12],
        ['Liverpool', 55],
        ['Sutton Forest', 36],
        ['Stonequarry', 6],
      ]);

      var options = {
        region: 'AU',
        displayMode: 'markers',
        colorAxis: {colors: ['#a06f3d', '#ffba75']},
        backgroundColor: '#f2f2f2',
      	datalessRegionColor: '#eb7600',
      	defaultColor: '#f5f5f5',
      };

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      chart.draw(data, options);

    };