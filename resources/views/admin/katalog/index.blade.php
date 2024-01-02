<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>DATA KATALOG   </h2>
         </div>
         <div class="col-md-12">
            <x-card.card>
                <x-card.header> 
                    <x-button.btn url="{{ url('admin/katalog/tambah') }}" class="success" icon="add" title titles="Tambah Katalog" />
                </x-card.header>
                <x-card.body>
                   <x-table.table>
                        <x-table.thead>
                            <tr>
                                <x-table.th title="No." />
                                <x-table.th title="Nama Pohon" />
                                <x-table.th title="Foto" />
                                <x-table.th title="Deskripsi" />
                                <x-table.th title="Aksi" />
                            </tr>
                        </x-table.thead>
                        <x-table.tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <x-table.td value="{{ $loop->iteration }}" />
                                    <x-table.td value="{{ $item->nama_pohon }}" />
                                    <x-table.td-image src="{{ url('public') }}/{{ $item->foto }}" />
                                    <x-table.td value="{{ $item->deskripsi }}" />
                                    <x-table.td-action>
                                        <x-button.btn url="{{ url('admin/katalog/detail',$item->id) }}" class="warning" icon="visibility" />
                                        <x-button.btn url="{{ url('admin/katalog/edit',$item->id) }}" class="primary" icon="edit" />
                                        <x-button.btn url="{{ url('admin/katalog/hapus',$item->id) }}" class="danger" icon="delete" />
                                    </x-table.td-action>
                                </tr>
                            @endforeach
                        </x-table.tbody>
                   </x-table.table>
                </x-card.body>
            </x-card.card>
         </div>
    </div>
 </x-layouts.app>