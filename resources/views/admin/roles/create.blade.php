@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">

                    <x-breadcrumb root="Roles" current="Create Role" />

                    <x-card-info info="Create New Role" />

                    <div>
                        <form method="POST" action="{{ route('roles.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <x-forms.input-text type="text" label="Role Name" name="name"
                                        placeholder="Please Enter your Role Name" />
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <x-forms.multiple-select
                                    label="Permissions"
                                    name="permissions"
                                    :items="$permissions" />
                                </div>
                            </div>
                            <x-button label="Submit" type="submit" btntype="create" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@endsection
