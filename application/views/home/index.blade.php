@layout('layouts/hero')

@section('content')
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
  <h1>FLL E. M.</h1>
  <p><b>E</b>vent <b>M</b>anager</p>
  <p>{{ HTML::link('config', 'Configure Tournament &raquo;', array('class' => 'btn btn-primary btn-large')); }}</p>
  <p>{{ HTML::link('user/volunteer', 'Volunteer &raquo;', array('class' => 'btn btn-primary btn-large')); }}</p>
</div>

<!-- Example row of columns -->
<div class="row"> <!-- @todo This needs to be generated from the database -->
  <div class="span4">
    <h2>Past Events</h2>
    <ul>
      <li><a href="#">Maine State Championship 2012</a></li>
    </ul>
  </div>
  <div class="span4">
    <h2>Current Events</h2>
    <li>None at the moment</li>
 </div>
  <div class="span4">
    <h2>Future Events</h2>
    <ul>
      <li><a href="#">South Portland</a></li>
      <li><a href="#">Ellsworth</a></li>
      <li><a href="#">Oakland</a></li>
      <li><a href="#">Maine State Championship 2013</a></li>
    </ul>
  </div>
</div>
@endsection

