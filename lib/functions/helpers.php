<?php

function __dp_return_false() {
	return false;
}

function __dp_return_null() {
	return null;
}

function dp_demodata() { ?>
	
      <div class="demo-headline">
        <h1 class="demo-logo">
          <div class="logo"></div>
          Flat UI
          <small>Free Web User Interface Kit</small>
        </h1>
      </div> <!-- /demo-headline -->

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

      <h3 class="demo-panel-title">Menu</h3>
      <div class="row demo-row">
        <div class="span9">
          <div class="navbar navbar-inverse">
            <div class="navbar-inner">
              <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse">
                  <ul class="nav">
                    <li>
                      <a href="#">
                        Menu Item
                        <span class="navbar-unread">1</span>
                      </a>
                    </li>
                    <li class="active">
                      <a href="#">
                        Messages
                        <span class="navbar-unread">1</span>
                      </a>
                      <ul>
                        <li><a href="#">Element One</a></li>
                        <li>
                          <a href="#">Sub menu</a>
                          <ul>
                            <li><a href="#">Element One</a></li>
                            <li><a href="#">Element Two</a></li>
                            <li><a href="#">Element Three</a></li>
                          </ul> <!-- /Sub menu -->
                        </li>
                        <li><a href="#">Element Three</a></li>
                      </ul> <!-- /Sub menu -->
                    </li>
                    <li>
                      <a href="#">
                        About Us
                        <span class="navbar-unread">1</span>
                      </a>
                    </li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
        </div>
        <div class="span3">
          <select value="X-Men" class="span3" tabindex="1" name="herolist">
            <option value="0">Choose hero</option>
            <option value="1">Spider Man</option>
            <option value="2">Wolverine</option>
            <option value="3">Captain America</option>
            <option value="X-Men" selected="selected">X-Men</option>
            <option value="Crocodile">Crocodile</option>
          </select>
        </div>
      </div> <!-- /row -->

      <h3 class="demo-panel-title">Input</h3>
      <div class="row">
        <div class="span3">
          <input type="text" value="" placeholder="Inactive" class="span3" />
        </div>
        <div class="span3">
          <div class="control-group error">
            <input type="text" value="Error" class="span3" />
          </div>
        </div>
        <div class="span3">
          <div class="control-group success">
            <input type="text" value="Success" class="span3" />
          </div>
        </div>
        <div class="span3">
          <input type="text" value="Disabled" disabled="disabled" class="span3" />
        </div>
      </div> <!-- /row -->

      <div class="row">
        <div class="span5">
          <h3 class="demo-panel-title">Progress bars &amp; Sliders</h3>
          <div class="progress">
            <div class="bar" style="width: 45%;"></div>
          </div>
          <br/>
          <div class="progress">
            <div class="bar" style="width: 40%;"></div>
            <div class="bar bar-warning" style="width: 10%;"></div>
            <div class="bar bar-danger" style="width: 10%;"></div>
            <div class="bar bar-success" style="width: 10%;"></div>
            <div class="bar bar-info" style="width: 10%;"></div>
          </div>
          <br/>
          <div id="slider" class="ui-slider">
            <div class="ui-slider-segment"></div>
            <div class="ui-slider-segment"></div>
            <div class="ui-slider-segment"></div>
          </div>
        </div> <!-- /sliders -->

        <div class="span6 offset1">
          <h3 class="demo-panel-title">Navigation</h3>
          <div class="row demo-navigation">
            <div class="span3">
              <div class="btn-toolbar">
                <div class="btn-group">
                  <a class="btn btn-primary" href="#"><i class="fui-time-16"></i></a>
                  <a class="btn btn-primary" href="#"><i class="fui-camera-16"></i></a>
                  <a class="btn btn-primary active" href="#"><i class="fui-heart-16"></i></a>
                  <a class="btn btn-primary" href="#"><i class="fui-eye-16"></i></a>
                </div>
              </div> <!-- /toolbar -->
            </div>
            <div class="span3 demo-pager">
              <ul class="pager">
                <li class="previous">
                  <a href="#">
                    <img src="images/pager/previous.png" />
                    All messages
                  </a>
                </li>
                <!-- <li class="pager-center">Center</li> -->
                <li class="next">
                  <a href="#">
                    <img src="images/pager/next.png" />
                  </a>
                </li>
              </ul> <!-- /pager -->
            </div>
          </div> <!-- /demo-navigation -->

          <div class="pagination">
            <ul>
              <li class="previous"><a href="#"><img src="images/pager/previous.png" /></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#">7</a></li>
              <li><a href="#">8</a></li>
              <li><a href="#">9</a></li>
              <li class="next"><a href="#"><img src="images/pager/next.png" /></a></li>
            </ul>
          </div>
        </div> <!-- /navigation -->
      </div> <!-- /row -->

      <div class="row">
        <div class="span3">
          <h3 class="demo-panel-title">Checkboxes</h3>
          <label class="checkbox" for="checkbox1">
            <input type="checkbox" value="" id="checkbox1">
            Unchecked
          </label>
          <label class="checkbox" for="checkbox2">
            <input type="checkbox" checked="checked" value="" id="checkbox2">
            Checked
          </label>

          <label class="checkbox" for="checkbox3">
            <input type="checkbox" value="" id="checkbox3" disabled="">
            Disabled unchecked
          </label>
          <label class="checkbox" for="checkbox4">
            <input type="checkbox" checked="checked" value="" id="checkbox4" disabled="">
            Disabled checked
          </label>
        </div> <!-- /checkboxes span3 -->

        <div class="span3">
          <h3 class="demo-panel-title">Radio Buttons</h3>
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
            Radio is off
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" checked="">
            Radio is on
          </label>

          <label class="radio">
            <input type="radio" name="optionsRadiosDisabled" id="optionsRadios3" value="option2" disabled="">
            Disabled radio is off
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadiosDisabled" id="optionsRadios4" value="option2" checked="" disabled="">
            Disabled radio is on
          </label>
        </div> <!-- /radios span3 -->

        <div class="span3">
          <h3 class="demo-panel-title">Toggles</h3>

          <table width="100%">
            <tr>
              <td width="50%">
                <div class="toggle">
                  <label class="toggle-radio" for="toggleOption2">ON</label>
                  <input type="radio" name="toggleOptions" id="toggleOption1" value="option1" checked="checked">
                  <label class="toggle-radio" for="toggleOption1">OFF</label>
                  <input type="radio" name="toggleOptions" id="toggleOption2" value="option2">
                </div>
              </td>

              <td>
                <div class="toggle">
                  <label class="toggle-radio" for="toggleOption4">ON</label>
                  <input type="radio" name="toggleOptions2" id="toggleOption3" value="option3">
                  <label class="toggle-radio" for="toggleOption3">OFF</label>
                  <input type="radio" name="toggleOptions2" id="toggleOption4" value="option4" checked="checked">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="toggle toggle-icon">
                  <label class="toggle-radio fui-checkmark-16" for="toggleOption6"></label>
                  <input type="radio" name="toggleOptions3" id="toggleOption5" value="option5" checked="checked">
                  <label class="toggle-radio fui-cross-16" for="toggleOption5"></label>
                  <input type="radio" name="toggleOptions3" id="toggleOption6" value="option6">
                </div>
              </td>

              <td>
                <div class="toggle toggle-icon">
                  <label class="toggle-radio fui-checkmark-16" for="toggleOption8"></label>
                  <input type="radio" name="toggleOptions4" id="toggleOption7" value="option7">
                  <label class="toggle-radio fui-cross-16" for="toggleOption7"></label>
                  <input type="radio" name="toggleOptions4" id="toggleOption8" value="option8" checked="checked">
                </div>
              </td>
            </tr>
          </table>
        </div> <!-- /toggles span3 -->

        <div class="span3">
          <h3 class="demo-panel-title">Tags</h3>
          <input name="tagsinput" id="tagsinput" class="tagsinput" value="Clean,Fresh,Modern,Unique" />
        </div>
      </div> <!-- /row -->

      <div class="row">
        <div class="span3">
          <h3 class="demo-panel-title">Share</h3>
          <div class="share mrl">
            <ul>
              <li>
                <label class="share-label" for="share-toggle2">Facebook</label>
                <div class="toggle">
                  <label class="toggle-radio" for="share-toggle2">ON</label>
                  <input type="radio" name="share-toggles" id="share-toggle2" value="toggle1">
                  <label class="toggle-radio" for="share-toggle1">OFF</label>
                  <input type="radio" name="share-toggles" id="share-toggle1" value="toggle2" checked="checked">
                </div>
              </li>
              <li>
                <label class="share-label" for="share-toggle4">Twitter</label>
                <div class="toggle">
                  <label class="toggle-radio" for="share-toggle4">ON</label>
                  <input type="radio" name="share-toggles2" id="share-toggle4" value="toggle1" checked="checked">
                  <label class="toggle-radio" for="share-toggle3">OFF</label>
                  <input type="radio" name="share-toggles2" id="share-toggle3" value="toggle2">
                </div>
              </li>
              <li>
                <label class="share-label" for="share-toggle6">Pinterest</label>
                <div class="toggle">
                  <label class="toggle-radio" for="share-toggle6">ON</label>
                  <input type="radio" name="share-toggles3" id="share-toggle6" value="toggle1">
                  <label class="toggle-radio" for="share-toggle5">OFF</label>
                  <input type="radio" name="share-toggles3" id="share-toggle5" value="toggle2" checked="checked">
                </div>
              </li>
            </ul>
            <a href="#" class="btn btn-primary btn-block btn-large">Share</a>
          </div> <!-- /share -->
        </div>

        <div class="span3">
          <div class="demo-tooltips">
            <h3 class="demo-panel-title">Tooltips</h3>
            <p align="center" data-toggle="tooltip" data-placement="bottom" title="Tooltip under the text."></p>
            <p align="center" data-toggle="tooltip" title="Here is the sample of talltooltip that contains three lines or more. More."></p>
          </div>
        </div> <!-- /span3 with tooltips -->

        <div class="span4">
          <div class="demo-text-box prl">
            <h3 class="demo-panel-title">Text Box</h3>
            <p><strong>Lato</strong> is free web-font designed by <strong>Lukasz&nbsp;Dziedzic</strong> from Warsaw.</p>
            <p>Here you can feel the color, size, line height and margins between paragraphs. Don’t forget to underline 
              your links, they are an important <a href="#">visual marker</a> for users.</p>
            <p>Also, to attract attention you can mark some&nbsp;important words using <strong>bold weights</strong>.</p>
          </div>
        </div> <!-- /text box -->

        <div class="span2">
          <h3 class="demo-panel-title demo-headings">Headings</h3>
          <h1>Header</h1>
          <h2>Header 2</h2>
          <h3>Header 3</h3>
          <h4>Header 4</h4>
          <h5>Header 5</h5>
          <h6>Header 6</h6>
        </div> <!-- /headings -->
      </div> <!-- /row -->
	
<?php }