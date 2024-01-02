<x-layouts.app>
    <div class="row">
        <div class="col-md-12 mb-5">
            <h2>DETAIL KATALOG</h2>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url('public') }}/{{ $list->foto }}" alt="" style="width:100%;">
                </div>
            </div>
           
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nama Pohon</th>
                            <td>:</td>
                            <td>{{ $list->nama_pohon }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>:</td>
                            <td>{{ $list->deskripsi }}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
