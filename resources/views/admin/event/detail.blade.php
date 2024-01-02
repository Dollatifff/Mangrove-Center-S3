<x-layouts.app>
    <div class="row">
        <div class="col-md-12 mb-5">
            <h2>DETAIL EVENT</h2>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id='map' style="width: 100%;height:250px"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url('public') }}/{{ $list->thumbnail }}" alt="" style="width:100%;">
                </div>
            </div>
           
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Judul</th>
                            <td>:</td>
                            <td>{{ $list->nama_event }}</td>
                        </tr>
                        <tr>
                            <th>Waktu</th>
                            <td>:</td>
                            <td>{{ $list->waktu_event }}</td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td>:</td>
                            <td>{{ $list->lokasi }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>:</td>
                            <td>{{ $list->deskripsi_event }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
	const map = L.map('map').setView([{{ $list->lat }}, {{ $list->lng }}], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    const mGreen = L.marker([{{ $list->lat }}, {{ $list->lng }}]).addTo(map);

    

    
</script>
</x-layouts.app>
