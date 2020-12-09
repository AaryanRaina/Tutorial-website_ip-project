<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
  <style type="text/css">
    body{
      width: 70%;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
  <script type="text/javascript">
    function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
  </script>
  <style type="text/css">
    #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
    /* Remove default list styling */
    list-style-type: none;
    padding: 0;
    margin: 0;
}

#myUL li a {
    border: 1px solid #ddd; /* Add a border to all links */
    margin-top: -1px; /* Prevent double borders */
    background-color: #f6f6f6; /* Grey background color */
    padding: 12px; /* Add some padding */
    text-decoration: none; /* Remove default text underline */
    font-size: 18px; /* Increase the font-size */
    color: black; /* Add a black text color */
    display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a.header {
    background-color: #e2e2e2; /* Add a darker background color for headers */
    cursor: default; /* Change cursor style */
}

#myUL li a:hover:not(.header) {
    background-color: #eee; /* Add a hover effect to all links, except for headers */
}
  </style>
</head>
<body>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<ul id="myUL">
  <li><a href="#" class="header">Section I</a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="register.php">Register</a></li>

 
  <li><a href="#" class="header">Section II</a></li>
  <li><a href="course.php">Course</a></li>
  <li><a href="JobOppurtunities.php">Job Opportunities</a></li>

  <li><a href="#" class="header">Section III</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="Terms&condition.php">T & C</a></li>
  <li><a href="privacy policy.php">Privacy Policy</a></li>
  <li><a href="Gallery.php">Gallery</a></li>

</ul>
</body>
</html>