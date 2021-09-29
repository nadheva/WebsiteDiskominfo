<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" action="{{route('Lab.store')}}">
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

                                    <h4 class="card-title">Kepala Lab</h4>
                                    <div class="form-group">
                                        <input name="kepala_lab" type="text" class="form-control">
                                    </div>

                                    <h4 class="card-title">Asisten Lab</h4>
                                    <div class="form-group">
                                        <input name="asisten_lab" type="text" class="form-control">
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

    <div class="modal fade" id="scrollable-modal-edit" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form method="post" id="editModalForm" action="{{route('Lab.store')}}">
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

                        <h4 class="card-title">Kepala Lab</h4>
                        <div class="form-group">
                            <input name="kepala_lab" id="inp-kepala_lab" type="text" class="form-control">
                        </div>

                        <h4 class="card-title">Asisten Lab</h4>
                        <div class="form-group">
                            <input name="asisten_lab" id="inp-asisten_lab" type="text" class="form-control">
                        </div>

                        <h4 class="card-title">Periode</h4>
                        <div class="form-group">
                            <select class="custom-select mr-sm-2" name="id_periode" id="inp-periode">
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
                        <h4 class="card-title">Data Lab</h4>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                                    <thead class="thead-primary text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Deskripsi</th>
                                            <th>Kepala Lab</th>
                                            <th>Asisten Lab</th>
                                            <th>Periode</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Lab as $item)
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration}}</td>
                                            <td>{{$item->deskripsi}}</td>
                                            <td>{{$item->kepala_lab}}</td>
                                            <td>{{$item->asisten_lab}}</td>
                                            <td>{{$item->periode->tahun}}</td>
                                            <td style="text-align: center;">
                                            {{-- <a href="{{route('Lab.edit',$item->id)}}" style="border-radius: 15px;" class="btn waves-effect waves-light btn-warning">
                                                <i class="fas fa-edit"> EDIT</i>
                                            </a> --}}
                                            <button type="button"
                                            data-toggle="modal"
                                            style="border-radius: 15px"
                                            class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1 editLabButton"
                                            data-target="#scrollable-modal-edit"
                                            value="{{$item->id}}">
                                            <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <form  class="btn p-0" method="post" action="{{route('Lab.destroy',$item->id)}}">
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

            $(document).on("click", ".editLabButton", function()
            {
                let id = $(this).val();
                $.ajax({
                    method: "get",
                    url :  "Lab/"+id+"/edit",
                }).done(function(response)
                {
                    $("#inp-deskripsi").val(response.deskripsi);
                    $("#inp-kepala_lab").val(response.kepala_lab);
                    $("#inp-asisten_lab").val(response.asisten_lab);
                    $("#inp-id_periode").val(response.id_periode);
                    $("#editModalForm").attr("action", "/Lab/" + id)
                });
            });
        </script>
    @endpush

</x-app-layout>