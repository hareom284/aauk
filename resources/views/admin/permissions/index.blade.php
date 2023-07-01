@extends('layouts.admin')


@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Users</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">All Users</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Users</div>
                        <div class="h3 ">
                            <form method="GET">
                                <div class="d-flex">
                                    <x-forms.input-text type="text" label="" name="userlist"
                                        placeholder="Please Search User" className="pr-3" />
                                    <x-button type="submit" btntype="back" label="Search" />
                                </div>
                            </form>
                        </div>
                        <div class="h3">
                            <a class="btn btn-info" href="{{ route('permissions.create') }}">Create</a>
                        </div>
                    </div>


                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($permissions as $id => $permission)
                                    <tr>
                                        <td class="py-3">{{++$id}}</td>
                                        <td class="py-3">{{$permission->name}}</td>
                                        <td class="py-3">
                                            <div class="d-flex">
                                                <a class="link-dark btn d-inline-block" href="{{ route('permissions.edit',$permission)}}">
                                                    <i class="gd-pencil icon-text"></i>
                                                </a>

                                                <form
                                                method="POST"
                                                action="{{route("permissions.destroy",$permission)}}"
                                                class="form-inline px-3"
                                                >
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
                        {{ $permissions->links() }}
                    </div>
                    <!-- End Users -->
                </div>
            </div>


        </div>
    @endsection


    @section('script')

    <script>
        function myfunction()
        {
            alert("hello");
        }
    </script>

    @endsection
