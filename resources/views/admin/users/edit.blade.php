@extends('layouts.admin')


@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">

                    <x-breadcrumb root="Users" current="Create User"/>

                    <x-card-info info="Create New User"/>

                    <div>
                        <form method="POST" action="{{route('users.update',$user)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <x-forms.input-text
                                    type="text"
                                    label="Name"
                                    name="name"
                                    value="{{old('name',$user->name)}}"
                                    placeholder="Please Enter your name"
                                    />
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <x-forms.input-text
                                    type="email"
                                    label="Email"
                                    name="email"
                                    value="{{old('email',$user->email)}}"
                                    placeholder="Please Enter your Email"
                                    />
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <x-forms.input-text
                                    type="password"
                                    label="Password"
                                    name="password"
                                    placeholder="Please Enter your Password"
                                    />
                                </div>
                            </div>
                            <x-button label="Submit" type="submit" btntype="create"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
