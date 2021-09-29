<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <form action="{{route('Profil.store')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Foto Struktur Organisasi</h4>
                                        <div class="form-group">
                                            <input name="foto_struktur" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Visi</h4>
                                        <div class="form-group">
                                            <input name="visi" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Misi</h4>
                                        <div class="form-group">
                                            <input name="misi" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Tugas</h4>
                                        <div class="form-group">
                                            <input name="tugas" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Fungsi</h4>
                                        <div class="form-group">
                                            <input name="fungsi" type="text" class="form-control">
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade" id="scrollable-modal-edit" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" id="editModalForm" action="">
                    @csrf
                    @method("PUT")
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalTitle">Ubah Data Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <form action="{{route('Profil.store')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Foto Struktur Organisasi</h4>
                                        <div class="form-group">
                                            <input name="foto_struktur" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Visi</h4>
                                        <div class="form-group">
                                            <input name="visi" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Misi</h4>
                                        <div class="form-group">
                                            <input name="misi" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Tugas</h4>
                                        <div class="form-group">
                                            <input name="tugas" type="text" class="form-control">
                                        </div>

                                        <h4 class="card-title">Fungsi</h4>
                                        <div class="form-group">
                                            <input name="fungsi" type="text" class="form-control">
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="container-fluid">

        <button type="button" class="btn btn-secondary mb-2" data-toggle="modal" data-target="#scrollable-modal">Tambah Data</button>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Profil</h4>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                                <thead class="thead-primary text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Foto Struktur</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Tugas</th>
                                        <th>Fungsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Profil as $item)
                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration}}</td>
                                        <td>{{$item->foto_struktur}}</td>
                                        <td>{{$item->visi}}</td>
                                        <td>{{$item->misi}}</td>
                                        <td>{{$item->tugas}}</td>
                                        <td>{{$item->fungsi}}</td>
                                        <td style="text-align: center;">
                                            <button type="button"
                                            data-toggle="modal"
                                            style="border-radius: 15px"
                                            class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1 editProfilButton"
                                            data-target="#scrollable-modal-edit"
                                            value="{{$item->id}}">
                                            <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <form class="btn p-0" method="post" action="{{route('Profil.destroy',$item->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="border-radius: 15px;" class="btn waves-effect waves-light btn-outline-secondary pt-1 pb-1">
                                                    <i class="far fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        {{-- <th>ID</th>
                                            <th>PERTANYAAN</th>
                                            <th>JAWABAN</th>
                                            <th>Action</th> --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $(document).on("click", ".editProfilButton", function()
        {
            let id = $(this).val();
            $.ajax({
                method: "get",
                url :  "Profil/"+id+"/edit",
            }).done(function(response)
            {

                $("#inp-judul").val(response.judul);
                $("#inp-isi").val(response.isi);
                $("#inp-link").val(response.link);
                $("#inp-foto").val(response.foto);
                $("#inp-jenis_Profil").val(response.jenis_Profil);
                $("#editModalForm").attr("action", "/Profil/" + id)
            });
        });
    </script>
    @endpush
</x-app-layout>