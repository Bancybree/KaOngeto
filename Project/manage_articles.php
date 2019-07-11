<?php
	session_start();
    	
	require_once "includes/session_control.php";
	require_once "includes/db_connect.php";

	include "templates/header.php";
	include "templates/nav.php";
?>

    <main role="main">

      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Manage Articles</h1>
        </div>
      </div>
      <div class="container">
       
       
<div class="row">
          <div class="col-md-4">
            <h2>Compose New Article</h2>
<form method = "POST" action = "data_process/processes.php" autocomplete = "off" accept-charset="UTF-8">
    <div class="form-group">
		<label for="article_authorId">Author</label>
      
        <input placeholder="Enter your Author" class="form-control form-control-md" type="text" id="article_authorId" disabled value = "<?php print $_SESSION["control"]["FullName"]; ?>" />

		<input name="article_authorId" type="hidden" id="article_authorId" value = "<?php print $_SESSION["control"]["userId"]; ?>" />
	</div>
    <div class="form-group">
		<label for="article_title">Article Title</label>
		<input placeholder="Enter your Article Title" class="form-control form-control-md" name="article_title" type="text" id="article_title" required />
	</div>
    <div class="form-group">
		<label for="article_full_text">Article Full Text</label>
		<textarea placeholder="Enter the Article Full Text" class="form-control form-control-md" name="article_full_text" id="article_full_text" required style="height:170px" ></textarea>
	</div>

    <div class="form-group">
		<label for="article_publication_date">Publication Date</label>
		<input placeholder="Enter your Article Title" class="form-control form-control-md" name="article_publication_date" type="date" id="article_publication_date" />
	</div>
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="save_article"  value="Save Article">
	</div>
</form>
          </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-sq-lg btn-warning">
                  <i class="fa fa-user fa-5x"></i><br/>
                  View All Articles
                </a>
            </div>
            <div class="col-md-2">
            <a href="admin_manage.php" class="btn btn-sq-lg btn-success">
                  <i class="fa fa-user fa-5x"></i><br/>
                  Update My Articles
                </a>
            </div>

     
	</div>
	<hr>
      </div> 
<?php
	include "templates/footer.php";
?>