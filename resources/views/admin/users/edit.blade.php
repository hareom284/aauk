@extends('layouts.admin')


@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">

                    <x-breadcrumb root="Permissions" current="Edit Permission"/>

                    <x-card-info info="Edit New Permission"/>

                    <div>
                        <form method="POST" action="{{route('permissions.update',$permission)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <x-forms.input-text
                                    type="text"
                                    label="Name"
                                    name="name"
                                    value="{{old('name',$permission->name)}}"
                                    placeholder="Please Enter your name"
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
