@extends('backend.layouts.app')
@section('title', 'HSBLCO | General Information')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add General Information </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- @include('backend.layouts.messages') --}}
                            @if (isset($edit))
                                <form action="{{ route('home.update', $edit->id) }}" method="post" class="row"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                @else
                                    <form action="{{ route('home.store') }}" method="post" class="row"
                                        enctype="multipart/form-data">
                                        @csrf
                            @endif

                            <div class="form-group col-4">
                                <label for="logo">Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="logo" id="logo"
                                            {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>

                                <span>
                                    @error('logo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->logo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="logo_two">Logo Second</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="logo_two" id="logo_two"
                                            {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('logo_two')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->logo_two : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="home_cover_photo">Home Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="home_cover_photo"
                                            id="home_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('home_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->home_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="home_interior_photo">Home Interior Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="home_interior_photo"
                                            id="home_interior_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('home_interior_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->home_interior_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="home_exterior_photo">Home Exterior Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="home_exterior_photo"
                                            id="home_exterior_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('home_exterior_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->home_exterior_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="home_branding_photo">Home Branding Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="home_branding_photo"
                                            id="home_branding_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('home_branding_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->home_branding_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="home_exclusive_photo">Home Exclusive Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="home_exclusive_photo"
                                            id="home_exclusive_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('home_exclusive_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->home_exclusive_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="exclusive_cover_photo">Exclusive Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="exclusive_cover_photo"
                                            id="exclusive_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('exclusive_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->exclusive_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="service_cover_photo">Service Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="service_cover_photo"
                                            id="service_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('service_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->service_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="interior_cover_photo">Interior Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="interior_cover_photo"
                                            id="interior_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('interior_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->interior_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="exterior_cover_photo">Exterior Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="exterior_cover_photo"
                                            id="exterior_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('exterior_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->exterior_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="branding_cover_photo">Branding Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="branding_cover_photo"
                                            id="branding_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('branding_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->branding_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="portfolio_cover_photo">Portfolio Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="portfolio_cover_photo"
                                            id="portfolio_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('portfolio_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->portfolio_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="contact_cover_photo">Contact Cover Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="contact_cover_photo"
                                            id="contact_cover_photo" {{ !isset($edit) ? 'require' : '' }}>
                                    </div>
                                </div>
                                <span>
                                    @error('contact_cover_photo')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                    <img style="height:30px; width: 50px; "
                                        src="{{ asset('uploads/general/' . (isset($edit) ? $edit->contact_cover_photo : '')) }}"
                                        alt="Picture">
                                </span>
                            </div>

                            <div class="form-group col-4">
                                <label for="address">Save</label>
                                <input type="submit" value="Action" class="btn btn-success btn-block">
                            </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
