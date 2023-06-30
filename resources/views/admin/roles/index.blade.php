@extends('layouts.admin')


@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <x-breadcrumb root="Roles" current="Create Role"/>

                    <x-card-info info="Create New Role"/>

                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Email</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Registration Date</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3">1</td>
                                    <td class="align-middle py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative mr-2">
                                                <span
                                                    class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-success rounded-circle"></span>
                                                <!--img class="avatar rounded-circle" src="#" alt="John Doe"-->
                                                <span class="avatar-placeholder mr-md-2">J</span>
                                            </div>
                                            John Doe
                                        </div>
                                    </td>
                                    <td class="py-3">john.doe@example.com</td>
                                    <td class="py-3">January 15, 2019</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-success">Verified</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a class="link-dark d-inline-block" href="#">
                                                <i class="gd-pencil icon-text"></i>
                                            </a>
                                            <a class="link-dark d-inline-block" href="#">
                                                <i class="gd-trash icon-text"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">2</td>
                                    <td class="align-middle py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative mr-2">
                                                <!--img class="avatar rounded-circle" src="#" alt="John Doe"-->
                                                <span class="avatar-placeholder mr-md-2">S</span>
                                            </div>
                                            Sam Dew
                                        </div>
                                    </td>
                                    <td class="py-3">sam.dew@example.com</td>
                                    <td class="py-3">January 15, 2019</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-warning">Pending</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a class="link-dark d-inline-block" href="#">
                                                <i class="gd-pencil icon-text"></i>
                                            </a>
                                            <a class="link-dark d-inline-block" href="#">
                                                <i class="gd-trash icon-text"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">3</td>
                                    <td class="align-middle py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative mr-2">
                                                <span
                                                    class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-success rounded-circle"></span>
                                                <!--img class="avatar rounded-circle" src="#" alt="John Doe"-->
                                                <span class="avatar-placeholder mr-md-2">A</span>
                                            </div>
                                            Anna Doe
                                        </div>
                                    </td>
                                    <td class="py-3">anna.doe@example.com</td>
                                    <td class="py-3">January 15, 2019</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-success">Verified</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a class="link-dark d-inline-block" href="#">
                                                <i class="gd-pencil icon-text"></i>
                                            </a>
                                            <a class="link-dark d-inline-block" href="#">
                                                <i class="gd-trash icon-text"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <x-pagination :permissions="$permissions" />
                    </div>
                    <!-- End Users -->
                </div>
            </div>


        </div>
    @endsection
