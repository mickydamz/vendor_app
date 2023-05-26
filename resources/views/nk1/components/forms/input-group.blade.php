@extends('nk1/layouts/nk5layout')

@section('content')
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                            <h2 class="nk-block-title fw-normal">Input Group</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">Examples and usage guidelines for input group. Extend form controls by adding text, buttons, or button groups on either side of text inputs, custom selects, and custom file inputs.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Basic example</h4>
                                                <div class="nk-block-des">
                                                    <p>Place one add-on or button on either side of an input. You may also place one on both sides of an input. We do not support multiple form-controls in a single input group and <code class="code-tag">&lt;label&gt;</code>s must come outside the input group.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Username" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Recipient's username" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="basic-url">Your URL</label>
                                                            <div class="form-control-wrap">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="basic-url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">$</span>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">With textarea</span>
                                                                </div>
                                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#BasicInputGroup" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="BasicInputGroup">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; required&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&apos;s username&quot; required&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@ex ample.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-group&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;basic-url&quot;&gt;Your URL&lt;/label&gt;
    &lt;div class=&quot;form-control-wrap&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-prepend&quot;&gt;
                &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
        &lt;/div&gt;
        &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Sizing</h4>
                                                <div class="nk-block-des">
                                                    <p>Add the relative form sizing classes to the .input-group itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group input-group-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#InputGroupSizes" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="InputGroupSizes">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group input-group-sm&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Small&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Default&quot; aria-describedby=&quot;inputGroup-sizing-default&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group input-group-lg&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Large&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Checkboxes and radios</h4>
                                                <div class="nk-block-des">
                                                    <p>Place any checkbox or radio option within an input group’s addon instead of text.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <input type="checkbox">
                                                                    </div>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <input type="radio">
                                                                    </div>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#CheckRadioinputGroup" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="CheckRadioinputGroup">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;div class=&quot;input-group-text&quot;&gt;
                &lt;input type=&quot;checkbox&quot;&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;div class=&quot;input-group-text&quot;&gt;
                &lt;input type=&quot;radio&quot;;&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Multiple inputs</h4>
                                                <div class="nk-block-des">
                                                    <p>While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input&gt;</code>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">First and last name</span>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#MultipleInputGroup" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="MultipleInputGroup">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Multiple addons</h4>
                                                <div class="nk-block-des">
                                                    <p>Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">$</span>
                                                                    <span class="input-group-text">0.00</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">$</span>
                                                                    <span class="input-group-text">0.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#MultipleAddonsGroup" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="MultipleAddonsGroup">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Button addons</h4>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Recipient's username">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Recipient's username">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#ButtonAddonsCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="ButtonAddonsCode">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&apos;s username&quot;&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&apos;s username&quot;&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Buttons with dropdowns</h4>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim dropdown-toggle" data-toggle="dropdown"><span>Dropdown</span><em class="icon mx-n1 ni ni-chevron-down"></em></button>
                                                                    <div class="dropdown-menu">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#">Action Settings</a></li>
                                                                            <li><a href="#">Push Notification</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Login Activity</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary btn-dim dropdown-toggle" data-toggle="dropdown"><span>Dropdown</span><em class="icon mx-n1 ni ni-chevron-down"></em></button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#">Action Settings</a></li>
                                                                            <li><a href="#">Push Notification</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Login Activity</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#ButtonsWithDropdownCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="ButtonsWithDropdownCode">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;&lt;span&gt;Dropdown&lt;/span&gt;&lt;em class=&quot;icon mx-n1 ni ni-chevron-down&quot;&gt;&lt;/em&gt;&lt;/button&gt;
            &lt;div class=&quot;dropdown-menu&quot;&gt;
                &lt;ul class=&quot;link-list-opt no-bdr&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action Settings&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Push Notification&lt;/a&gt;&lt;/li&gt;
                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Login Activity&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;&lt;span&gt;Dropdown&lt;/span&gt;&lt;em class=&quot;icon mx-n1 ni ni-chevron-down&quot;&gt;&lt;/em&gt;&lt;/button&gt;
            &lt;div class=&quot;dropdown-menu dropdown-menu-right&quot;&gt;
                &lt;ul class=&quot;link-list-opt no-bdr&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action Settings&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Push Notification&lt;/a&gt;&lt;/li&gt;
                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Login Activity&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Segmented buttons</h4>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Action</button>
                                                                    <button class="btn btn-icon btn-outline-primary btn-dim dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                                                        <em class="icon ni ni-chevron-down"></em><span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#">Action Settings</a></li>
                                                                            <li><a href="#">Push Notification</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Login Activity</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary btn-dim">Action</button>
                                                                    <button class="btn btn-icon btn-outline-primary btn-dim dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                                                        <em class="icon ni ni-chevron-down"></em><span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#">Action Settings</a></li>
                                                                            <li><a href="#">Push Notification</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Login Activity</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#SegmentedButtonAddonsCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="SegmentedButtonAddonsCode">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Action&lt;/button&gt;
            &lt;button class=&quot;btn btn-icon btn-outline-primary btn-dim dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot;&gt;
                &lt;em class=&quot;icon ni ni-chevron-down&quot;&gt;&lt;/em&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class=&quot;dropdown-menu&quot;&gt;
                &lt;ul class=&quot;link-list-opt no-bdr&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action Settings&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Push Notification&lt;/a&gt;&lt;/li&gt;
                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Login Activity&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Action&lt;/button&gt;
            &lt;button class=&quot;btn btn-icon btn-outline-primary btn-dim dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot;&gt;
                &lt;em class=&quot;icon ni ni-chevron-down&quot;&gt;&lt;/em&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class=&quot;dropdown-menu&quot;&gt;
                &lt;ul class=&quot;link-list-opt no-bdr&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action Settings&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Push Notification&lt;/a&gt;&lt;/li&gt;
                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Login Activity&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Custom select</h4>
                                                <div class="nk-block-des">
                                                    <p>Input groups include support for custom selects inputs. Browser default versions of these are not supported.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                                </div>
                                                                <select class="custom-select" id="inputGroupSelect01">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <select class="custom-select" id="inputGroupSelect02">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <div class="input-group-append">
                                                                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                                <select class="custom-select" id="inputGroupSelect03">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <select class="custom-select" id="inputGroupSelect04">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#CustomSelectInputGroupCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="CustomSelectInputGroupCode">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
        &lt;/div&gt;
        &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect02&quot;&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect02&quot;&gt;Options&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect03&quot;&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect04&quot;&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Custom file input</h4>
                                                <div class="nk-block-des">
                                                    <p>Input groups include support for custom file inputs. Browser default versions of these are not supported.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="">Upload</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile03">
                                                                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary btn-dim">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#CustomFileInputGrouoCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="CustomFileInputGrouoCode">
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;Upload&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;custom-file&quot;&gt;
            &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile01&quot;&gt;
            &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile01&quot;&gt;Choose file&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;custom-file&quot;&gt;
            &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile02&quot;&gt;
            &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile02&quot;&gt;Choose file&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;&quot;&gt;Upload&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;custom-file&quot;&gt;
            &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile03&quot;&gt;
            &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile03&quot;&gt;Choose file&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
    &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;custom-file&quot;&gt;
            &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile04&quot;&gt;
            &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile04&quot;&gt;Choose file&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
            &lt;button class=&quot;btn btn-outline-primary btn-dim&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a herf="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    @endsection