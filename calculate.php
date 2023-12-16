<?php
    $val; 
    $radio = $_POST['wval'];
    $p = "p";
    $h = "h";
    if(strcmp($radio, $p) === 0){
        $val = $_POST['percent'];
    }else if(strcmp($radio, $h) === 0){
        $val = $_POST['hour'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <meta name="robots" content="all" />
	    <title>Author|Arif</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <style type="text/css">
            td {
                width: 50px;
                height: 50px;
                border: 1px solid black;
            }
        </style>
        
    </head>
    <body onload="calculate()">

        <script type="text/JavaScript">
            function calculate() {

                  var x = <?php echo $val; ?>;
                  var r = <?php echo json_encode($radio); ?>;
                  // document.getElementById("demo").innerHTML = x;  
                  if(x === null || x === ""){
                    alert("You must put a value");
                  }else if(isNaN(x)){
                    alert("You must put number value");
                  }else{
                    if(x>120 && r=='p'){
                        alert("Number not bigger than 120");
                    }else{
                        
                        var day = 251;
                        var workingHours;
                        if(r=='p'){
                            workingHours = (day*8*x)/100;
                        }else{
                            workingHours = x;
                        }
                        
                        var dailyHour = workingHours/day;
                        document.getElementById("hours").innerHTML = Number(dailyHour).toFixed(2);
                        const monthName = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                        const monthTotalDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                        const monthWorkingDays = [21, 20, 23, 18, 21, 20, 21, 23, 21, 22, 22, 19];

                        
                        document.getElementById("table").style.display = 'block'; 
                        var table = document.getElementById("tableBody");
                        var i = 0;
                        for(i; i<monthName.length;i++) {
                            var row = table.insertRow(i);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3);

                            cell1.innerHTML = monthName[i];
                            cell2.innerHTML = monthWorkingDays[i];
                            cell3.innerHTML = Number(monthWorkingDays[i]*dailyHour).toFixed(2);
                            cell4.innerHTML = monthTotalDays[i]-monthWorkingDays[i];
                        }
                        var row = table.insertRow(i);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);

                        

                        cell1.innerHTML = "Total";
                        cell2.innerHTML = day;
                        cell3.innerHTML = workingHours;
                        cell4.innerHTML = 365-day;

                  }
                  
                }
            }
            </script>
       
        <h2>Employee Hour Checking</h2>
       
        <button><a href="home.php">Back Home</a></button>
         
        <section>

            <h3>Your Data</h3>

            <?php 
                if(strcmp($radio, $p) === 0){
            ?>
            <h3>Your Woking Percentage is : <?php echo $val; ?>%</h3>            
            <?php 
               } else if(strcmp($radio, $h) === 0){
            ?>
            <h3>Your yearly Woking hour is : <?php echo $val; ?> hour</h3>
            <?php 
                } else{
            ?>
            <h3>No value found. </h3>
            <?php } ?>
            <h3>Your Daily Woking Hour is : <span id="hours"></span></h3>
            <div id="data">
                <table id="table">
                    <thead>
                        <td><b>Month</b></td>
                        <td><b>Working Days</b></td>
                        <td><b>Working Hour</b></td>
                        <td><b>Holidays(include Weekends)</b></td>
                    </thead>
                    <tbody id="tableBody">
                       
                    </tbody>
                    
                </table>
                
            </div>
            
            
        </section>        
        
        
    </body>

    
</html>