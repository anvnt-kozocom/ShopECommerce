@extends('adminFolder.master')
@section('content')
    {{-- {{ dd($user) }} --}}
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Profile</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <img src="{{ url('/upload/user/avatar/' . $user->avatar) }}" alt="Image" width="300"
                                height="250" />
                            <h4 class="card-title m-t-10">Hanna Gover</h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                        <font class="font-medium">254</font>
                                    </a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                        <font class="font-medium">54</font>
                                    </a></div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                        <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                        <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                        <div class="map-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> <small class="text-muted p-t-30 db">Social Profile</small>
                        <br />
                        <button class="btn btn-circle btn-secondary"><i class="mdi mdi-facebook"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="mdi mdi-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="mdi mdi-youtube-play"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" <?php echo "value='" . $user->name . "'"; ?> placeholder={{ $user->name }}
                                        class="form-control form-control-line">
                                    @error('name')
                                        <p style="color:red">Không được để trống!</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" disabled value={{ $user->email }}
                                        placeholder="johnathan@admin.com" class="form-control form-control-line"
                                        name="emai l" id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input name="password" type="password" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input name="phone" type="text" class="form-control form-control-line"
                                        placeholder="000" value={{ $user->phone == '' ? '' : $user->phone }}>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Message</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Country</label>
                                <div class="col-sm-12">
                                    <select name="address" class="form-control form-control-line">
                                        <option selected>{{ $user->address ? $user->address : 'Country' }}</option>
                                        @foreach ($countries as $country)
                                            <option>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <span>Avatar</span><br />
                            <input style="margin: 4px 0;cursor: pointer;" type="file" name="avatar">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        All Rights Reserved by Nice admin. Designed and Developed by
        <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
@endsection
