<x-layouts.app>
   <div class="row">
        <div class="col-md-12">
            <h2>DATA EVENT</h2>
        </div>
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <a href="{{ url('admin/event/tambah') }}" class="btn btn-success float-end d-flex align-items-center">
                        <i class="material-icons">add</i>
                        <span>Tambah event</span>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><center>No.</center></th>
                                <th><center>Thumbnail</center></th>
                                <th><center>Judul</center></th>
                                <th><center>Waktu</center></th>
                                <th><center>Deskripsi</center></th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td>
                                    <center>
                                        <img src="{{ url('public') }}/{{ $item->thumbnail }}" alt="" style="width: 45px;heigt:45px;">
                                    </center>
                                </td>
                                <td><center>{{ $item->nama_event }}</center></td>
                                <td><center>{{ $item->waktu_event }}</center></td>
                                <td><center>{{ Str::limit($item->deskripsi_event, 30) }}</center></td>
                                <td>
                                    <center>
                                        <a href="{{ url('admin/event/detail', $item->id) }}" class="btn btn-warning">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        <a href="{{ url('admin/event/edit', $item->id) }}" class="btn btn-primary">
                                            <i class="material-icons">update</i>
                                        </a>
                                        <a href="{{ url('admin/event/hapus', $item->id) }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   </div>
</x-layouts.app>