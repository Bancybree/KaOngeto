<?php
	session_start();
    	
	require_once "includes/session_control.php";
	require_once "includes/db_connect.php";

	include "templates/header.php";
	include "templates/nav.php";
?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">About Us!</h1>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
            <h2>Our Mission</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>

            <h2>Our Vision</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>

            <h2>Our Values</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2>History</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Our Services</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Our Portfolio</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr />
        <div class="row">
            <div class="col-md-3">
              <div class="card mb-3 shadow-sm">
                <img class="card-img-top" src="images/people/founder.png" alt="Card image cap" />
                <div class="card-body">
                  <p class="card-text">FOUNDER</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 shadow-sm">
                <img class="card-img-top" src="images/people/cfo.png" alt="Card image cap" />
                <div class="card-body">
                  <p class="card-text">CFO</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 shadow-sm">
                <img class="card-img-top" src="images/people/ceo.png" alt="Card image cap" />
                <div class="card-body">
                  <p class="card-text">CEO</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 shadow-sm">
                <img class="card-img-top" src="images/people/secretary.png" alt="Card image cap" />
                <div class="card-body">
                  <p class="card-text">SECRETARY</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>
        <hr />

      </div> <!-- /container -->
<?php
	include "templates/footer.php";
?>