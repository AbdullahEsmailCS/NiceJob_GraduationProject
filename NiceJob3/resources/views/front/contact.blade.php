@extends('front.layouts.app')
@section('main')
<div class="container">
    <div class="row m-sm-auto">
        <div class="col-sm-8 m-5">
            <div class="card mb-5">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Contact Us</h4>

                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome to Our Website!</h5>
                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
   


</div>
@endsection