<?php

function __dp_return_false() {
	return false;
}

function __dp_return_null() {
	return null;
}

function dp_demodata() { ?>

<!--
      <div class="demo-headline">
        <h1 class="demo-logo">
          <div class="logo"></div>
          Flat UI
          <small>Free Web User Interface Kit</small>
        </h1>
      </div>
-->

	<div class="chapters-header">
		<img class="chapters-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm.png" />
		<div class="chapters-header-title">
			<h2 class="chapters-tagline">For wherever you roam...</h1>
			<h1 class="chapters-page-title">in Richmond</h1>
		</div>
	</div>

      <h1>Basic elements</h1>
      <h3 class="demo-panel-title">Buttons</h3>

      <div class="row demo-row">
        <div class="span3">
          <a href="#" class="btn btn-large btn-block">Default Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-primary">Primary Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-info">Info Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-danger">Danger Button</a>
        </div>
      </div> <!-- /row -->

      <div class="row demo-row">
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-success">Success Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-warning">Warning Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-inverse">Inverse Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block disabled">Disabled Button</a>
        </div>
      </div> <!-- /row -->

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="span6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
	</div>
<?php }