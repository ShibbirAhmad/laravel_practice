
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>CRUD system</title>
         
         <link rel="stylesheet" href="{{asset('public/site/css/bootstrap.min.css')}}" />
         <link rel="stylesheet" href="{{asset('public/site/css/fontawesome.min.css')}}" />
         <script>
          function validateForm() {
              var a = document.forms["myForm"]["name"].value;
              var b = document.forms["myForm"]["roll"].value;
              var c = document.forms["myForm"]["registration"].value;
              var d = document.forms["myForm"]["gender"].value;
              if (a == "") {
                   
                  alert("Name field must be filled out");
     
                  }elseif(b=="") {
     
                     alert("Roll field must be filled out");
     
                     }elseif(c=="") {
         
                     alert("Registration field must be filled out");
     
                     }elseif(d==""){
     
                         alert("select your gender!");
                        
                     }else{
     
                    
                     }  
              }
          }
          </script>
     </head>
     <body class="btn-success">
     
        
          @if(Session::has('success'))
          <p>{{Session::get('success')}} </p>
     @endif
     
     
       @if(Session::has('warning'))
          <p>{{Session::get('warning')}} </p>
         
          @endif
         
             <div class="container btn-primary mt-5 ">
             
                  
             <!--displaying for codes error results -->
     
                 @if(count($errors) > 0)
                            
                 <ul>
                 
                       @foreach($errors->all() as $error)
                       <li> {{ $error }} </li>
                         
                       @endforeach
                 </ul>
     
                 @endif
     
              
     
                 <!-- Default form subscription -->
     <form  name="myForm" onsubmit="return validateForm() " class="text-center border border-light p-5" action="{{route('site.store')}}" method="POST">
         
           @csrf
          <p class="h4 mb-4">Subscribe</p>
      
          <p>Join our member list..</p>
     
         
          <!-- Name -->
          <input type="text" name="name" id="defaultSubscriptionFormText" class="form-control mb-4" placeholder="Name">
          
          <!-- Roll -->
          <input type="number" name="roll" id="defaultSubscriptionFormNumber" class="form-control mb-4" placeholder="Roll No ">
      
     
          <!-- Registration -->
          <input type="Number" name="registration" id="defaultSubscriptionFormNumber" class="form-control mb-4" placeholder="Registraitn NO">
          
          <!-- Gender -->
        
          <select name="gender" id="" class="form-control mb-4">
              <option value="">select</option>
               <option value="male">male</option>
               <option value="female">female</option>
          </select>
     
          <!-- Sign in button -->
          <button class="btn btn-info btn-block" type="submit" value="register">register</button>
     
     </form>
     
        
         </div>
     
              <script src="{{asset('public/site/js/bootstrap.min.js')}}"></script>
              <script src="{{asset('public/site/js/fontawesome.min.js')}}"></script>
              <script src="{{asset('public/site/js/myscript.js')}}"></script>
     
     </body>
     </html>
     
     
     