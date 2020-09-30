function Chart_1()
{
     var A=document.getElementById('area').value;
     var M=document.getElementById('id').value;

      if(A=='Colombo' && M=='1')
      {
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 100],
             ['Eggs', 500],
             ['New Group', 200],
             ['Main Group', 250],
             ['Total', 300]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Colombo 1st Semester ','width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
     
      }

      if(A=='Colombo' && M=='2')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 500],
             ['Eggs', 800],
             ['New Group', 500],
             ['Main Group', 600],
             ['Total', 1000]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Colombo 2nd Semester ', 'width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }

      if(A=='Colombo' && M=='3')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 80],
             ['Eggs', 100],
             ['New Group', 50],
             ['Main Group', 20],
             ['Total', 150]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Colombo 3rd Semester ', 'width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }

      if(A=='Hikkaduwa' && M=='1')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 500],
             ['Eggs', 1000],
             ['New Group', 600],
             ['Main Group', 1500],
             ['Total', 2000]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Hikkaduwa 1st Semester ', 'width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }

      if(A=='Hikkaduwa' && M=='2')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 1000],
             ['Eggs', 2500],
             ['New Group', 1000],
             ['Main Group', 1500],
             ['Total', 2250]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Hikkaduwa 2nd Semester ', 'width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }

      if(A=='Hikkaduwa' && M=='3')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 300],
             ['Eggs', 600],
             ['New Group', 500],
             ['Main Group', 800],
             ['Total', 1000]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Hikkaduwa 3rd Semester ', 'width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }

      if(A=='Hambanthota' && M=='1')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 150],
             ['Eggs', 650],
             ['New Group', 300],
             ['Main Group', 900],
             ['Total', 1000]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Hambanthota 1st Semester ','width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }

      if(A=='Hambanthota' && M=='2')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 450],
             ['Eggs', 1000],
             ['New Group', 500],
             ['Main Group', 900],
             ['Total', 1200]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Hambanthota 2nd Semester ', 'width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }

      if(A=='Hambanthota' && M=='3')
      {

         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         // Draw the chart and set the chart values
         function drawChart()
         {
   
             var data = google.visualization.arrayToDataTable([
             ['Task', 'Hours per Day'],
             ['Elders', 400],
             ['Eggs', 1200],
             ['New Group', 800],
             ['Main Group', 1500],
             ['Total', 2000]


             ]);

               // Optional; add a title and set the width and height of the chart
               var name_title=document.getElementById('area').value;
               var options = {'title':'The View Of Hambanthota 3rd Semester ', 'width':800, 'height':650};

               // Display the chart inside the <div> element with id="piechart"
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
         }
      }
}