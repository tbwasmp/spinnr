<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spinnr App</title>
    <link rel="stylesheet" href="app/angular/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/start/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/json3/3.3.2/json3.js"></script>
      <script src="app/angular/node_modules/es5-shim/es5-sham.min.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
      <script>
        document.createElement('ng-include');
        document.createElement('ng-pluralize');
        document.createElement('ng-view');

        // Optionally these for CSS
        document.createElement('ng:include');
        document.createElement('ng:pluralize');
        document.createElement('ng:view');
      </script>
    <![endif]-->
  </head>
  <body>
    <div class="container spinnr">
      <div class="container-fluid">
      	<div class="navbar-header">
      	  <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt=""></a>
      	</div>
        <nav class="navbar navbar-default" role="navigation">
          <ul class="nav nav-tabs" role="tab-list">
            <li class="active home"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
            <li class="reg"><a href="#registration" role="tab" data-toggle="tab">Registration</a></li>
            <li class="mechanics"><a href="#mechanics" role="tab" data-toggle="tab">Mechanics</a></li>
            <li class="terms"><a href="#terms-conditions" role="tab" data-toggle="tab">Terms & Conditions</a></li>
          </ul>
        </nav>
      </div><!-- .container-fluid -->
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="home">
          <div class="box">
            <p class="intro">
              In the spirit of Christmas,<br>
              we are giving you a chance to win<br>
              special gifts from your favorite artists!
            </p>
            <dl class="dl-horizontal">
              <dd>Here's How:</dd>
              <dt class="spinnr">Spinnr</dt>
              <dd>Be a Spinnr subscriber</dd>
              <dt class="register">Register</dt>
              <dd>Register</dd>
              <dt class="artist">Artist</dt>
              <dd>Choose an artist</dd>
              <dt class="activity">Activity</dt>
              <dd>Share this activity</dd>
            </dl>
            <a href="#registration" data-toggle="tab" class="register btn">Register</a>
            <p class="dti"><small>Not a Spinnr subscriber yet? <a href="http://www.spinnr.ph/desktop/register.html" target="_blank">Click here</a></small><br>
            <small><strong>DTI - FTEB SPD Permit No. 5298 Series of 2014</strong></small></p>
          </div><!-- .box -->
          <div class="artists-bg"></div>
        </div><!-- #home -->
        <div ng-app="spinnrApp" class="tab-pane fade" id="registration">
          <div id="form-views" ui-view=""></div><!-- load contents via angular views -->
          <div class="artists-bg"></div>
        </div>
        <div class="tab-pane fade col-xs-offset-1" id="mechanics">
          <div class="box">
            <h1>Promo Mechanics</h1>
            <div class="scrollable">
            <ol>
              <li>
                <p>Be a Spinnr subscriber. Not a Spinnr subscriber yet? <a href="http://www.spinnr.ph/desktop/register.html">Click here</a></p>
              </li>
              <li>
                <p>Like the Spinnr Facebook Page</p>
              </li>
              <li>
                <p>Register details on the Facebook App</p>
                <ol type="a">
                  <li>
                    <p>Mobile Number used on Spinnr Account (User must have an existing Spinnr account and must subscribe to any Spinnr membership package to qualify)</p>
                  </li>
                  <li>
                    <p>Complete Name</p>
                  </li>
                  <li>
                    <p>Complete Address</p>
                  </li>
                  <li>
                    <p>E-mail Address</p>
                  </li>
                  <li>
                    <p>Birthday </p>
                  </li>
                </ol>
              </li>
            </ol>
            </div>
          </div><!-- .box -->
          <div class="form-group row">
            <div class="col-xs-3">
              <a href="#home" data-toggle="tab" class="back btn">Back</a>
            </div>
          </div>
          <div class="artists-bg"></div>
        </div><!-- #mechanics -->
        <div class="tab-pane fade col-xs-offset-1" id="terms-conditions">
          <div class="box">
            <h1>Terms & Conditions</h1>
            <div class="scrollable">
              <ol>
                <li>
                  <h2>What is the promo?</h2>
                  <p>Spinnr 100 Giftaways Promo is a Christmas-themed raffle promo wherein subscribers may win special artist merchandise from Bravado USA plus concert tickets.</p>
                </li>
                <li>
                  <h2>When is the promo period?</h2>
                  <p>The promo period is from November 13 to December 14​, 2014 (​31​ days).</p>
                </li>
                <li>
                  <h2>Who can qualify for the promo?</h2>
                  <ol type="a">
                    <li><p>All current and active Smart Prepaid, Postpaid, Bro, Talk N’ Text, and Sun subscribers.</p></li>
                    <li><p>A subscriber must first completely register to the promo to be eligible to win.</p></li>
                    <li><p>The promo is available nationwide.</p></li>
                  </ol>
                </li>
                <li>
                  <h2>How to register?</h2>
                  <ol type="a">
                    <li><p>To register, simply visit <a href="https://www.facebook.com/SpinnrPhilippines" target="_blank">Spinnr’s Facebook page</a> and like the page.</p></li>
                    <li><p>After liking the page, the 100 Giftaways Facebook App with <a href="https://www.facebook.com/SpinnrPhilippines/app_384482575037549">registration page</a> will then be visible to the subscriber.</p></li>
                    <li>
                      <p>Subscriber may now register his complete details to qualify:</p>
                      <ol type="i">
                        <li><p>Input Full Name</p></li>
                        <li><p>Input Birthday</p></li>
                        <li><p>Input Mobile Number (The number used for Spinnr account)</p></li>
                        <li><p>Input Email address</p></li>
                        <li><p>Input Home Address</p></li>
                        <li><p>Choose City from Drop Down</p></li>
                      </ol>
                    </li>
                    <li><p>Registration is free.  After the initial registration, there will be no need to register again.</p></li>
                    <li><p>A unique phone number can only have one registration for the promo.</p></li>
                    <li><p>There is no other registration except for the Facebook URL stated above.</p></li>
                  </ol>
                </li>
                <li>
                  <h2>How to join?</h2>
                  <p>After complete registration, subscriber is now qualified with one raffle entry. Then, he will be directed to a page with all the gifts and artist available. Subscriber must choose one artist and click on it. Subscriber can only choose once.</p>
                  <p>After clicking on the chosen artist, subscribers may perform the following activities to earn points:</p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Share the promo</th>
                        <th>Share the promo on Facebook</th>
                        <th>1 point</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Christmas Trivia Quiz</td>
                        <td>Answer 3 questions correctly and earn 1 point</td>
                        <td>1 point</td>
                      </tr>
                      <tr>
                        <td>Spinnr Jingle Mix</td>
                        <td>Create a Christmas Playlist for a friend</td>
                        <td>2 points</td>
                      </tr>
                      <tr>
                        <td>Spinnr Christmas Cards</td>
                        <td>Send a Facebook Christmas Card to a friend</td>
                        <td>3 points</td>
                      </tr>
                    </tbody>
                  </table>
                  <p>Each point is equivalent to one raffle entry.</p>
                </li>
                <li>
                  <h2>What are the prizes/When is the raffle?</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Period Covered</th>
                        <th>Cut-off for earning entries</th>
                        <th>Prizes</th>
                        <th>Draw Date</th>
                        <th>Winners</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>November 13 to December ​14​, 2014</td>
                        <td>December ​14​, 2014</td>
                        <td>Bravado Merchandise</td>
                        <td>December 15, 2014 (5:00 PM)</td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <td>November 13 to December ​14​, 2014</td>
                        <td>December ​14​, 2014</td>
                        <td>Surprise Prize – Concert Tickets</td>
                        <td>December 15, 2014 (5:00 PM)</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
                </li>
                <li>
                  <h2>How to win?</h2>
                  <p>The winners will be determined through an electronic raffle of the entries earned during the promo period covered.  Only those with valid transactions and those who were able to successfully register will be considered as valid winners and will be verified by Smart Communications and DTI.</p>
                </li>
                <li>
                  <h2>How will the winners be determined?</h2>
                  <ol type="a">
                    <li>
                      <p>All raffle draws will be held at the Smart Communications Inc. Office, 28th Floor, Smart Tower, Ayala Avenue 1226 Makati City.</p>
                    </li>
                    <li>
                      <p>The registered mobile numbers will be verified by Smart Communications for valid transactions.</p>
                    </li>
                    <li>
                      <p>A raffle winner can only win once throughout the entire duration of the promo.</p>
                    </li>
                    <li>
                      <p>Validating procedure:</p>
                      <ol type="i">
                        <li><p>Smart IPD to show the complete database of entries</p></li>
                        <li><p>Smart IPD to check the number of raffle points and assign raffle entries</p></li>
                        <li><p>Winners to be verified by DTI and Smart</p></li>
                      </ol>
                    </li>
                  </ol>
                </li>
                <li>
                  <h2>How will the Winner/s be notified?</h2>
                  <p>All winners will be notified by registered mail and a call from SMART special access number 7777.</p>
                </li>
                <li>
                  <h2>How can the winner claim his/her prize?</h2>
                  <ol type="a">
                    <li>
                      <p>Winners will have two options to claim their prizes. They can only choose one option:</p>
                      <ol type="i">
                        <li>
                          <p>Option 1: Prizes may be claimed at Smart Communications Inc. Office, 28th Floor, Smart Tower, Ayala Avenue 1226 Makati City 2:00-5:00PM Mondays to Fridays except Holidays, from December 4, 2014 onwards until 60 days from the receipt of the registered notice. The prize must be claimed within this period otherwise it will be forfeited with prior DTI approval.</p>
                        </li>
                        <li>
                          <p>Option 2: Prizes may be claimed at Spinnr Christmas Party on December 5, 2014, 8:00PM venue TBD.</p>
                        </li>
                      </ol>
                    </li>
                    <li><p>The winner will need to present his/her 2 valid Government IDs w/ signature, active cellphone with the winning SIM card, and registered notice.</p></li>
                    <li><p>Should the winner opt for a representative to claim the prize, the representative should bring an authorization letter from the winner, the winner’s 2 government IDs, and the representative’s valid ID with picture and signature.</p></li>
                    <li><p>The prizes are transferable but strictly not convertible to cash.</p></li>
                  </ol>
                </li>
                <li><p>All employees, directors and officers of Smart Communications, Inc., Huawei Philippines, TBWA Santiago Mangada Puno Agency, and their relatives or any person or entity involved in the event, as well as family members up to the second degree of consanguinity are not eligible or disqualified to join the promotion.</p></li>
                <li><p>12. All complaints and queries regarding this promotional activity may be attended by out toll-free 24/7 Hotline that may be reached by dialing *888 from any SMART Postpaid of Prepaid line.</p></li>
                <p><strong>DTI - FTEB SPD Permit No. 5298 Series of 2014</strong></p>
              </ol>
            </div>
          </div><!-- .box -->
          <div class="form-group row">
            <div class="col-xs-3">
              <a href="#home" data-toggle="tab"class="back btn">Back</a>
            </div>
          </div>
          <div class="artists-bg"></div>
        </div><!-- #terms-conditions -->
      </div>
    </div><!-- .container -->
    <script src="app/angular/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap/tab.js"></script>
    <script src="http://jamesallardice.github.io/Placeholders.js/assets/js/placeholders.min.js"></script>
    <script src="app/angular/angular/angular.min.js"></script>
    <script src="app/angular/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="https://code.angularjs.org/1.3.0/angular-animate.min.js"></script>
    <script src="https://code.angularjs.org/1.3.0/angular-resource.min.js"></script>
    <script src="app/angular/angular-messages/angular-messages.min.js"></script>
    <script src="app/angular/slick-carousel/slick/slick.min.js"></script>
    <script src="app/angular/angular-slick/dist/slick.min.js"></script>
    <script src="app/app.js"></script>
    <script>
      $(document).ready(function() {
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          var target = this.href.split('#');
          $('.nav a').filter('[href="#'+target[1]+'"]').tab('show');
        });
      });
    </script>
  </body>
</html>