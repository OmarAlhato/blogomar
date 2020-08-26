@extends('master');

@section('content');



<table border="5px solid red">

<tr>
  <td>id</td>
  <td>name</td>
  <td>email</td>
  <td>password</td>
  <td>img</td>

  <td>delete</td>
  <td>update</td>

  </tr>
  @foreach($o as $oo)

  <tr>
<td>{{$oo-> id}}</td>

<td>{{$oo-> name}}</td>

<td>{{$oo-> email}}</td>

<td>{{$oo-> password}}</td>
<td><img src="imges/{{$oo -> img}}" width="50" hight="50"></td>

<td><a href="/delete/{{$oo -> id}}">delete</a></td>
<td><a href="ed/{{$oo-> id}}/edit">update</a></td>

</tr>
  @endforeach  
  </table>
<br><br>

<!-- Pager -->
<div class="row">
<div class="col-md-12 justify-content-center d-flex">
{{$o->links()}}
</div>
</div>

  <form action="insert" method="post" enctype="multipart/form-data">
{{csrf_field()}}   
<br><br>

 name<input type="text" name="name">
 <br><br>

 email<input type="text" name="email">
 <br><br>

 password<input type="text" name="password">
 <br><br>
<input type="file" name="img">
 <br><br>

    <input type="submit" name="submit">
    <br><br>
    @if(count($errors)>0)
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>

@endif

</form>
@endsection