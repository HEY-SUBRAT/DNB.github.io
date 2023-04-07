<html>
    <head>

        <style>

.News-footer{
      position: fixed;
      bottom: 0;
      margin: 0;
      width: 100%;
      background-color: blue;
      display: inline-flex;
      overflow: hidden;
      white-space: nowrap;
      z-index: 99;
    }
    .N-text{
      padding-top: 10px;
      vertical-align: middle;
      font-size: 25px;
      color: white;
      margin: 0;
      width:100%;
      animation: marquee 10s linear infinite;
      display: inline-block;
      padding-right: 10px;
    }
    .news{
      height: auto;
      background-color: red;
      padding: 13px 30px 10px 30px;
      font-size: 20px;
      color:#fff;
      z-index: 9;
      display: block;
    }
    .news:after{
      top:0;
      width:100%;
      height: 220px;
      position: absolute;
      z-index: 99;
      animation:slide 5s infinite;
      background: -moz-linear-gradient(left,rgba(255,255,255,0) 0%),rgba(255,255,255,0.8) 50%,rgba(128,186,232,0) 99%,rgba(125,185,232,0);}


      body {
      font-family: sans-serif;
      /* height:80px; */
      margin: 0;
      padding: 0;
      height: 100vh;
     
    }
    .container{
        height: 150px;
        background-color: rgb(136, 245, 255);
        /* text-align: center; */
        width:1800px;

       

    }

    .image{
        width: 200px;
        height:100px;
        /* background-color: #424558; */
        float: left;
    } 
  
    
    /* .clock {
        width: 438px;
        height: 100px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: red;
      float:right;
      margin-bottom: 30px;
    } */

    .time {
      font-size: 30px;
      font-weight: bold;
      color: white;
    }

    .date-time {
      font-size: 18px;
      color: #fff;
    }

    @media screen and(max-width:1800px) {
      .time {
        font-size: 50px;
      } 
    }

        </style>

<!-- <script>
    var time = document.querySelector(".time");
    var dateTime = document.querySelector(".date-time");

    function updateClock() {
      // Get the current time, day , month and year
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds();
      var day = now.getDay();
      var date = now.getDate();
      var month = now.getMonth();
      var year = now.getFullYear();

      // store day and month name in an array
      var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

      // format date and time
      hours = hours % 12 || 12;
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;
      date = date < 10 ? "0" + date : date; -->
<!-- 
      // display date and time
      var period = hours < 12 ? "AM" : "PM";
      time.innerHTML = hours + ":" + minutes + ":" + seconds + " " + period;
      dateTime.innerHTML = dayNames[day] + ", " + monthNames[month] + " " + date + ", " + year;
    }

    updateClock();
    setInterval(updateClock, 1000);
  </script> -->
   </head>


    <body>
      <?php include 'dbcon.php';
      $resultx = $con->query("SELECT news FROM upcoming");
?>
    <div class="News-footer">
    <div class="news">
      <span id="news-head"><b>News</b></span>
    </div>
    <p class="N-text">
      <marquee direction="left">
        <a class="t-link" href="#"></a>
        
        <span ><?php
        if (mysqli_num_rows($resultx) > 0){
          while($rows= mysqli_fetch_array($resultx)){
            // echo '<label>'.$row['news'].'</label>';  
            echo '<label>'.$rows['news'].'</label>'; 
            // echo '<label><a href="'.$row['news'].'" target="_blank">'.$row['news'].'</a></label>';  
          }
          
        }
        
        ?></span>

        
        
        <!-- <span>Upcomming events of our college</span>
        <span>Upcomming events of our college</span>
        <span>Upcomming events of our college</span> -->
        
      </marquee>
    </p>
  </div>

  <!-- <div class="clock">
            <div class="time"></div>
            <div class="date-time"></div>
          </div>
    </body>
</html> -->