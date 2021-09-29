<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" action="{{route('hmtp.store')}}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Deskripsi</h4>
                                    <div class="form-group">
                                        <input name="deskripsi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Visi</h4>
                                    <div class="form-group">
                                        <input name="visi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Misi</h4>
                                    <div class="form-group">
                                        <input name="misi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Struktur Organisasi</h4>
                                    <div class="form-group">
                                        <input name="struktur_organisasi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Periode</h4>
                                    <div class="form-group">
                                        <select class="custom-select mr-sm-2" name="id_periode" id="inlineFormCustomSelect">
                                            @foreach ($periode as $item)
                                            <option value="{{$item->id}}">{{$item->tahun}}-{{$item->semester}}</option>
                                            @endforeach
                                        </select>
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

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" id="editModalForm" action="{{route('hmtp.store')}}">
                    @csrf
                    @method("PUT")
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Deskripsi</h4>
                                    <div class="form-group">
                                        <input name="deskripsi" id="inp-deskripsi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Visi</h4>
                                    <div class="form-group">
                                        <input name="visi" id="inp-visi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Misi</h4>
                                    <div class="form-group">
                                        <input name="misi" id="inp-misi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Struktur Organisasi</h4>
                                    <div class="form-group">
                                        <input name="struktur_organisasi" id="inp-struktur_organisasi" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Periode</h4>
                                    <div class="form-group">
                                        <select class="custom-select mr-sm-2" name="id_periode" id="inlineFormCustomSelect">
                                            @foreach ($periode as $item)
                                            <option value="{{$item->id}}">{{$item->tahun}}-{{$item->semester}}</option>
                                            @endforeach
                                        </select>
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
                        <h4 class="card-title">Data HMTP</h4>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                                    <thead class="thead-primary text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Periode</th>
                                            <th>Deskripsi</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Struktur Organisasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hmtp as $item)
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration}}</td>
                                            <td>{{$item->periode->tahun}}</td>
                                            <td>{{$item->deskripsi}}</td>
                                            <td>{{$item->visi}}</td>
                                            <td>{{$item->misi}}</td>
                                            <td>{{$item->struktur_organisasi}}</td>
                                            <td style="text-align: center;">
                                            {{-- <a href="{{route('hmtp.edit',$item->id)}}" style="border-radius: 15px;" class="btn waves-effect waves-light btn-warning">
                                                <i class="fas fa-edit"> EDIT</i>
                                            </a> --}}
                                            <button
                                                style="border-radius: 15px"
                                                value="{{ $item->id}}"
                                                class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1 editHmtpButton"
                                                data-toggle="modal"
                                                data-target="#editModal">
                                                    <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <form  class="btn p-0" method="post" action="{{route('hmtp.destroy',$item->id)}}">
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

            $(document).on("click", ".editHmtpButton", function()
            {
                let id = $(this).val();
                $.ajax({
                    method: "get",
                    url :  "hmtp/"+id+"/edit",
                }).done(function(response)
                {
                    console.log(response);
                    // $("#inp-tahun").val(response.tahun);
                    $("#inp-deskripsi").val(response.deskripsi);
                    $("#inp-visi").val(response.visi);
                    $("#inp-misi").val(response.misi);
                    $("#inp-struktur_organisasi").val(response.struktur_organisasi);
                    $("#editModalForm").attr("action", "/hmtp/" + id)
                });
            });
        </script>
    @endpush

</x-app-layout>