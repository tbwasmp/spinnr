<div class="tag">
  <div class="wrapper">
  	<h1 class="two">Choose your favorite artist
      <span class="sub">Get a chance to win a special gift from the artist of your choice</span>
  	</h1>
  	<slick id="artists" dots=true>
  	  <div>
  	    <div class="radio">
  	      <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist1" value="Jessie J" ng-required="!formData.artist">
            <img src="assets/img/artists/jessiej.png" alt="">
            <span>Jessie J</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist2" value="Katy Perry" ng-required="!formData.artist">
            <img src="assets/img/artists/katyperry.png" alt="">
            <span>Katy Perry</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist3" value="5 Seconds of Summer" ng-required="!formData.artist">
            <img src="assets/img/artists/five-seconds.png" alt="">
            <span>5 Seconds of Summer</span>
          </label>
          <br />
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist4" value="Usher" ng-required="!formData.artist">
            <img src="assets/img/artists/usher.png" alt="">
            <span>Usher</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist5" value="Nicki Minaj" ng-required="!formData.artist">
            <img src="assets/img/artists/nickiminaj.png" alt="">
            <span>Nicki Minaj</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist6" value="Lana Del Rey" ng-required="!formData.artist">
            <img src="assets/img/artists/lanadelrey.png" alt="">
            <span>Lana Del Rey</span>
          </label>
  	    </div>
  	  </div>

      <div>
        <div class="radio">
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist7" value="The Beatles" ng-required="!formData.artist">
            <img src="assets/img/artists/beatles.png" alt="">
            <span>The Beatles</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist8" value="Red Hot Chili Peppers" ng-required="!formData.artist">
            <img src="assets/img/artists/chilipeppers.png" alt="">
            <span>Red Hot Chili Peppers</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist9" value="The Far East Movement" ng-required="!formData.artist">
            <img src="assets/img/artists/fareastmovement.png" alt="">
            <span>The Far East Movement</span>
          </label>
          <br />
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist11" value="Justin Bieber" ng-required="!formData.artist">
            <img src="assets/img/artists/justinbieber.png" alt="">
            <span>Justin Bieber</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist10" value="The Killers" ng-required="!formData.artist">
            <img src="assets/img/artists/killers.png" alt="">
            <span>The Killers</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist12" value="Lady Gaga" ng-required="!formData.artist">
            <img src="assets/img/artists/ladygaga.png" alt="">
            <span>Lady Gaga</span>
          </label>
        </div>
      </div>

      <div>
        <div class="radio">
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist13" value="Alicia Keys" ng-required="!formData.artist">
            <img src="assets/img/artists/aliciakeys.png" alt="">
            <span>Alicia Keys</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist14" value="Kanye West" ng-required="!formData.artist">
            <img src="assets/img/artists/kanye.png" alt="">
            <span>Kanye West</span>
          </label>
          <label class="radio-inline">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist14" value="Kanye West" ng-required="!formData.artist">
            <img src="assets/img/artists/pink.png" alt="">
            <span>Pink</span>
          </label>
          <label class="radio-inline surprise">
            <input type="radio" name="artistOptions" ng-model="formData.artist" id="artist16" value="Surprise Prize" ng-required="!formData.artist">
          </label>
        </div>
      </div>
  	</slick><!-- artists carousel -->
  </div>
</div>

<div class="form-group row">
  <div class="col-xs-3 col-xs-offset-1">
    <!--<a ui-sref="registration.spinnrapp" class="back btn">Return</a>-->
    <button type="submit" class="submit btn">Submit</button>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('.radio-inline').click(function(){
      $('.radio-inline').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>