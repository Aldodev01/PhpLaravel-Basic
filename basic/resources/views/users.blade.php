<h1>User Login</h1>

<from action="users" method="POST">
  @csrf
  <input type="text" name="username" placeholder="enter user id"  /> <br/>
  <input type="password" name="userpassword" placeholder="enter user password"  /> <br/>
  <button type="submit">Login</button>
</from>