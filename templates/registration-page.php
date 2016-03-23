<style>
    .signup {
        position: absolute;
    }
</style>
<div class="jumbotron text-center">

    <h1>Create An Account</h1>

    <form name="myForm">
        <input type="text" placeholder="User Name" ng-model="accountInfo.userName" pattern="[a-zA-Z0-9]{4,12}" required>
        <span class="signup">4-12 characters(no special)</span>
        <br>

        <input type="text" placeholder="First Name" ng-model="accountInfo.firstName" pattern="[a-zA-Z]{1,20}" required>
        <span class="signup">1-20 characters</span>
        <br>

        <input type="text" placeholder="Last Name" ng-model="accountInfo.lastName" pattern="[a-zA-Z]{1,20}" required>
        <span class="signup">1-20 characters</span>
        <br>

        <input type="password" placeholder="Password" ng-model="accountInfo.password"
               pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*^[a-zA-Z]([a-zA-Z0-9]){11,31}\b" required>
        <span class="signup">12-32 characters(include lowercase, uppercase, and number)</span>
        <br>
{{if(accountInfo.password==accountInfo.passwordConfirm)}}
        <input type="password" placeholder="Confirm Password" ng-model="accountInfo.passwordConfirm" required>
        <span ng-show="if(accountInfo.password==accountInfo.passwordConfirm)" class="glyphicon glyphicon-ok"></span>
        <span ng-hide="if(accountInfo.password==accountInfo.passwordConfirm)" class="glyphicon glyphicon-remove"></span>
        <span class="signup">Match first password</span>
        <br>

        <input type="email" placeholder="Email" ng-model="accountInfo.email"
               pattern="^[a-zA-Z0-9]+.?[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+|[a-zA-Z0-9]@[a-zA-Z0-9]\.[a-zA-Z0-9]"
               required>
        <span class="signup">Hi</span>
        <br>

        <input type="text" placeholder="Phone Number" ng-model="accountInfo.phoneNumber"
               pattern="1?\(?[0-9]{3}\)?-? *[0-9]{3}-? *[0-9]{4}\b" required>
        <span class="signup">Hi</span>
        <br>
        <span>
            <input ng-hide="myForm.$valid" type="submit" class="btn btn-danger" value="Create Account">
            <input ng-show="myForm.$valid" type="submit" ng-click="createAccount()" ui-sref="landing"
                   class="btn btn-success" value="Create Account">
        </span>

    </form>


</div>



