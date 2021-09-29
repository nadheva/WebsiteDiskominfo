<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" action="{{route('PPID.store')}}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalTitle">Tambah PPID</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Judul</h4>
                                    <div class="form-group">
                                        <input name="judul" type="text" class="form-control" placeholder="Masukkan Judul PPID">
                                    </div>
                                    <h4 class="card-title">Link</h4>
                                    <div class="form-group">
                                        <input name="link" type="text" class="form-control" placeholder="Masukkan Link Download Berkas">
                                    </div>
                                    <h4 class="card-title">Jenis</h4>
                                    <select class="custom-select mr-sm-2" name="jenis" id="inlineFormCustomSelect">
                                        <option selected="">Choose...</option>
                                        <option value="Daftar Informasi Publik">Daftar Informasi Publik</option>
                                        <option value="Informasi Yang Diumumkan Secara Berkala">Informasi Yang Diumumkan Secara Berkala</option>
                                        <option value="Informasi Yang Serta Merta">Informasi Yang Serta Merta</option>
                                        <option value="Informasi Yang Tersedia Setiap Saat">Informasi Yang Tersedia Setiap Saat</option>
                                        <option value="SOP">SOP</option>
                                    </select>
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
                        <h5 class="modal-title" id="scrollableModalTitle">Ubah Data PPID</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Judul</h4>
                                    <div class="form-group">
                                        <input name="judul" type="text" id="inp-judul" class="form-control" placeholder="Masukkan Judul PPID">
                                    </div>
                                    <h4 class="card-title">Link</h4>
                                    <div class="form-group">
                                        <input name="link" type="text" id="inp-link" class="form-control" placeholder="Masukkan Link Download Berkas">
                                    </div>
                                    <h4 class="card-title">Jenis</h4>
                                    <select class="custom-select mr-sm-2" id="inp-jenis" name="jenis" id="inlineFormCustomSelect">
                                        <option selected="">Choose...</option>
                                        <option value="Daftar Informasi Publik">Daftar Informasi Publik</option>
                                        <option value="Informasi Yang Diumumkan Secara Berkala">Informasi Yang Diumumkan Secara Berkala</option>
                                        <option value="Informasi Yang Serta Merta">Informasi Yang Serta Merta</option>
                                        <option value="Informasi Yang Tersedia Setiap Saat">Informasi Yang Tersedia Setiap Saat</option>
                                        <option value="SOP">SOP</option>
                                    </select>
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
                        <h4 class="card-title">Data PPID</h4>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                                <thead class="thead-primary text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Link</th>
                                        <th>Jenis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($PPID as $item)
                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration}}</td>
                                        <td>{{$item->judul}}</td>
                                        <td>{{$item->link}}</td>
                                        <td>{{$item->jenis}}</td>
                                        <td style="text-align: center;">
                                        <button type="button"
                                            data-toggle="modal"
                                            style="border-radius: 15px"
                                            class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1 editPPIDButton"
                                            data-target="#scrollable-modal-edit"
                                            value="{{$item->id}}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <form  class="btn p-0" method="post" action="{{route('PPID.destroy',$item->id)}}">
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

            $(document).on("click", ".editPPIDButton", function()
            {
                let id = $(this).val();
                $.ajax({
                    method: "get",
                    url :  "PPID/"+id+"/edit",
                }).done(function(response)
                {
                    $("#inp-judul").val(response.judul);
                    $("#inp-link").val(response.link);
                    $("#inp-jenis").val(response.jenis);
                    $("#editModalForm").attr("action", "/PPID/" + id)
                });
            });
        </script>
    @endpush

</x-app-layout>