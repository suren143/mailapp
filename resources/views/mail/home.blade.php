@extends('welcome')

@section('content')
  <div class="container">
     <div class="row text-center">
       <div class="col-sm-12" style="margin-top:200px;">
         <h1>Laravel Mail App</h1>
       </div>
       <div class="col-sm-12" style="margin-top:200px;">
         <div class="col-sm-4">
           <a href="{{route('mail.index')}}" class="btn btn-default btn-block btn-lg">Send Mail</a>
         </div>

         <div class="col-sm-4">
           <a href="{{action('MailController@index')}}" class="btn btn-primary btn-block btn-lg">Receive Mail</a>
         </div>

         <div class="col-sm-4">
           <a href="{{action('MailController@index')}}" class="btn btn-success btn-block btn-lg">Queue Mail</a>
         </div>
       </div>
     </div>
  </div>
@endsection
