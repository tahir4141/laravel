<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    {{-- navbar --}}
 <header>

<nav>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="navId" >

        <li class="nav-item" style="text-transform: uppercase">
            <a href="#tab5Id" class="nav-link">vragen</a>
        </li>
        
        <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{url('answer')}}" class="nav-link">Answer</a>
        </li>
        <li>
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </div></li>
          <li class="nav-item">
            <a href="{{url('profile/')}}" class="nav-link">Profile</a>
        </li>
        <li class="nav-item ">
            <a href="{{url('question')}}" class="nav-link">Add question</a>
        </li>
    </ul>
    </nav>
</header>

<h1> welcome to profile</h1>

    
</body>
</html>