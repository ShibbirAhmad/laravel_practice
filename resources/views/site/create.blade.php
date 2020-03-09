<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
    

    <form class="form-control " action="{{route()}}" method="post">

        @csrf
    
        <label for="name">Username</label>
        <input type="text" placeholder="username" /> <br/>
        
        <label for="email">Email</label>
        <input type="email" placeholder="email" /><br/>
 
        <label for="password">Password</label>
        <input type="password" placeholder="password" /><br/>
 
        
 
     
     
     
     </form>
 
 


</body>
</html>