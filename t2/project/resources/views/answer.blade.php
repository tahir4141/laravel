<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="home.css"> --}}
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      * {
      box-sizing: border-box;
      }
      
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }
      
      label {
        padding: 12px 12px 12px 0;
        display: inline-block;
      }
      
      input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }
      
      input[type=submit]:hover {
        background-color: #047da1;
      }
      
      .container {
        border-radius: 90px;
        background-color: #fdfcfc;
        padding: 50px;
      }
      
      .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
      }
      
      .col-75 {
        float: left;
        width: 100%;
        margin-top: 6px;
        height: 200%;
      }
      
      
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      
      @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
          width: 100%;
          margin-top: 0;
        }
      }
      </style>
    <title>Home</title>
</head>
<body>



    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

          <div class="navbar-header">
            <a class="navbar-brand" href="#">vragen</a>
          </div>

          <ul class="nav navbar-nav">

            <li class="active">
              <a href="#">Home</a>
             </li>

            <li>
              <a href="answers">Answer </a>
            </li>



            <form class="navbar-form navbar-left" action="">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>

            <li>
              <a href="#" class="" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add Question</a>
            </li>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"     aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                     </button>
               </div>
           <div class="modal-body">
            <form action="{{url('/')}}/data" method="post">
              @csrf     
               <div class="form-group">
                   <div class="form-group">

                           <div class="col-form-label">
                              <label for="message-text">Category</label>
                          </div>

                            <div class="col-75">                  
                              <select id="require" name="category"> 
                              <option value="">select your Category</option>
                               @foreach ($data1 as $data )
                              <option  name=" ">{{$data['category_name']}}</option>
                               @endforeach
                              
                              </select>
                            </div>
                            
                             @error('category')
                             <span class="text-danger">
                             {{$message}}
                            </span>
                             @enderror
                            
                   </div>
                  
           
                    <div class="form-group">
                          <label for="message-text" class="col-form-label">Add Question:</label>
                          <textarea class="form-control"  name="des" placeholder="Start your Question with ' What ',' How ',' Why ' ect." id="message-text"></textarea>
                          @error('des')
                          <span class="text-danger">             
                            {{$message}}               
                          </span>
                           @enderror
                    </div>
         

                   <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Submit Question</button>
                       </div>
                     </form>
                   </div>
     
               </div>
       </div>
    </div>
        </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
 </div>
</nav>

@if(session('status'))
<div class="alert alert-success" role="alert">
  {{session('status')}}
</div>
@endif




<div class="container">
<table>  
    @foreach ($results as $d1 )
    <thead>
<tr>
    
    


</tr>
</thead>
<tbody>
<td>
    <div class="container">
    {{$d1->name;}}
    </div>
    <div>
        {{$d1->questions}}
    <a href="" style="float: right;"> Reply </a>
    </div>
</td>
</tbody>
@endforeach
</table>


</div>


</body>
</html>



