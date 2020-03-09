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
                         <button class="btn  btn-inline "><a  href="">Edit</a></button> ||
                         <button class="btn  btn-inline "><a  href="">Delete</a></button>
                        
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