<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Review-Request";
require_once "includes/header.php";
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    # Create a new connection to the database
    $db = new mysqli('localhost', 'root', '', 'phpfinal');
    # If there was an error connecting to the database
    if ($db->connect_error) {
        $error = $db->connect_error;
        echo $error;
    }
    # Set the character encoding of the database connection to UTF-8
    $db->set_charset('utf8');

    $movie_id = $_POST['id'];
    $title = $_POST['reviewtitletext'];
    $content = $_POST['reviewtext'];

     $sql = "INSERT INTO posts (movie_id,title,content)
                        VALUES('$movie_id','$title','$content')";

     $result = $db->query($sql);
}
else {
    $movie_id = $_GET['id'];
}
    
?>
<div class="container">
    <form action="review_request.php" method="post">
    <?php
    echo '<input type="hidden" id="movies" name="id" value="'.$movie_id.'">';
    ?>
    
	<fieldset id="reviewtitletext" class="border p-2">
    <legend class="w-auto">Review Title*</legend> 
        <input type="text" name="reviewtitletext" id="reviewtitletext"  size="25" maxlength="25" required>
	</fieldset><br />

	<fieldset id="reviewtext" class="border p-2">
    <legend class="w-auto">Review*</legend>
	  <textarea cols="50" rows="4" name="reviewtext" id="reviewtext"  maxlength="100" required></textarea>
 		</fieldset><br />

	<input class="button1" type="submit" value="Submit">
	</form>  

  <hr>

  <?php echo '<input type="hidden" id="movies" name="id" value="'.$movie_id.'">';?>
</div>


<?php require_once 'includes/footer.php'?>