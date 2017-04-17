<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content pricing table</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/glyphicons/56.less', '../../css/glyphicons/56.css');
        ?>
        <link rel="stylesheet" href="../../css/glyphicons/56.css">
    </head>

    <body>
        <div class="type-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4>How to use</h4>
                        <p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
                        <h4>Don't mix with other components</h4>
                        <p>Icon classes cannot be directly combined with other components. They should not be used along with other classes on the same element. Instead, add a nested <code>&lt;span&gt;</code> and apply the icon classes to the <code>&lt;span&gt;</code>.</p>
                        <h4>Only for use on empty elements</h4>
                        <p>Icon classes should only be used on elements that contain no text content and have no child elements.</p>
                        <h4>Changing the icon font location</h4>
                        <p>Bootstrap assumes icon font files will be located in the <code>../fonts/</code> directory, relative to the compiled CSS files. Moving or renaming those font files means updating the CSS in one of three ways:</p>
                        <ul>
                            <li>Change the <code>@icon-font-path</code> and/or <code>@icon-font-name</code> variables in the source Less files.</li>
                            <li>Utilize the relative URLs option provided by the Less compiler.</li>
                            <li>Change the <code>url()</code> paths in the compiled CSS.</li>
                        </ul>
                        Use whatever option best suits your specific development setup.
                        <h4>Accessible icons</h4>
                        <p>Modern versions of assistive technologies will announce CSS generated content, as well as specific Unicode characters. To avoid unintended and confusing output in screen readers (particularly when icons are used purely for decoration), we hide them with the <code>aria-hidden="true"</code>attribute.</p>
                        <p>If you're using an icon to convey meaning (rather than only as a decorative element), ensure that this meaning is also conveyed to assistive technologies – for instance, include additional content, visually hidden with the <code>.sr-only</code> class.</p>
                        <p>If you're creating controls with no other text (such as a<code>&lt;button&gt;</code> that only contains an icon), you should always provide alternative content to identify the purpose of the control, so that it will make sense to users of assistive technologies. In this case, you could add an <code>aria-label</code> attribute on the control itself.</p>
                        Copy
                        <div class="frame-copy">
                            <span>&lt;span class="glyphicon glyphicon-search"aria-hidden="true"&gt;&lt;/span&gt;</span>
                        </div>
                        <h4>Example</h4>
                        <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" aria-label="Left Align"><i class="glyphicon glyphicon-align-left" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-default" aria-label="Center Align"><i class="glyphicon glyphicon-align-center" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-default" aria-label="Right Align"><i class="glyphicon glyphicon-align-right" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-default" aria-label="Justify"><i class="glyphicon glyphicon-align-justify" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="btn-toolbar">
                            <button type="button" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                            <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                            <button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> Star</button>
                        </div>
                        Copy
                        <div class="frame-copy">
                            <span>&lt;button type="button" class="btn btn-default" aria-label="Left Align"&gt;<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="glyphicon glyphicon-align-left" aria-hidden="true"&gt;&lt;/span>
                                <br>&lt;button&gt;<br><br>
                                &lt;button type="button" class="btn btn-default btn-lg"&gt;<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="glyphicon glyphicon-star" aria-hidden="true"&gt;&lt;/span> Star
                                <br>&lt;button&gt;
                            </span>
                        </div>
                        <p style="margin: 10px 0;">An icon used in an alert to convey that it's an error message, with additional .sr-only text to convey this hint to users of assistive technologies.</p>
                        <div class="alert error-message">
                            <i class="glyphicon glyphicon-exclamation-sign"></i> Enter a valid email address
                        </div>
                        Copy
                        <div class="frame-copy">
                            <span>&lt;div class="alert alert-danger" role="alert"&gt;<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"&gt;&lt;/span><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="sr-only">Error:&lt;/span> Star<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter a valid email address
                                <br>&lt;/div&gt;
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>