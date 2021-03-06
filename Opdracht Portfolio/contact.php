<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Portfolio.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<title>Portfolio Matthias Erkelens</title>

</head>
<body>
  <div class="background">
  <div>
  <img class="logo" src="naam.png" alt="logo">
  <nav>
      <ul>
        <li><a href='Portfolio.html'>HOME</a></li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">OVER MIJZELF &#x2BC6;</a>
              <div class="dropdown-content">
              <a href="Over_mij.html">OVER MIJZELF</a>
              <a href="Opleiding.html">OPLEIDING</a>
            </div>
        </li>

        <li><a href="Photo_Gallery.html">PHOTO GALLERY</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
  </nav>
  </div> 
</head>

<body>
<div class="container_slide">
<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="banner.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="banner1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="banner2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
  </div>
</div>
</div>
<div class="blackbar">
    <div class="space"><h1 class="intro_tekst">Over mijzelf</h1>
    </div>
</div>

<ul class="breadcrumb">
  <li><a href="portfolio.html">Home</a></li>
  <li><a href="Over_mij.html">Over mijzelf</a></li>
</ul>

<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

  <footer><p> &copy; Matthias Erkelens , 2019</p></footer>
</div>
</body>
</html>

