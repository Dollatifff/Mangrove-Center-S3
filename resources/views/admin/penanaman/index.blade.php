<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>DATA PENANAMAN   </h2>
         </div>
         <div class="col-md-12">
            <x-card.card>
                <x-card.header> 
                    <x-button.btn url="{{ url('admin/penanaman/tambah') }}" class="success" icon="add" title titles="Tambah penanaman" />
                </x-card.header>
                <x-card.body>
                   <x-table.table>
                        <x-table.thead>
                            <tr>
                                <x-table.th title="No." />
                                <x-table.th title="foto" />
                                <x-table.th title="Sampel" />
                                <x-table.th title="Lokasi" />
                                <x-table.th title="Status penanaman" />
                                <x-table.th title="aksi" />
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
                                        <x-button.btn url="{{ url('admin/penanaman/detail',$item->id) }}" class="warning" icon="visibility" />
                                        <x-button.btn url="{{ url('admin/penanaman/edit',$item->id) }}" class="primary" icon="edit" />
                                        <x-button.btn url="{{ url('admin/penanaman/hapus',$item->id) }}" class="danger" icon="delete" />
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