 <div class="modal fade" id="modal-form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">Add {{$title ?? ''}}</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="modal_form_form" class="form" action="{{ route('content.store') }}" method="post" >
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="d-flex flex-column fv-row">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Judul</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="judul tidak boleh sama"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="" name="title" />
                            </div>
                            <div class="col-12 mb-5">
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Kategori</span>
                                </label>
                                <select name="content_category_id" data-control="select2" data-placeholder="Pilih Data..." data-dropdown-parent="#modal-form" class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value=""></option>
                                    @foreach ($categorys as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mb-5">
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Deskripsi</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="desc" placeholder="isi Content" data-kt-autosize="true"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary" id="modal_form_submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-show" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">Edit {{$title ?? ''}}</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="modal_update" class="form" method="post">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="d-flex flex-column fv-row">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Judul</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="judul tidak boleh sama"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="title" name="title" required/>
                            </div>
                            <div class="col-12 mb-5">
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Kategori</span>
                                </label>
                                <select name="content_category_id" data-control="select2" id="category" data-placeholder="Pilih Data..." data-dropdown-parent="#modal-show" class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value=""></option>
                                    @foreach ($categorys as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mb-5">
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Deskripsi</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="desc" id="desc" placeholder="isi Content" data-kt-autosize="true" required></textarea>
                            </div>
                            <div class="col-12 mb-5 text-end">
                                <button class="btn btn-sm btn-danger" id="delete">Delete</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="data_id" name="data_id" />
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary" id="modal_update_submit">
                            <span class="indicator-label">Update</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




