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
    
        <div class="container btn-primary mt-5 ">

            @if(Session::has('success'))
                <p> {{Session::get('success')}} </p>
            @endif
           
            @if (Session::has('warning'))
                
                 <p> {{Session::get('warning')}} </p>
                
            @endif
            

            <button> <a href="{{route('site.create')}}" class="link"> Create New User</a> </button>
      
         <table class="table btn-dark ">
                         
                   <tr>
                         <td>Name</td>
                         <td>Roll</td>
                         <td>Registration</td>
                         <td>Gender</td>
                         <td>Action</td>
                         

                   </tr>

                   @foreach ($data as $row)
                       
                   <tr>
                       <td>{{$row->name}}</td>
                       <td>{{$row->roll}}</td>
                       <td>{{$row->registration}}</td>
                       <td>{{$row->gender}}</td>
                       <td>
                         <button class="btn  btn-inline "><a  href="{{route('site.show',$row->id)}}">Show</a></button> ||
                         <button class="btn  btn-inline "><a  href="{{route('site.edit',$row->id)}}">Edit</a></button> ||
                         
                         <div style="margin-top:-40px;margin-right:70px">
                            
                            <form style="float:right;" onsubmit="return confirm('Are you sure to Delete'); " action="{{route('site.destroy',$row->id)}}" method="POST" >
                                @csrf
                               @method('DELETE')
                  
              <button  class="btn  btn-inline "><a  href="">Delete</a></button>

                         </div>
                          
                        </form>
                         
                        
                        </td>
                   </tr>

                   @endforeach


         </table>

        </div>


         <script src="{{asset('public/site/js/bootstrap.min.js')}}"></script>
         <script src="{{asset('public/site/js/fontawesome.min.js')}}"></script>
         <script src="{{asset('public/site/js/myscript.js')}}"></script>

</body>
</html>