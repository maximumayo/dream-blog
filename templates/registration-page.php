<div class="jumbotron text-center">
    <!--    ng-controller="signupController as sc"-->

    <h1>Create An Account</h1>

    <form name="create">

        <input type="text" placeholder="User Name" ng-model="accountInfo.userName" pattern="[a-zA-Z0-9]{3,12}" required>
        <br>

        <input type="text" placeholder="First Name" ng-model="accountInfo.firstName" pattern="[a-zA-Z]{1,20}" required>
        <br>

        <input type="text" placeholder="Last Name" ng-model="accountInfo.lastName" pattern="[a-zA-Z]{1,20}" required>
        <br>

        <input type="password" placeholder="Password" ng-model="accountInfo.password"
               pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*^[a-zA-Z]([a-zA-Z0-9]){11,31}\b" required>
        <br>

        <input type="password" placeholder="Confirm Password" ng-model="accountInfo.passwordConfirm" required>
        <br>

        <input type="email" placeholder="Email" ng-model="accountInfo.email"
               pattern="^[a-zA-Z0-9]+.?[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+|[a-zA-Z0-9]@[a-zA-Z0-9]\.[a-zA-Z0-9]"
               required> <br>

        <input type="text" placeholder="Phone Number" ng-model="accountInfo.phoneNumber"
               pattern="1?\(?[0-9]{3}\)?-? *[0-9]{3}-? *[0-9]{4}\b" required> <br>

        <input type="submit" ng-click="createAccount() ui-sref=" landing" class="btn btn-success" value="Create
        Account">


    </form>


</div>




