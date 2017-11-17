<html lang="en">
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>      
  <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
  <script type="text/javascript" src="http://openlayers.org/api/OpenLayers.js"></script>
  <link rel="stylesheet" type="text/css" href="styling.css">          
  <script src="http://openlayers.org/api/OpenLayers.js"></script>
   

                
        <script type="text/javascript">
            function validateloc()
            {
                if(document.getElementById('straddr').value.trim() == '')
                 { alert("Please enter the Street Adress");
                return false;     
                 }

                if(document.getElementById('city').value.trim() == '')
                {alert("Please enter the city");return false;}

                if(document.getElementById('State').options[document.getElementById('State').selectedIndex].value == "" )
                {  alert("Please select the State");
                 return false;  
                }
                return true;
                }
            function clearform()
            {
                document.getElementById("straddr").value='';
                document.getElementById("city").value='';
                document.getElementById("State").selectedIndex=0;
                document.getElementsByName("degree")[0].checked=true;
                document.getElementById("myform").submit();
                return false;
            
            }
           
        </script>
       
    </head>
    
    <body id="home" onload="mapfunc()">
        
        <div class="container"> 
            
            <center><b><h2>Forecast Search</h2></b></center>
            
                <form class="form-inline" id="myform" name="myform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    
                  <div class="form-group">
                     <label for="staddr">Street Address:</label>
                     <input type="text" class="form-control" id="straddr" name="straddr" value="<?php echo isset($_GET['straddr'])? $_GET['straddr'] : ''?>">
                  </div>
                  <div class="form-group">
                      <label for="city">City:</label>
                      <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($_GET['city'])? $_GET['city'] : ''?>">
                  </div>
                  <div class="form-group">
                      <label for="State">State:</label>
                      <select class="form-control" size=1 name="State" id="State">
                <option value="" selected="selected">Select your state</option>    
                <option value="AL" <?php if(isset($_GET["State"]) AND $_GET["State"] == "AL") { echo "selected='selected'"; } ?>>Alabama</option>
                <option value="AK" <?php if(isset($_GET["State"]) AND $_GET["State"] == "AK") { echo "selected='selected'"; } ?>>Alaska</option>
                <option value="AZ" <?php if(isset($_GET["State"]) AND $_GET["State"] == "AZ") { echo "selected='selected'"; } ?>>Arizona</option>
                <option value="AR" <?php if(isset($_GET["State"]) AND $_GET["State"] == "AR") { echo "selected='selected'"; } ?>>Arkansas</option>
                <option value="CA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "CA") { echo "selected='selected'"; } ?>>California</option>
                <option value="CO" <?php if(isset($_GET["State"]) AND $_GET["State"] == "CO") { echo "selected='selected'"; } ?>>Colorado</option>
                <option value="CT" <?php if(isset($_GET["State"]) AND $_GET["State"] == "CT") { echo "selected='selected'"; } ?>>Connecticut</option>
                <option value="DE" <?php if(isset($_GET["State"]) AND $_GET["State"] == "DE") { echo "selected='selected'"; } ?>>Delaware</option>
                <option value="DC" <?php if(isset($_GET["State"]) AND $_GET["State"] == "DC") { echo "selected='selected'"; } ?>>District Of Columbia</option>
                <option value="FL" <?php if(isset($_GET["State"]) AND $_GET["State"] == "FL") { echo "selected='selected'"; } ?>>Florida</option>
                <option value="GA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "GA") { echo "selected='selected'"; } ?>>Georgia</option>
                <option value="HI" <?php if(isset($_GET["State"]) AND $_GET["State"] == "HI") { echo "selected='selected'"; } ?>>Hawaii</option>
                <option value="ID" <?php if(isset($_GET["State"]) AND $_GET["State"] == "ID") { echo "selected='selected'"; } ?>>Idaho</option>
                <option value="IL" <?php if(isset($_GET["State"]) AND $_GET["State"] == "IL") { echo "selected='selected'"; } ?>>Illinois</option>
                <option value="IN" <?php if(isset($_GET["State"]) AND $_GET["State"] == "IN") { echo "selected='selected'"; } ?>>Indiana</option>
                <option value="IA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "IA") { echo "selected='selected'"; } ?>>Iowa</option>
                <option value="KS" <?php if(isset($_GET["State"]) AND $_GET["State"] == "KS") { echo "selected='selected'"; } ?>>Kansas</option>
                <option value="KY" <?php if(isset($_GET["State"]) AND $_GET["State"] == "KY") { echo "selected='selected'"; } ?>>Kentucky</option>
                <option value="LA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "LA") { echo "selected='selected'"; } ?>>Louisiana</option>
                <option value="ME" <?php if(isset($_GET["State"]) AND $_GET["State"] == "ME") { echo "selected='selected'"; } ?>>Maine</option>
                <option value="MD" <?php if(isset($_GET["State"]) AND $_GET["State"] == "MD") { echo "selected='selected'"; } ?>>Maryland</option>
                <option value="MA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "MA") { echo "selected='selected'"; } ?>>Massachusetts</option>
                <option value="MI" <?php if(isset($_GET["State"]) AND $_GET["State"] == "MI") { echo "selected='selected'"; } ?>>Michigan</option>
                <option value="MN" <?php if(isset($_GET["State"]) AND $_GET["State"] == "MN") { echo "selected='selected'"; } ?>>Minnesota</option>
                <option value="MS" <?php if(isset($_GET["State"]) AND $_GET["State"] == "MS") { echo "selected='selected'"; } ?>>Mississippi</option>
                <option value="MO" <?php if(isset($_GET["State"]) AND $_GET["State"] == "MO") { echo "selected='selected'"; } ?>>Missouri</option>
                <option value="MT" <?php if(isset($_GET["State"]) AND $_GET["State"] == "MT") { echo "selected='selected'"; } ?>>Montana</option>
                <option value="NE" <?php if(isset($_GET["State"]) AND $_GET["State"] == "NE") { echo "selected='selected'"; } ?>>Nebraska</option>
                <option value="NV" <?php if(isset($_GET["State"]) AND $_GET["State"] == "NV") { echo "selected='selected'"; } ?>>Nevada</option>
                <option value="NH" <?php if(isset($_GET["State"]) AND $_GET["State"] == "NH") { echo "selected='selected'"; } ?>>New Hampshire</option>
                <option value="NJ" <?php if(isset($_GET["State"]) AND $_GET["State"] == "NJ") { echo "selected='selected'"; } ?>>New Jersey</option>
                <option value="NM" <?php if(isset($_GET["State"]) AND $_GET["State"] == "NM") { echo "selected='selected'"; } ?>>New Mexico</option>
                <option value="NY" <?php if(isset($_GET["State"]) AND $_GET["State"] == "NY") { echo "selected='selected'"; } ?>>New York</option>
                <option value="NC" <?php if(isset($_GET["State"]) AND $_GET["State"] == "NC") { echo "selected='selected'"; } ?>>North Carolina</option>
                <option value="ND" <?php if(isset($_GET["State"]) AND $_GET["State"] == "ND") { echo "selected='selected'"; } ?>>North Dakota</option>
                <option value="OH" <?php if(isset($_GET["State"]) AND $_GET["State"] == "OH") { echo "selected='selected'"; } ?>>Ohio</option>
                <option value="OK" <?php if(isset($_GET["State"]) AND $_GET["State"] == "OK") { echo "selected='selected'"; } ?>>Oklahoma</option>
                <option value="OR" <?php if(isset($_GET["State"]) AND $_GET["State"] == "OR") { echo "selected='selected'"; } ?>>Oregon</option>
                <option value="PA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "PA") { echo "selected='selected'"; } ?>>Pennsylvania</option>
                <option value="RI" <?php if(isset($_GET["State"]) AND $_GET["State"] == "RI") { echo "selected='selected'"; } ?>>Rhode Island</option>
                <option value="SC" <?php if(isset($_GET["State"]) AND $_GET["State"] == "SC") { echo "selected='selected'"; } ?>>South Carolina</option>
                <option value="SD" <?php if(isset($_GET["State"]) AND $_GET["State"] == "SD") { echo "selected='selected'"; } ?>>South Dakota</option>
                <option value="TN" <?php if(isset($_GET["State"]) AND $_GET["State"] == "TN") { echo "selected='selected'"; } ?>>Tennessee</option>
                <option value="TX" <?php if(isset($_GET["State"]) AND $_GET["State"] == "TX") { echo "selected='selected'"; } ?>>Texas</option>
                <option value="UT" <?php if(isset($_GET["State"]) AND $_GET["State"] == "UT") { echo "selected='selected'"; } ?>>Utah</option>
                <option value="VT" <?php if(isset($_GET["State"]) AND $_GET["State"] == "VT") { echo "selected='selected'"; } ?>>Vermont</option>
                <option value="VA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "VA") { echo "selected='selected'"; } ?>>Virginia</option>
                <option value="WA" <?php if(isset($_GET["State"]) AND $_GET["State"] == "WA") { echo "selected='selected'"; } ?>>Washington</option>
                <option value="WV" <?php if(isset($_GET["State"]) AND $_GET["State"] == "WV") { echo "selected='selected'"; } ?>>West Virginia</option>
                <option value="WI" <?php if(isset($_GET["State"]) AND $_GET["State"] == "WI") { echo "selected='selected'"; } ?>>Wisconsin</option>
                <option value="WY" <?php if(isset($_GET["State"]) AND $_GET["State"] == "WY") { echo "selected='selected'"; } ?>>Wyoming</option>
                    </select>
                    </div>
                  <div class="radio">
                      <label for="degree">Degree:</label>
                      <label>Fahrenheit</label>
                      <input type="radio" id="degree" name="degree" value="Fahrenheit" checked <?php if(isset($_GET["degree"]) AND $_GET["degree"] == "Fahrenheit") { echo "checked";} ?> />
                      <label>Celsius</label>
                      <input type="radio" id="degree" name="degree" value="Celsius" <?php if(isset($_GET["Degree"]) AND $_GET["Degree"] == "Celsius") { echo "checked";} ?> />
                  </div>
                  <button type="submit" id="search" class="btn btn-default" name="search" value="search" onclick="return validateloc();">Search</button>
                  <button type="submit" class="btn btn-default" name="clear" value="clear" onclick="return clearform();" >Clear</button> 
                Powered By:<a href="http://forecast.io/"><img src="http://cs-server.usc.edu:45678/hw/hw8/images/forecast_logo.png" alt="Forecast Logo"                                                                                     id="forecastlogo"></a>
                    
               </form>
         
            <hr>
            <script type="text/javascript">
                
                
                function timeformat(time) 
                {
                      timefinal=new Date(time*1000);
                      var hrs = timefinal.getHours();
                      var mins = timefinal.getMinutes();
                      var ampm = hrs >= 12 ? 'PM' : 'AM';
                      hrs = hrs % 12;
                      hrs = hrs ? hrs : 12; 
                      mins = mins < 10 ? '0'+mins : mins;
                      var timestr = hrs + ':' + mins + ' ' + ampm;
                      return timestr;
                }
                
               
                
                    function mapfunc()
                    {
                    var lonlat = new OpenLayers.LonLat(0, 0);

                    var map = new OpenLayers.Map("basicMap");

                    var mapnik = new OpenLayers.Layer.OSM();    


                    var layer_cloud = new OpenLayers.Layer.XYZ(
                        "clouds",
                        "http://${s}.tile.openweathermap.org/map/clouds/${z}/${x}/${y}.png",
                        {

                            isBaseLayer: false,
                            opacity: 0.7,
                            sphericalMercator: true
                        }
                    );

                    var layer_precipitation = new OpenLayers.Layer.XYZ(
                        "precipitation",
                        "http://${s}.tile.openweathermap.org/map/precipitation/${z}/${x}/${y}.png",
                        {

                            isBaseLayer: false,
                            opacity: 0.7,
                            sphericalMercator: true
                        }
                    );

                    map.addLayers([mapnik, layer_precipitation, layer_cloud]);
                    }
               


    
                
                function parsing(obj){
                if(obj.currently.icon == "clear-day"){
                         image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear.png" alt="clear" title="clear" height="80" width="50"/>';
                    }
                    else if(obj.currently.icon == "clear-night"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear_night.png" alt="clear-night" title="clear-night" height="80" width="50"/>';
 
                    }
                    else if(obj.currently.icon == "rain"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/rain.png" alt="rain" title="rain" height="80" width="50"/>';
                    }
                    else if(obj.currently.icon == "snow"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/snow.png" alt="snow" title="snow" height="80" width="50"/>';

                    }
                    else if(obj.currently.icon == "sleet"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/sleet.png" alt="sleet" title="sleet" height="80" width="50"/>';
 
                    }
                    else if(obj.currently.icon == "wind"){
                       image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/wind.png" alt="wind" title="wind"/>';
                    }
                    else if(obj.currently.icon == "fog"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/fog.png" alt="fog" title="fog"/>';
                    }
                    else if(obj.currently.icon == "cloudy"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloudy.png" alt="cloudy" title="cloudy" height="80" width="50"/>';
    
                    }
                    else if(obj.currently.icon == "partly-cloudy-day"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloudy_day.png" alt="partly-cloudy-day" title="partly-cloudy-day" height="80" width="50"/>';

                    }
                    else if(obj.currently.icon == "partly-cloudy-night"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloud_night.png" alt="partly-cloud-night" title="partly-cloud-night" height="80" width="50"/>';
                            
                    }
                    
                    document.getElementById("topleft").innerHTML=image;
                    
                    weathcond = obj.currently.summary+' '+'in'+' '+ myform.city.value +','+myform.State.value;
                    document.getElementById("topright1").innerHTML=weathcond;
                    
                  
                    if(myform.degree == 'Fahrenheit')
                    {
                    currtemp =  int(obj.currently.temperature)  ; 
                    document.getElementById("topright2").innerHTML=currtemp;
                    }
                    else if(myform.degree == 'Celsuis'){
                    currtemp =  int(obj.currently.temperature)  ; 
                    document.getElementById("topright2").innerHTML=currtemp;
                    }
                    lowhigh1 = obj.daily.data[0].temperatureMax ; 
                    lowhigh2 = obj.daily.data[0].temperatureMin ;
                    document.getElementById("topright3").innerHTML='L:'+lowhigh1+'&deg'+'|'+'H:'+lowhigh2+'&deg' ;
                    
                    if(obj.currently.precipIntensity >= '0' && obj.currently.precipIntensity < '0.002')
                    {
                        
                          pre = "None";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.002' && obj.currently.precipIntensity < '0.017')
                    {
                          pre = "Very Light";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.017' && obj.currently.precipIntensity < '0.1')
                    {
                          pre = "Light";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.1' && obj.currently.precipIntensity < '0.4')
                    {
                        pre = "Moderate";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.4')
                    {
                        pre = "Heavy";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    
                    chance = obj.currently.precipProbability * 100;
                    document.getElementById("rainchance").innerHTML = chance + '%';
                   
                    if(myform.degree.value == 'Fahrenheit')
                    {
                    winds = obj.currently.windSpeed;
                    document.getElementById("windspeed").innerHTML = winds.toFixed(2) +' ' +'mph';
                    }
                    else if(myform.degree.value == 'Celsius')
                    {
                    winds = obj.currently.windSpeed;
                    document.getElementById("windspeed").innerHTML = winds.toFixed(2) + 'm/s';
                    }
                    
                    if(myform.degree.value == 'Fahrenheit')
                    {
                    dew = obj.currently.dewPoint;
                    document.getElementById("dewpoint").innerHTML = dew.toFixed(2) + '&deg  F';
                    }
                    else if(myform.degree.value == 'Celsius')
                    {
                    dew = obj.currently.dewPoint;
                    document.getElementById("dewpoint").innerHTML = dew.toFixed(2) + '&deg  C';
                    }
                    
                    hum = obj.currently.humidity * 100;
                    document.getElementById("humid").innerHTML = hum + '%'; 
                    
                    if(myform.degree.value == 'Fahrenheit')
                    {
                    vis = obj.currently.visibility;
                    document.getElementById("visi").innerHTML = vis.toFixed(2) +' ' +'mi';
                    }
                    else if(myform.degree.value == 'Celsius')
                    {
                    vis = obj.currently.visibility;
                    document.getElementById("visi").innerHTML = vis.toFixed(2) +' '+'km';
                    }
                    
                    time = obj.daily.data[0].sunriseTime;
                    document.getElementById("risetime").innerHTML = timeformat(time);
                    
                    time = obj.daily.data[0].sunsetTime;
                    document.getElementById("settime").innerHTML = timeformat(time);
                }
    
                
            </script>
            
        
        <script type="text/javascript">
            var contentType="application/x-www-form-urlencoded; charset=utf-8";
            $(document).ready(function(){
              $('#search').click(function(){
               $.ajax({	
                url:	'http://cs-server.usc.edu:22221/index.php' ,
                dataType: "json",        
                data:{straddr: document.getElementById("straddr").value, city: document.getElementById("city").value,State: "CA" ,degree: "Fahrenheit" },
                type:'GET',
                crossDomain : true,
                contentType : contentType,
                success: function(output)
                {
                    obj=JSON.parse(output);
                    parsing(obj);
                    
                    
                },
                error:	function(er){
                        console.log(er);
                }
            });
             return false;
            });
            });
        </script>
            
           
             
             <div class="row">
                   <ul class="nav nav-tabs">
                     <li class="active"><a  data-toggle="tab" href="#tab1">Right Now</a></li>
                     <li><a data-toggle="tab" href="#tab2">Next 24 Hours</a></li>
                     <li><a data-toggle="tab" href="#tab3">Next 7 Days</a></li>
                   </ul>
                <div class="col-sm-6" id="tabspart">
                    <div id="tab1"> 
                        <div class="row" id="top">
                            <div class="col-sm-6" id="topleft"></div>
                            <div class="col-sm-6" id="topright">
                                <div id="topright1"></div><br>
                                <div id="topright2"></div><br>
                                <div id="topright3"></div>
                            </div>
                        </div>
                    <div class="row" id="bottom">
                        <div id="precip">
                            <span style="float:left;align:center;">Precipitation</span>
                            <span id="precipval"></span>
                        </div>
                        <div id="chr">
                            <span style="float:left;align:center;">Chance of Rain</span>
                            <span id="rainchance"></span>
                        </div> 
                        <div id="ws">
                            <span style="float:left;align:center;">Wind Speed</span>
                            <span id="windspeed"></span>
                        </div>
                        <div id="dp">
                            <span style="float:left;align:center;">Dew Point</span>
                            <span id="dewpoint"></span>
                        </div>
                        <div id="hd">
                            <span style="float:left;align:center;">Humidity</span>
                            <span id="humid"></span>
                        </div> 
                        <div id="vs">
                            <span style="float:left;align:center;">Visibility</span>
                            <span id="visi"></span>
                        </div>
                        <div id="sr">
                            <span style="float:left;align:center;">Sunrise</span>
                            <span id="risetime"></span>
                        </div>
                        <div id="ss">
                            <span style="float:left;align:center;">Sunset</span>
                            <span id="settime"></span>
                        </div>    
                        
                    </div>
                    </div>

                </div>
                <div class="col-sm-6" id="basicMap">
                 
                </div> 
        
          </div>
</body>
</html>