<h1>Login</h1>
<div class="center">
    <form action="/account/login" method="POST">
        <label for="username">Username:</label>
        <input id="username" type="text" name="username"/>
        <br/>
        <label for="password">Password:</label>
        <input id="password" type="password" name="password"/>
        <br/>
        <input type="submit" value="Login"/>
        <a href="/account/register">Register here...</a>
    </form>
</div>