<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Character</th>
      <th scope="col">Your Pick</th>
      <th scope="col">Current status</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
    @foreach($picks as $pick)
    <tr>
      <td><h4>{{ $pick->character->name }}</h4></td>
      <td><h4><span class="badge badge-{{ $pick->pick === 'alive' ? 'success' : 'danger' }}">{{ $pick->pick }}</span></h4></td>
      <td><h4><span class="badge badge-{{ $pick->character->status === 'alive' ? 'success' : 'danger' }}">{{ $pick->character->status }}</span></h4></td>
      <td>{{ $pick->pick === $pick->character->status ? '1':'0' }}</td>
    </tr>
    @endforeach
  </tbody>
</table>