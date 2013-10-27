<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alpha 01</title>

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript" src="timeline-js/timeline.js"></script>
    <link rel="stylesheet" type="text/css" href="timeline-js/timeline.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-lg-8">
        
          <!-- blog entry -->
          <h1><a href="#">Create a Responsive Website Using HTML5 and CSS3</a></h1>
          <p class="lead">by <a href="index.html">John doe</a></p>
          <hr>
          <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
          <hr>

            <div>
              <iframe width="720" height="400" src="//www.youtube.com/embed/eOG90Q8EfRo" frameborder="0" allowfullscreen></iframe>
            </div>
            <div>
                <button class="btn">Show Timeline</button>
            </div>
            <div id="timeline-container">

            </div>
          <hr>
          <p></p>
          <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    
          <hr>

          <div id="share_toolbar">
              <!-- Place this tag after the last share tag. -->
              <script type="text/javascript">
                (function() {
                  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                  po.src = 'https://apis.google.com/js/plusone.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
              </script>
              <!-- google plus share -->

              <!-- twitter share -->
              <a href="https://twitter.com/share" class="twitter-share-button" data-via="BlaShadow">Tweet</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              <!-- twitter share -->

              <!-- facebook share  -->
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <!-- facebook share -->
          </div>
          
        </div>
        
        <div class="col-lg-4">
          <div class="well">
            <h4>Alpha 01 Search</h4>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /well -->
          <div class="well">
            <h4>Popular Categories</h4>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#dinosaurs">JAVA</a></li>
                    <li><a href="#spaceships">Cook</a>s</li>
                    <li><a href="#fried-foods">Math</a></li>
                    <li><a href="#wild-animals">Wild Animals</a></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#alien-abductions">Alien Abductions</a></li>
                    <li><a href="#business-casual">Business Casual</a></li>
                    <li><a href="#robots">Robots</a></li>
                    <li><a href="#fireworks">Fireworks</a></li>
                  </ul>
                </div>
              </div>
          </div><!-- /well -->
          <div class="well">
            <h4>Side Widget Well</h4>
            <p>asdasd</p>
          </div><!-- /well -->
        </div>
      </div>
      
      <hr>
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">

        google.load("visualization", "1");

        // Set callback to run when API is loaded
        //google.setOnLoadCallback(drawVisualization);
        $(document).ready(function(){
          drawVisualization();
        });

        var timeline;
        var data;

        function getSelectedRow() {
            var row = undefined;
            var sel = timeline.getSelection();
            if (sel.length) {
                if (sel[0].row != undefined) {
                    row = sel[0].row;
                }
            }
            return row;
        }

        var drawVisualization = function(){
          data = new google.visualization.DataTable();
          data.addColumn('datetime', 'start');
          data.addColumn('datetime', 'end');
          data.addColumn('string', 'content');

         
          var options = {
                width:  "100%",
                height: "100px",
                //height: "auto",
                editable: false,   // enable dragging and editing items
                //axisOnTop: true,
                style: "box",
                showCustomTime: true
          };

          timeline = new links.Timeline(document.getElementById('timeline-container'));

          console.log(timeline);
          console.log(document.getElementById('timeline-container'));

          timeline.draw(data, options);


        }

        function setTime() {
            if (!timeline) return;

            var newStartDate = new Date(document.getElementById('startDate').value);
            var newEndDate   = new Date(document.getElementById('endDate').value);
            timeline.setVisibleChartRange(newStartDate, newEndDate);
        }


    </script>
  </body>
</html>