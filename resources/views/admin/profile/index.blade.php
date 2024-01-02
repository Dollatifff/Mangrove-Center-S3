<x-layouts.app>
    <style>
        .list-profile{
            list-style: none;
            padding: 0;
            margin: 0
        }
        .list-profile li{
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 2px solid #dedede;
        }
        .list-profile li span{
            display: block;
            padding: 0;
            margin: 0
        }
        .list-profile li span:nth-child(1){
            font-size: 14px;
            font-weight: 500;
            width: 100px;
        }
        .list-profile li span:nth-child(2){
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
        }
        .list-profile li span:nth-child(3){
            font-size: 15px;
            font-weight: bold
        }
    </style>
    <div class="row">
         <div class="col-md-12">
             <h2>PROFILE</h2>
         </div>
         <div class="col-md-4">
            <x-card.card>
                <x-card.body>
                   <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ url('public') }}/{{ $list->foto }}" alt="" width="100%">
                   </div>
                </x-card.body>
            </x-card.card>
         </div>
         <div class="col-md-8">
            <x-card.card>
                <x-card.body>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-profile">
                                <li>
                                    <span>Nama</span>
                                    <span>:</span>
                                    <span>{{ $list->nama }}</span>
                                </li>
                                <li>
                                    <span>Email</span>
                                    <span>:</span>
                                    <span>{{ $list->email }}</span>
                                </li>
                                <li>
                                    <span>Password</span>
                                    <span>:</span>
                                    <span>{{ $list->password }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex align-items-center justify-content-end mt-3">
                                <a href="#edit" data-bs-toggle="modal" class="btn btn-primary">EDIT</a>
                            </div>
                        </div>
                    </div>
                </x-card.body>
            </x-card.card>
         </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('admin/profile', $list->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDIT AKUN</h1>
                    </div>
                    <div class="modal-body">
                        <x-input.input type="text" label="Nama" name="nama" value="{{ $list->nama }} " placeholder="Masukan nama ..." />
                        <x-input.input type="email" label="Email" name="email" value="{{ $list->email }} " placeholder="Masukan nama ..." />
                        <x-input.input type="password" label="Password" name="password" placeholder="Masukan password ..." />
                        <x-input.input type="file" label="Foto" name="foto" placeholder="Masukan foto ..." />
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-center gap-1">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </x-layouts.app>