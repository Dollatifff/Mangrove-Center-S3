
<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>FORM UPDATE DATA EVENT</h2>
         </div>
         <div class="col-md-12 mt-3">
            <form action="{{ url('admin/event/update', $list->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input.input-default-update
                                    label="Judul Event" 
                                    field="nama_event"
                                    placeholder="Masukan judul event ..."
                                    type="text"
                                    id="JudulEvent"
                                    value="{{ $list->nama_event }}"
                                />
                                
                            </div>
                            <div class="col-md-4">
                                <x-input.input-default-update
                                    label="Waktu" 
                                    field="waktu_event"
                                    placeholder="Masukan waktu event ..."
                                    type="datetime-local"
                                    id="Waktu"
                                    value="{{ $list->waktu_event }}"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-default-update
                                    label="Thumbnail" 
                                    field="thumbnail"
                                    placeholder="Masukan waktu event ..."
                                    type="file"
                                    id="Thumbnail"
                                    value=""
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-readonly-update
                                    label="Lokasi" 
                                    field="lokasi"
                                    placeholder="Masukan lokasi event ..."
                                    type="text"
                                    modal="modal"
                                    modalTarget="#exampleModal"
                                    id="inputlokasi"
                                    value="{{ $list->lokasi }}"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-readonly-update
                                    label="Latitude" 
                                    field="lat"
                                    placeholder="Masukan latitude lokasi ..."
                                    type="text"
                                    id="inputlat"
                                    value="{{ $list->lat }}"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-readonly-update
                                    label="Longitude" 
                                    field="lng"
                                    placeholder="Masukan longitude lokasi ..."
                                    type="text"
                                    readonly
                                    id="inputlng"
                                    value="{{ $list->lng }}"
                                />
                            </div>
                            <div class="col-md-12">
                                <x-input.textarea-update
                                    label="Deskripsi" 
                                    field="deskripsi_event"
                                    placeholder="Masukan deskripsi event ..."
                                    type="textarea"
                                    id="Deskripsi"
                                    value="{{ $list->deskripsi_event }}"
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
	const map = L.map('map').setView([{{ $list->lat }}, {{ $list->lng }}], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    

    var marker = L.marker(new L.LatLng({{ $list->lat }}, {{ $list->lng }}), {
        draggable: true
    }).addTo(map);

    marker.on('dragend', function (e) {
        var getLat = marker.getLatLng().lat;
        var getLng = marker.getLatLng().lng;
        $('#inputlat').val(getLat)
        $('#inputlng').val(getLng)
        $('#exampleModal').modal('hide')

        var dataAddress = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${getLat}&lon=${getLng}`;
        $.get({ 
            url: dataAddress, 
            success(data) {
                $('#inputlokasi').val(data.display_name)
            },
            error(error) {
                console.log(error.message)
            }
        });
    });
    

   
</script>
 </x-layouts.app>

