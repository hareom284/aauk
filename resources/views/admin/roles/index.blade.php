@extends('layouts.admin')


@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <x-breadcrumb root="Roles" current="Create Role" />

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Roles</div>
                        <div class="h3 ">
                            <form method="GET">
                                <div class="d-flex">
                                    <x-forms.input-text type="text" label="" name="userlist"
                                        placeholder="Please Search Roles" className="pr-3" />
                                    <x-button type="submit" btntype="back" label="Search" />
                                </div>
                            </form>
                        </div>
                        <div class="h3">
                            <a class="btn btn-info" href="{{ route('roles.create') }}">Create</a>
                        </div>
                    </div>

                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Role Name</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Permissions</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="align-middle py-3">
                                            <div class="d-flex align-items-center">
                                                {{ $role->name }}
                                            </div>
                                        </td>
                                        <td class="py-3">
                                            <div class="d-flex flex-row flex-wrap">
                                                @foreach ($role->permissions as $permission)
                                                    <span class="badge m-2 badge-pill badge-success">
                                                        {{ $permission->name }}
                                                    </span>
                                                @endforeach
                                            </div>

                                        </td>
                                        <td class="py-3">
                                            <div class="d-flex">
                                                <a class="link-dark btn d-inline-block" href="{{route("roles.edit",$role)}}">
                                                    <i class="gd-pencil icon-text"></i>
                                                </a>
                                                <form method="POST" action="{{ route('roles.destroy', $role) }}"
                                                    class="form-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-inline  link-dark d-inline-block">
                                                        <i class="gd-trash icon-text"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>


        </div>
    @endsection
