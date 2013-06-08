@layout('layouts/hero')

@section('content')
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
  <h1>FLL E. M.</h1>
  <p><b>E</b>vent <b>M</b>anager</p>
  <p>{{ HTML::link('config', 'Configure Torunament &raquo;', array('class' => 'btn btn-primary btn-large')); }}</p>
</div>

<!-- Example row of columns -->
<div class="row">
  <div class="span4">
    <h2>Scoring</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
  </div>
  <div class="span4">
    <h2>Rankings</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
 </div>
  <div class="span4">
    <h2>Event Admin</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  </div>
</div>
@endsection

