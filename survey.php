<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Sruvey";
require_once "includes/header.php";
require_once "includes/nav.php";
?>

<!DOCTYPE html>
<html>
<head></head>
<body>

<!-- <div clasas="container"> -->

<form action="" method="post" onsubmit="return verify()">
    <h3><b>Welcome to the Survey Page</b></h3>
    <h4>Feel free to take the survey down below!</h4>

  <fieldset id="q1" class="border p-2">
    <legend class="w-auto">Question 1</legend>
    <p>How often do you watch Netflix </p>
      <label for="no">Not often</label>
      <input type="radio" name="netflix" id="no" value="no"/>
      <label for="often">Often</label>
      <input type="radio" name="netflix" id="often" value="often"/>
	    <label for="ex-often">Extremly Often</label>
	    <input type="radio" name="netflix" id="exoften" value="exoften"/>
  </fieldset><br />

  <fieldset id="q2" class="border p-2">
    <legend class="w-auto">Question 2</legend>
    <p>Out of all the movies you have ever seen, what are your most favorites?</p>
    <textarea cols="50" rows="4" name="favorite" id="favorite" maxlength="100"></textarea>
  </fieldset><br />

  <fieldset id="q3" class="border p-2">
    <legend class="w-auto">Question 3</legend>
    <p>Who is your most favorite movie celebrity living today</p>
	  <input type="text" id="celebrity" name="celebrity" id="celebrity" size="45" maxlength="25">
  </fieldset><br />

  <fieldset id="q4" class="border p-2">
    <legend class="w-auto">Question 4</legend>
    <p>What makes you see a movie</p>
	  <textarea cols="50" rows="4" name="see" id="see" maxlength="100"></textarea>
  </fieldset><br />

  <fieldset id="q5" class="border p-2">
    <legend class="w-auto">Question 5</legend>
    <p>Do you think re-makes of old films are a good idea?</p>
      <label for="yes">Yes</label>
      <input type="radio" name="yes" id="yes" value="yes"/>
      <label for="no">No</label>
      <input type="radio" name="no" id="no" value="no"/>
	    <label for="depend">It depends</label>
	    <input type="radio" name="depend" id="depend" value="depend"/>
  </fieldset><br />

  <input class="button1" type="submit" value="Submit">
</form>

<!-- </div> -->


<script>
 
    var favorite = document.getElementById("favorite");
    var celebrity = document.getElementById("celebrity");
    var see = document.getElementById("see");
    var valid = true;

    function verify() {
    if (favorite.value == "") {
        favorite.className="form-error";
        valid = false;
    }

    if (celebrity.value == "") {
          celebrity.className="form-error";
          valid = false;
    }

    if (see.value == "") {
          see.className="form-error";
          valid = false;
    }

    return valid;
    }

</script>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php require_once 'includes/footer.php'?>