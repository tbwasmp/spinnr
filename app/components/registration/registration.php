<form id="signup-form" name="signup" ng-submit="processForm(signup.$valid)" novalidate>
  <!-- our nested state views will be injected here -->
  <div id="form-views" ui-view></div>
</form>

<!-- uncomment this portion to view real-time data input.
<pre style="margin-top: 2em;">{{ formData }}</pre>
<pre>
  <h3>Form Validation Test</h3>
  signup.$valid = {{ signup.$valid }} <br>
  signup.name.$valid = {{ signup.name.$valid }} <br>
  signup.bdate.$valid = {{ signup.bdate.$valid }} <br>
  signup.mobile.$valid = {{ signup.mobile.$valid }} <br>
  signup.email.$valid = {{ signup.email.$valid }} <br>
  signup.address.$valid = {{ signup.address.$valid }} <br>
  signup.cities.$valid = {{ signup.cities.$valid }} <br>
  signup.terms.$valid = {{ signup.terms.$valid }} <br>
  $submitted = {{ $submitted }}
</pre>
-->