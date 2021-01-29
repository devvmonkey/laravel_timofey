@extends('layouts.app')

@section('content')
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

  <div class="container">

    <h2>{{ $pagedr->title }}</h2>

    <div>
      Posted by {{ $page->name }}
      <time class="timeago" datetime="{{ $page->updated_at->toIso8601String() }}"
            title="{{ $page->updated_at->toDayDateTimeString() }}">
        {{ $pagedr->updated_at->diffForHumans() }}
      </time>
    </div>

    <hr>


      {!! $pagedr->content !!}

<style>
.bkgr{
display:none;
position:absolute;
top:0;
left:0;
width:100%;
height:5000px;
background:rgba(0,0,0,0.5);
}
</style>
<button class="btn btn-primary" id="dom1">Install</button>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	<p>Enter domain name, that points to 167.172.185.0</p>
     <input type="text" class="form-control" id="domain">
      </div>
      <div class="modal-footer">
        <button type="button" id="subm" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="bkgr"></div>

<script>
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

$( "#dom1" ).click(function() {
$( ".bkgr" ).show();
$( ".modal" ).show();

  });

$( ".close" ).click(function() {
$( ".bkgr" ).hide();
$( ".modal" ).hide();

  });

$( "#subm" ).click(function() {
var dom = $( "#domain" ).val();
setCookie('dom',dom,7);
window.location.href = "http://167.172.185.0:131/install?id={{ $page->id }}";

  });





</script>

  </div>

@endsection
