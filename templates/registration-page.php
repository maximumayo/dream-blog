<div class="jumbotron text-center">
<!--    ng-controller="signupController as sc"-->

    <h1>Create An Account</h1>
    <input type="text" placeholder="UserName" ng-model="accountInfo.userName"> <br>
    <input type="text" placeholder="First Name" ng-model="accountInfo.firstName"> <br>
    <input type="text" placeholder="Last Name" ng-model="accountInfo.lastName"> <br>
    <input type="password" placeholder="Password" ng-model="accountInfo.password"> <br>
    <input type="password" placeholder="Confirm Password" ng-model="accountInfo.passwordConfirm"> <br>
    <input type="email" placeholder="Email" ng-model="accountInfo.email"> <br>
    <input type="number" placeholder="Phone Number" ng-model="accountInfo.phoneNumber"> <br>

    <a ng-click="createAccount()" ui-sref="landing" type="submit" class="btn btn-success">Create Account</a>



</div>
