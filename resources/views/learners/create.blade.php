@extends ('layouts.app')

@section('title', 'Create')

@section('content')
    {{ csrf_field() }}

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> {{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endforeach

    @endif
    <form action="learnercreate" method="GET">
        <div class="card ">
            <div class="card-header bg-transparent ">Learners Register Form</div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <label for="fname">First Name</label>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <label for="fname">Last Name</label>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" id="fname" name="lastname" placeholder="Your last name.." required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent ">

                <div class="row">
                    <div class="col"></div>
                    <div class="col-auto">
                        <input type="submit" value="submit" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
