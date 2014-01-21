@layout('layouts/hero')

@section('content')
<h1> Tournament Configuration</h1>

<?php
echo Form::horizontal_open();

echo Form::control_group(
  Form::label('input01', 'Tournament name'),
  Form::xlarge_text('input01'), '',
  Form::block_help('The name of the event')
);

echo Form::control_group(
  Form::label('fileInput', 'Torunament Data'),
  Form::file('fileInput'), '',
  Form::block_help('CSV export from <a target="_blank" href="https://sites.google.com/site/bryansflltools/home">Bryan Lee’s Tournament Scheduler</a>')
);

echo Form::actions(
  array(
    Button::primary_submit('Save changes'),
    Form::button('Cancel', array('href'=>'{{ URL::base() }}'))
  )
);

echo Form::close();
?>


<!-- Main hero unit for a primary marketing message or call to action -->
<!-- <div class="hero-unit">
  <h1>FLL E. M.</h1>
  <p><b>E</b>vent <b>M</b>anager</p>
  <p><a href="#" class="btn btn-primary btn-large">Configure Torunament &raquo;</a></p>
</div> -->

<!-- Example row of columns -->
<!-- <div class="row">
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
</div> -->
@endsection


