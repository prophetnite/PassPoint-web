@extends('layouts.master')

@section('content')

    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="pull-right text-right" style="line-height: 14px">
                            <small>UI Elements<br>General<br> <span class="c-white">Typography</span></small>
                        </div>
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-pen"></i>
                        </div>
                        <div class="header-title">
                            <h3>Typography</h3>
                            <small>
                                The basic elements of typography
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Headings
                        </div>
                        <div class="panel-body">
                            <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td><h1>h1. Bootstrap heading</h1></td>
                                    <td class="type-info">Semibold 36px</td>
                                </tr>
                                <tr>
                                    <td><h2>h2. Bootstrap heading</h2></td>
                                    <td class="type-info">Semibold 30px</td>
                                </tr>
                                <tr>
                                    <td><h3>h3. Bootstrap heading</h3></td>
                                    <td class="type-info">Semibold 24px</td>
                                </tr>
                                <tr>
                                    <td><h4>h4. Bootstrap heading</h4></td>
                                    <td class="type-info">Semibold 18px</td>
                                </tr>
                                <tr>
                                    <td><h5>h5. Bootstrap heading</h5></td>
                                    <td class="type-info">Semibold 14px</td>
                                </tr>
                                <tr>
                                    <td><h6>h6. Bootstrap heading</h6></td>
                                    <td class="type-info">Semibold 12px</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Secondary Headings
                        </div>
                        <div class="panel-body">
                            <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td><h1>h1. <small>Secondary text</small></h1></td>
                                </tr>
                                <tr>
                                    <td><h2>h2. <small>Secondary text</small></h2></td>
                                </tr>
                                <tr>
                                    <td><h3>h3. <small>Secondary text</small></h3></td>
                                </tr>
                                <tr>
                                    <td><h4>h4. <small>Secondary text</small></h4></td>
                                </tr>
                                <tr>
                                    <td><h5>h5. <small>Secondary text</small></h5></td>
                                </tr>
                                <tr>
                                    <td><h6>h6. <small>Secondary text</small></h6></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Body copy
                        </div>
                        <div class="panel-body">
                            <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
                            <div class="bs-example">
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Unstyled list
                        </div>
                        <div class="panel-body">
                            <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                            <div class="bs-example">
                                <ul class="list-unstyled">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                        </ul>
                                    </li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Unordered list
                        </div>
                        <div class="panel-body">
                            <p>A list of items in which the order does not explicitly matter.</p>
                            <div class="bs-example">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Ordered list
                        </div>
                        <div class="panel-body">
                            <p>A list of items in which the order does explicitly matter.</p>
                            <div class="bs-example">
                                <ol>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Alignment classes
                        </div>
                        <div class="panel-body">
                            <p>Easily realign text to components with text alignment classes.</p>
                            <div class="bs-example" >
                                <p class="text-left">Left aligned text.</p>
                                <p class="text-center">Center aligned text.</p>
                                <p class="text-right">Right aligned text.</p>
                                <p class="text-justify">Justified text.</p>
                                <p class="text-nowrap">No wrap text.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Transformation classes
                        </div>
                        <div class="panel-body">
                            <p>Transform text in components with text capitalization classes.</p>
                            <div class="bs-example">
                                <p>Normal text.</p>
                                <p class="text-lowercase">Lowercased text.</p>
                                <p class="text-uppercase">Uppercased text.</p>
                                <p class="text-capitalize">Capitalized text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Addresses
                        </div>
                        <div class="panel-body">
                            <p>Present contact information for the nearest ancestor or the entire body of work. </p>
                            <div class="bs-example">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    1355 Market Street, Suite 900<br>
                                    San Francisco, CA 94103<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                                <address>
                                    <strong>Full Name</strong><br>
                                    <a href="mailto:#">first.last@example.com</a>
                                </address>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Blockquotes
                        </div>
                        <div class="panel-body">
                            <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
                            <p>Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
                            <div class="bs-example">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Description
                        </div>
                        <div class="panel-body">
                            <p>A list of terms with their associated descriptions.</p>
                            <div class="bs-example">
                                <dl>
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Horizontal description
                        </div>
                        <div class="panel-body">
                            <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
                            <div class="bs-example" data-example-id="horizontal-dl">
                                <dl class="dl-horizontal">
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                    <dt>Felis euismod semper eget lacinia</dt>
                                    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Small text
                        </div>
                        <div class="panel-body">
                            <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent.</p>
                            <div class="bs-example">
                                <p><small>This line of text is meant to be treated as fine print.</small></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Marked text
                        </div>
                        <div class="panel-body">
                            <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
                            <div class="bs-example">
                                <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Deleted text
                        </div>
                        <div class="panel-body">
                            <p>For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.</p>
                            <div class="bs-example">
                                <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Underlined text
                        </div>
                        <div class="panel-body">
                            <p>To underline text use the <code>&lt;u&gt;</code> tag.</p>
                            <div class="bs-example">
                                <p><u>This line of text will render as underlined</u></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>





        </div>
    </section>
    <!-- End main content-->

    @endsection