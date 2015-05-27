<div class="tag">
  <div class="wrapper">
  	<h1 class="one">Register</h1>
    <div class="form-group">
      <input class="form-control" ng-class="{'has-error': $submitted && signup.name.$invalid}" type="text" name="name" ng-model="formData.name" required minlength="2" placeholder="Full Name">
    </div>

    <div class="form-group form-inline">
      <input type="text" id="bdate" class="form-control" name="bdate" ng-class="{'has-error': $submitted && signup.bdate.$invalid}" ng-model="formData.bdate" required jqdatepicker placeholder="Enter your Birthday">
      <input type="number" name="mobile" ng-class="{'has-error': $submitted && signup.mobile.$invalid}" ng-model="formData.mobile" required class="form-control" minlength="11" placeholder="Spinnr Mobile Number">
    </div>

    <div class="form-group">
      <input type="email" class="form-control" name="email" ng-class="{'has-error': $submitted && signup.email.$invalid}" ng-model="formData.email" ng-pattern="/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/" placeholder="E-mail Address" required>
    </div>
    <div class="form-group">
  	  <input type="text" name="address" ng-class="{'has-error': $submitted && signup.address.$invalid}" ng-model="formData.address" required placeholder="Home Address" class="form-control">
    </div>
    <div class="form-group">
      <span class="nullable">
        <select class="form-control" name="cities" ng-class="{'has-error': $submitted && signup.cities.$invalid}" ng-model="formData.cities" required ng-options="city.type for city in cities | orderBy:'type'">
          <option value="">City</option>
        </select>
      </span>
    </div>
    <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="terms" ng-model="formData.agree" required> I agree to the <a href="#terms-conditions" data-toggle="tab">Terms & Conditions</a> of the Spinnr 100 Giftaway Promos.
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="newsletter" ng-model="formData.receive"> I want to receive news and promo newsletters.
        </label>
      </div>
    </div>
  </div>
</div>

<div class="form-group row">
  <div class="col-xs-2 col-xs-offset-1">
    <a ng-click="processForm(signup.$valid)" class="next btn">Next Section</a>
  </div>
  <div class="col-xs-6">
    <div class="validate" ng-show="$submitted && signup.$invalid">
      <h5><span class="glyphicon glyphicon-warning-sign"></span> Something's not right.</h5>
      <ul>
        <li ng-show="signup.name.$error.required"><p>Please enter your <span>Full Name</span>.</p></li>
        <li ng-show="signup.name.$error.minlength"><p>Your name is too short.</p></li>
        <li ng-show="signup.bdate.$error.required"><p>What's your <span>Birthday</span>?</p></li>
        <li ng-show="signup.bdate.$invalid"><p>Please enter a valid birth date.</p></li>
        <li ng-show="signup.mobile.$error.required"><p>Please enter your <span>Spinnr Mobile No.</span></p></li>
        <li ng-show="signup.email.$error.required"><p>Please enter your <span>Email</span></p></li>
        <li ng-show="signup.address.$error.required"><p>Please tell us where you live: <span>Home Address</span>.</p></li>
        <li ng-show="signup.cities.$error.required"><p>Please indicate the <span>city</span> you are in.</p></li>    
        <li ng-show="signup.mobile.$error.number || signup.mobile.$error.minlength"><p>Please enter a valid Spinnr Mobile No.</p></li>
        <li ng-show="signup.email.$error.email"><p>Please enter a valid email.</p></li>
        <li ng-show="signup.terms.$error.required"><p>You must agree to our terms and conditions.</p></li>
      </ul>
      <div class="arrow-left"></div>
    </div>
  </div>
</div>