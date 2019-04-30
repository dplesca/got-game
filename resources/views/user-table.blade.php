<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $u)
    <tr>
      <td><h4>{{ $u->name }}</h4></td>
      <td>{{ $u->points }}</td>
    </tr>
    @endforeach
  </tbody>
</table>