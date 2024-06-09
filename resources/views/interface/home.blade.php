@extends('interface.template')
@section('nav')

<nav id="nav" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endsection
@section('view')
<div id="view" class="container-fluid bg-danger">
  dd
</div>
@endsection
@section('na1v')
    zLorem ipsum dolor sit, amet consectetur adipisicing elit. Natus vel saepe illum eum maxime cupiditate similique enim, corrupti corporis dicta, tenetur dignissimos suscipit? Iste totam aspernatur, corporis eveniet error blanditiis.
@endsection