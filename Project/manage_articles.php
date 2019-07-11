<?php
	session_start();
    require_once "includes/db_connect.php";

	include "templates/header.php";
	include "templates/authnav.php";

?>
    <div>
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Blog Articles</h1>
        </div>
      </div>

      <div class="container">
        <div class="row">
<?php
if (isset($_GET["Article_id"])){
	$articleId = $_GET["Article_id"];
	
    $select_art = "SELECT * FROM articles LEFT JOIN users ON (users.`UserId` = articles.Author_id) WHERE Article_id = ".$_SESSION["control"]["UserId"]."";
	
	$art_res = $DbConn->query($select_art);
	
	// Counts 1 and Displays Articles 
    if ($art_res->num_rows > 0){ 
        
        $art_row = $art_res->fetch_assoc();
?>
        <div class="row">
          <div class="col-md-8">
            <h2><?php print $art_row["Article_title"]; ?></h2>
           
           <h6>Published on: <?php print date("jS F Y", $art_row["Article_created_date"]); ?> by <?php print $art_row["Full_Name"]; ?></h6>

		     <p><?php print $art_row["Article_full_text"]; ?></p>
		   
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>
<?php
}else{
        header("Location: ./");
		exit();
}
}else{
    $select_art = "SELECT * FROM articles LEFT JOIN users ON (users.UserId = articles.Author_id)";
    
    $art_res = $DbConn->query($select_art);
	
    if ($art_res->num_rows > 0){ 
        while($art_row = $art_res->fetch_assoc()){
?>
                  <div class="col-md-4">
            <h2><?php print $art_row["article_title"]; ?></h2>
           
           <h6>Published on: <?php print date("jS F Y", $art_row["article_publication_date"]); ?> by <?php print $art_row["fullName"]; ?></h6>
            
   <?php 
			$max_words = 20; //initializing the number of words (20) to be printed as a brief story before the viewer reads more
			$art_fullText = addslashes($art_row["article_full_text"]); //adding slashes in case of php encounters quotation marks
			
			$shown_string = implode(' ', array_slice(str_word_count(addslashes($art_fullText), 2), 0, $max_words)) . ' ... ' ; //converting the full text into an array storing all words, then slicing the array at the maximum number of words determined by $max_words
			?>
            
			<p><?php print $shown_string; //Print the sliced array ?></p>
		
            <p><a class="btn btn-secondary" href="view_art.php?Article_id=<?php print $art_row["Article_id"]; ?>" role="button">Read more</a></p>
			
			<?php print "
<tr>
	<td>
		<form method='POST' action='DelUser.php'>
			<button type='submit' name='delete' value='$row[UserId]'>Delete</button>		
		</form>		
	</td>	
		
	<td>
		<form method='POST' action='UpdateUser.php'>
			<button type='submit' name='updateuser' value='$row[UserId]'>Update</button>		
		</form>	
	</td>
</tr>";
?>
        
		
		
		</div>
        <?php
        }         
    }else{
        echo 'No data';
    }

}	
?>
        </div>
      </div>
	  <div/>
<?php
	include "templates/footer.php";
?>