<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome to the site {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} and your password is {{$user['password']}} . Use this password
 to login and please change the pasword after first login.
</body>
 
</html>