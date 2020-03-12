
  
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>CRUD system</title>
         
         <link rel="stylesheet" href="{{asset('public/site/css/bootstrap.min.css')}}" />
         <link rel="stylesheet" href="{{asset('public/site/css/fontawesome.min.css')}}" />
     
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
     <form class="text-center border border-light p-5" action="{{route('site.update',$data->id)}}" method="POST">
         
           @csrf
           @method('PATCH')
          <p class="h4 mb-4">Subscribe</p>
      
          <p>Join our member list..</p>
     
         
          <!-- Name -->
          <input type="text" name="name" id="defaultSubscriptionFormText" class="form-control mb-4" value="{{$data->name}}">
          
          <!-- Roll -->
          <input type="text" name="roll" id="defaultSubscriptionFormNumber" class="form-control mb-4" value="{{$data->roll}}">
      
     
          <!-- Registration -->
          <input type="text" name="registration" id="defaultSubscriptionFormNumber" class="form-control mb-4" value="{{$data->registration}}">
          
          <!-- Gender -->
          <input type="text" name="gender" id="defaultSubscriptionFormText" class="form-control mb-4" value="{{$data->gender}}">
      
     
          <!-- Sign in button -->
          <button class="btn btn-info btn-block" type="submit" value="register">Update</button>
     
     </form>
     
        
         </div>
     
     
              <script src="{{asset('public/site/js/bootstrap.min.js')}}"></script>
              <script src="{{asset('public/site/js/fontawesome.min.js')}}"></script>
              <script src="{{asset('public/site/js/myscript.js')}}"></script>
     
     </body>
     </html>
     
