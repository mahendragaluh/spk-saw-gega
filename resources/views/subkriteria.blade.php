@extends('mainLayouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Subkriteria </h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-10">
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="">Nama Subkriteria</label>
                            <input type="text" class="form-control" id="" placeholder="Nama Kriteria">
                        </div>
                        <div class="form-group">
                            <label for="">Bobot %</label>
                            <input type="text" class="form-control" id="" placeholder="Bobot">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Nama Subkriteria </th>
                                    <th> Bobot </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
