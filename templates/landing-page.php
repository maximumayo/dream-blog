<div class="jumbotron text-center">

    <h1>Fluffy Chainsaw Blog</h1>

    <form name="logForm">

        <input type="text" placeholder="User Name" ng-model="logName" required>

        <input type="password" placeholder="password" ng-model="logPassword" required>

        <span>
            <input ng-hide="logForm.$valid" type="submit" class="btn btn-danger" value="Log In">
            <input ng-show="logForm.$valid" type="submit" ui-sref="newsfeed" class="btn btn-success" value="Log In">
        </span>

        <a ui-sref="registration" class="btn btn-primary" type="submit">Sign Up</a>

    </form>

</div>