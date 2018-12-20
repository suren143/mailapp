@extends('welcome')

@section('content')
  <div class="container">
    <div class="row">
        <h1 class="text-center">Mail App Laravel</h1>
    </div>
    <div class="row">
      <div class="col-sm-12">
          <form class="form-horizontal" action="{{route('sendmail.store')}}" method="post" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <legend style="color:white;">Send Email To EveryOne</legend>
            </div>

            <div class="form-group">
              <label for="email">Sendin to Who?</label>
              <input type="email" name="email"  class="form-control">
            </div>

            <div class="form-group">
              <label for="email">Subject</label>
              <input type="text" name="subject"  class="form-control">
            </div>

            <div class="form-group">
              <label for="email">Message</label>
              <textarea name="message" rows="8" cols="80" class="form-control" id="message"></textarea>
            </div>

            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection