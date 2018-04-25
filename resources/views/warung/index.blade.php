@extends('layouts.app')

@section('content')
<div align="center">
  <table class="table" style="width: 50%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
      @foreach($warungs as $i => $warung)
      <tr>
        <th scope="row">{{$i+1}}</th>
        <td>{{$warung->nama_barang}}</td>
        <td>Rp{{$warung->harga}}</td>
        <td>
          <form action="/warung/{{$warung->id}}/edit" method="GET" style="margin-bottom: 0">
            @csrf
            <input type="submit" class="btn btn-info" name="submit" value="Edit">
          </form>
          
          
            <!-- Button HTML (to Trigger Modal) -->
            <a href="#myModal" class="trigger-btn" data-toggle="modal">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
            </a>
          

          <!-- Modal HTML -->
          <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="icon-box">
                    <i class="material-icons">&#xE5CD;</i>
                  </div>        
                  <h4 class="modal-title">Are you sure?</h4>  
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                  <form action="/warung/{{$warung->id}}" method="POST" style="margin-bottom: 0">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                  </form>
                </div>
              </div>
            </div>
          </div>     
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/warung/create" class="btn btn-primary">Tambah Data</a>
</div>
  
@endsection

