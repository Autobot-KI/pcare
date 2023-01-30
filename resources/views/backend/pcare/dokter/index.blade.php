@extends('backend.layouts.app')

@section('title') @lang("Dokter") @endsection

@section('breadcrumbs')
<h6>List Dokter</h6>
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="card-title mb-0">
                    <i class="c-icon fas fa-bell"></i>Get Data Dokter
                    <small class="text-muted">List</small>
                </h4>
                <div class="small text-medium-emphasis">
                    Integrasi BPJS
                </div>
            </div>
            <div class="btn-toolbar d-block" role="toolbar" aria-label="Toolbar with buttons">
            <button type="button" class="btn btn-primary">Download Exel</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="row mb-2">
            <h4>Pilih Oulet</h4>
            <div class="col-md-3">
					<label for="select2-single-input-sm" class="control-label">col-md-3</label>
					<select id="select2-single-input-sm" class="form-control input-sm select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
						<optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI" disabled="disabled">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                    </optgroup>
					</select>
                    <span class="select2 select2-container select2-container--bootstrap select2-container--below" dir="ltr"><span class="selection"><span class="select2-selection select2-selection--single form-control input-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select2-single-input-sm-container"><span class="select2-selection__rendered" id="select2-select2-single-input-sm-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				</div>
            <div class="col-4">
                <button type="button" class="btn btn-primary">Cek</button>
                </div>
            </div>
            <div class="col">
                <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>
                                No </th>
                            <th>
                                Kode Dokter </th>
                            <th>
                                Nama Dokter </th>
                            <th class="text-end">
                                Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>123456789</td>
                        <td>Dr. A</td>
                        <td>ss</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    Total 0 Notifications
                </div>
            </div>
            <div class="col-5">
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection