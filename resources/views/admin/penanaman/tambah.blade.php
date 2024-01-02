<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>TAMBAH DATA PENANAMAN</h2>
         </div>
         <div class="col-md-12">
            <x-card.card>
                <x-card.body>
                    <form action="{{ url('admin/katalog/tambah') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <x-input.input 
                                type="text" label="Umur Tanaman Saat Ditanam" 
                                name="nama_pohon" 
                                placeholder="Masukan nama pohon ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input 
                                type="file" label="Foto / Gambar" 
                                name="foto" 
                                placeholder="Masukan foto pohon ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input 
                                type="text" label="lokasi" 
                                name="lokasi" 
                                placeholder="Masukan lokasi ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input-default
                                    label="Tanggal Penanaman" 
                                    field="taggal_penanaman"
                                    placeholder="Masukan tanggal penanaman ..."
                                    type="datetime-local"
                                    id="Waktu"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-input.input 
                                type="text" label="Jenis Mangrove" 
                                name="jenis_mangrove" 
                                placeholder="Masukan jenis mangrove ..." />
                            </div>
                            <div class="col-md-4">
                                <x-input.input 
                                type="text" label="Jenis tanah" 
                                name="jenis_tanah" 
                                placeholder="Masukan jenis tanah ..." />
                            </div>
                            <div class="col-md-2    ">
                                <x-input.input 
                                type="text" label="Masa tumbuh" 
                                name="masa_tumbuh" 
                                placeholder="Masukan masa tumbuh ..." />
                            </div>
                            <div class="col-md-2    ">
                                <x-input.input 
                                type="text" label="Umur tanaman" 
                                name="umur_tanaman " 
                                placeholder="Masukan umur tanaman ..." />
                            </div>
                            <div class="col-md-4    ">
                                <x-input.input 
                                type="text" label="Status Penanaman" 
                                name="status_penanaman" 
                                placeholder="Masukan status penanaman ..." />
                            </div>
                            <div class="col-md-12">
                                <x-input.textarea 
                                label="Deskripsi" 
                                name="deskripsi" 
                                placeholder="Masukan deskripsi ..." />
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-end mt-3">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </x-card.body>
            </x-card.card>
         </div>
    </div>
 </x-layouts.app>