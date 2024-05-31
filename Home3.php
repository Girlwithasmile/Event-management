<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Dropdown</title>
    <style>
body{
    background-color: rgb(2, 12, 34);
}

.dropbtn {
  background-color: rgb(2, 12, 34);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #89CFF0;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.page{
    padding-top: 35px;
    padding-left: 365px;
    color: white;
}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #50B8E9;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #50B8E9;}

    </style>
</head>
<div>
<div class="navbar">
    <button class="dropbtn">Home</button>
    <button class="dropbtn">Department</button>
<div class="dropdown">
  <button class="dropbtn">Technical Council/Club Events</button>
  <div class="dropdown-content">
    <a href="#">Codecell</a>
    <a href="#">CSI</a>
    <a href="#">SMLRA</a>
    <a href="#">Datazen</a>
    <a href="#">Bloombox</a>
    <a href="#">ISTE</a>
    <a href="#">IETE</a>
    <a href="#">EESA</a>
    <a href="#">MESA</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Non-technical Council/Club events</button>
  <div class="dropdown-content">
    <a href="#">Student Council</a>
    <a href="#">Illuminati</a>
    <a href="#">Alumni Cell</a>
    <a href="#">Team Yugandhar</a>
    <a href="#">Team Rhapsody</a>
    <a href="#">Team Insignia</a>
    <a href="#">Team Palinoia</a>
    <a href="#">Team Gyrations</a>
    <a href="#">Team Parvaah</a>
    <a href="#">Team Shutterbugs</a>
    <a href="#">Team Octavium</a>
    <a href="#">Team Emfinity</a>
    <a href="#">Team PUSH-KJSCE</a>
    <a href="#">SAHAS</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Mega Projects</button>
  <div class="dropdown-content">
    <a href="#">Team TMRT</a>
    <a href="#">Team Onyx</a>
    <a href="#">Team ETA</a>
    <a href="#">Team Red Shift Racing</a>
    <a href="#">Team Orion</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Fests</button>
  <div class="dropdown-content">
    <a href="#">Symphony</a>
    <a href="#">Abhiyantriki</a>
    <a href="#">Skream</a>
    <a href="#">Naari</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Schedule</button>
  <div class="dropdown-content">
    <a href="Schedule.php">Schedule an event of committee</a>
    <a href="#">Schedule events for a class</a>
    <a href="#">View scheduled events</a>
  </div>
</div>

</div>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRwVWuzcvJEBh2nTLmASixLbV4BNmCzZQEmJy3aTPNKQ&s" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRusxhbTueQu9IEMCxnkbEzvzvb-ZK3LE0sR7NlhsVoJA&s">
<img src="https://kjsce.somaiya.edu/upload_file/images20/661d071df02f9.png" width="220px" height="255px">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_HOGBPlt0k-dEL1wfM5VN4HXuY5_LI1v7Dp8EnFmI-g&s"width="220px" height="255px">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfdqfzXHhgEEDTv9MsmXBKERWUWtsYsUwDvLtVO-jU0Plwg8JL3FF7P6x0ylnJQR0Kk9E&usqp=CAU" width="220px" height="255px"> 
<img src="https://kjsce.somaiya.edu/upload_file/images20/6597c915e1f31.png" width="220px" height="255px">


<div class="page">
<h1>Welcome to The KJSCE Events&#39; Page!</h1>
<h3>Your event planner!</h3>


<h4><ul>Upcoming/Ongoing Events</ul></h4>

    <li>Skream : 24.02.2023 - 01.03.2023</li>
    <li>Symphony : Dates to be declared soon!</li>
    <li>Naari : Celebrating essence of Womanhood</li>
</div>



</div>
</body>
</html>
