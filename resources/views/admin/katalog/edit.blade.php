<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>Edit DATA KATALOG</h2>
         </div>
         <div class="col-md-12">
            <x-card.card>
                <x-card.body>
                    <form action="{{ url('admin/katalog/update', $list->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <x-input.input 
                                type="text" 
                                label="Nama pohon" 
                                value="{{ $list->nama_pohon }}" 
                                name="nama_pohon" 
                                placeholder="Masukan nama pohon ..." />
                            </div>
                            <div class="col-md-6">
                                <x-input.input 
                                type="file" 
                                label="Foto / Gambar" 
                                name="foto" 
                                placeholder="Masukan foto pohon ..." />
                            </div>
                            <div class="col-md-12">
                                <x-input.textarea 
                                label="Deskripsi" 
                                value="{{ $list->deskripsi }}" 
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