
 
  
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
     
                <h2> 
                     ID: {{$data->id}} <br/>  
                     Name: {{$data->name}} <br/>
                     Roll: {{$data->role}} <br/>
                     Registration: {{$data->registration}} <br/> 
                     Gender: {{$data->gender}} <br/>
                </h2> 
         </div>
     
     
              <script src="{{asset('public/site/js/bootstrap.min.js')}}"></script>
              <script src="{{asset('public/site/js/fontawesome.min.js')}}"></script>
              <script src="{{asset('public/site/js/myscript.js')}}"></script>
     
     </body>
     </html>
     
