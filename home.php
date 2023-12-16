<?php
    $counter = file_get_contents('./hits.txt') + 1;
    
    file_put_contents('./hits.txt', $counter);
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
    <body>
        <header>
            <h1>Employee Hour Checking For all type of Workers in Sweden for 2023</h1>
        </header>

         
        <section>

            <h3>Your Details</h3>
            <p>If you know how many hours in a year you have to do then select Total Hours of year and if you know percentage of your work then select Percentage of work. Recommend to choose second one and to know your total hours of a year.</p>

            <form method="post" action="calculate.php">
                <script type="text/javascript">

                function radioCheck() {
                    if (document.getElementById('percentage').checked) {
                        document.getElementById('percentageTake').style.display = 'block';
                        document.getElementById('hoursTake').style.display = 'none';
                    }
                    else if(document.getElementById('hours').checked){
                        document.getElementById('percentageTake').style.display = 'none';
                        document.getElementById('hoursTake').style.display = 'block';
                    }

                }

                </script>

                <input type="radio" onclick="javascript:radioCheck();" name="wval" id="percentage" value="p"><label>Percentage of Work </label> <br><br>
                <div id="percentageTake" style="display:none">
                    <input type="text" id="percent" name="percent" placeholder="50"><br><br>
                </div>
                <input type="radio" onclick="javascript:radioCheck();" name="wval" id="hours" value="h"><label>Total Hours of year </label><br><br>
                

                <div id="hoursTake" style="display:none">
                    <input type="text" id="hour" name="hour" placeholder="150">
                </div><br><br>
                <!-- <label for="percent">Percantage of Work:</label>
                <input type="text" id="percent" name="percent" placeholder="50"><br><br>
                 -->  
                <input type="submit"  value="Click here" >
                <!-- <button onclick="calculate()">Click Here</button> -->
            </form>
            
           

            
        </section>
        <aside>
           
        </aside>
        <!-- <footer>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8124.039124879704!2d18.040786822889647!3d59.39954928708279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sse!4v1591039968846!5m2!1sen!2sse" width=100% height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <a href="mailto:di@yahoo.com">Email us here</a>
            <p>All rights reserved to ----</p>            
        </footer> -->
        
    </body>
    
</html>