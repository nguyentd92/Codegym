<form method="post" action="/login">
@csrf
    <input type="text" name='username'/>
    <input type='password' name='password' />
    <input type='submit' value='Log in' />
</form>