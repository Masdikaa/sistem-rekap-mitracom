@extends('layouts.mitra-main')

@section('content')
  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">CREATE NEW USER</h3>
        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3 ml-auto" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Data Master</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="link-fx" href="javascript:void(0)">User</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    Create
                </li>
            </ol>
        </nav>
    </div>
    <div class="block-content block-content-full">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8">
                    <form action="{{ route('datamaster-user.store') }}" method="POST" id="createUser">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label" for="username">Username</label><small class="text-danger"> *</small>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Your Username..">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="password">Password</label><small class="text-danger"> *</small>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password..">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="role">Role</label><small class="text-danger"> *</small>
                            <select class="form-control" name="role" id="role">
                                <option selected disabled value="">-- Pilih Role --</option>
                              
                                <option value="admin">Admin</option>
                                <option value="superadmin">Superadmin</option>
                              
                            </select>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('datamaster-user.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success"><i class="ik save ik-save"></i>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

  <!-- END Page Content -->

@endsection

@section('js')
<script>
$(document).ready(function() {
    $("#role").select2({
    minimumResultsForSearch: Infinity
});

});
</script>

@endsection