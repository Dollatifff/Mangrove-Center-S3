
<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>FORM TAMBAH DATA EVENT</h2>
         </div>
         <div class="col-md-12">
            <form action="{{ url('admin/event/tambah') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input.input-default
                                    label="Judul Event" 
                                    field="nama_event"
                                    placeholder="Masukan judul event ..."
                                    type="text"
                                    id="JudulEvent"
                                />    
                            </div>
                            <div class="col-md-4">
                                <x-input.input-default
                                    label="Waktu" 
                                    field="waktu_event"
                                    placeholder="Masukan waktu event ..."
                                    type="datetime-local"
                                    id="Waktu"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-default
                                    label="Thumbnail" 
                                    field="thumbnail"
                                    placeholder="Masukan waktu event ..."
                                    type="file"
                                    id="Thumbnail"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-readonly
                                    label="Lokasi" 
                                    field="lokasi"
                                    placeholder="Masukan lokasi event ..."
                                    type="text"
                                    modal="modal"
                                    modalTarget="#exampleModal"
                                    id="inputlokasi"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-readonly
                                    label="Latitude" 
                                    field="lat"
                                    placeholder="Masukan latitude lokasi ..."
                                    type="text"
                                    id="inputlat"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-readonly
                                    label="Longitude" 
                                    field="lng"
                                    placeholder="Masukan longitude lokasi ..."
                                    type="text"
                                    readonly
                                    id="inputlng"
                                />
                            </div>
                            <div class="col-md-12">
                                <x-input.textarea
                                    label="Deskripsi" 
                                    field="deskripsi_event"
                                    placeholder="Masukan deskripsi event ..."
                                    type="textarea"
                                    id="Deskripsi"
                                />
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ url('admin/event') }}" class="btn btn-warning">BATAL</a>
                                    <button type="submit" class="btn btn-primary mx-2">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
         </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id='map' style="width: 100%;height:250px"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
	const map = L.map('map').setView([-1.8354209, 109.9736675], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    

    

    function onMapClick(e) {

        $('#inputlat').val(e.latlng.lat.toString().substring(0, 11))
        $('#inputlng').val(e.latlng.lng.toString().substring(0, 11))
        $('#exampleModal').modal('hide')

        var dataAddress = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${e.latlng.lat}&lon=${e.latlng.lng}`;
        $.get({ 
            url: dataAddress, 
            success(data) {
                console.log(data.display_name);
                $('#inputlokasi').val(data.display_name)
                const marker = L.marker([data.lat, data.lon]).addTo(map)
                .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();
            },
            error(error) {
                console.log(error.message)
            }
        });
    }

    map.on('click', onMapClick);
</script>
 </x-layouts.app>

