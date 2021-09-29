<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" action="{{route('periode.store')}}">
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
                                <h4 class="card-title">Tahun Periode</h4>
                                <div class="form-group">
                                    <input name="tahun" type="text" class="form-control">
                                </div>

                                <h4 class="card-title">Semester</h4>
                                <div class="form-group">
                                    <select class="custom-select mr-sm-2" name="semester" id="inlineFormCustomSelect">
                                        <option selected="">Choose...</option>
                                        <option value="Genap">Genap</option>
                                        <option value="Ganjil">Ganjil</option>
                                    </select>
                                </div>

                                <h4 class="card-title">Status</h4>
                                <div class="form-group">
                                    <select class="custom-select mr-sm-2" name="status" id="inlineFormCustomSelect">
                                        <option selected="">Choose...</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
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

    <div class="modal fade" id="ModalEditForm" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" id="editModalForm" action="{{route('periode.store')}}">
                    @csrf
                    @method("PUT")
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableModalTitle">Edit Periode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tahun Periode</h4>
                                <div class="form-group">
                                    <input name="tahun" id="inp-tahun" type="text" class="form-control">
                                </div>

                                <h4 class="card-title">Semester</h4>
                                <div class="form-group">
                                    <select class="custom-select mr-sm-2" name="semester" id="inp-semester">
                                        <option selected="">Choose...</option>
                                        <option value="Genap">Genap</option>
                                        <option value="Ganjil">Ganjil</option>
                                    </select>
                                </div>

                                <h4 class="card-title">Status</h4>
                                <div class="form-group">
                                    <select class="custom-select mr-sm-2" name="status" id="inp-status">
                                        <option selected="">Choose...</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
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
                        <h4 class="card-title">Data Periode</h4>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                                    <thead class="thead-primary text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tahun</th>
                                            <th>Semester</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($periode as $item)
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration}}</td>
                                            <td>{{$item->tahun}}</td>
                                            <td>{{$item->semester}}</td>
                                            <td>{{$item->status}}</td>

                                            <td style="text-align: center;">
                                            <button
                                                style="border-radius: 15px"
                                                value="{{ $item->id }}"
                                                class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1 editPeriodeButton"
                                                data-toggle="modal"
                                                data-target="#ModalEditForm">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <form  class="btn p-0" method="post" action="{{route('periode.destroy',$item->id)}}">
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

            $(document).on("click", ".editPeriodeButton", function()
            {
                let id = $(this).val();
                $.ajax({
                    method: "get",
                    url :  "periode/"+id+"/edit",
                }).done(function(response)
                {
                    console.log(response);
                    $("#inp-tahun").val(response.tahun);
                    $("#inp-semester").val(response.semester);
                    $("#inp-status").val(response.status);
                    $("#editModalForm").attr("action", "/periode/" + id)
                });
            });
        </script>
    @endpush
</x-app-layout>