<div id="logo"><img src="images/dreamy.png"></div>
<div class="jumbotron text-center landingContainer">

    <h2>Don't let your dreams be memes</h2>

    <form name="logForm">

        <input class='form-control' type="text" placeholder="Username" ng-model="logInfo.logName" required>

        <input class='form-control' type="password" placeholder="Password" ng-model="logInfo.logPassword" required>

        <span>
            <input ng-hide="logForm.$valid" type="submit" class="btn btn-danger" value="Log In">
            <input ng-show="logForm.$valid" type="submit" ng-click="loginAttempt()"
                   class="btn btn-success" value="Log In">
        </span>

        <a ui-sref="registration" class="btn btn-primary" type="submit">Sign Up</a> <br> {{ invalidLogin }}
        <span style="color: red; font-weight: bold" ng-show="invalidLogin">invalid username/password combination</span>

    </form>

</div>
