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
                                            <h2 class="nk-block-title fw-normal">Tabs Nav</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">Use the Bootstrap tab javascript plugin to extend navigational tabs and pills to create tabbable panes of local content, even via dropdown menus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Basis Examples</h4>
                                                <div class="nk-block-des">
                                                    <p>You can simply activate a tab or pill navigation without writing any JavaScript by simply specifying <code>data-toggle="tab"</code> or <code>data-toggle="pill"</code> on an element. Here is some basic tab component that you can use.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem1">Personal</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem2">Security</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem3">Notifications</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem4">Connect</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem1">
                                                        <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem2">
                                                        <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem3">
                                                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem4">
                                                        <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#Tab1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="Tab1">
&lt;ul class=&quot;nav nav-tabs&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem1&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem2&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem3&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem4&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;tabItem1&quot;&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem2&quot;&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem3&quot;&gt;
        &lt;p&gt;contnet&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem4&quot;&gt;
        &lt;p&gt;contnet&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">With Icon</h4>
                                                <div class="nk-block-des">
                                                    <p>You can simply activate a tab or pill navigation without writing any JavaScript by simply specifying <code>data-toggle="tab"</code> or <code>data-toggle="pill"</code> on an element. Here is some basic tab component that you can use.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Personal</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>Security</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-bell"></em><span>Notifications</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem8"><em class="icon ni ni-link"></em><span>Connect</span></a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem5">
                                                        <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem6">
                                                        <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem7">
                                                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem8">
                                                        <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#Tab2" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="Tab2">
&lt;ul class=&quot;nav nav-tabs&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem5&quot;&gt;&lt;em class=&quot;icon ni ni-user&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem6&quot;&gt;&lt;em class=&quot;icon ni ni-lock-alt&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem7&quot;&gt;&lt;em class=&quot;icon ni ni-bell&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem8&quot;&gt;&lt;em class=&quot;icon ni ni-link&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;tabItem5&quot;&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem6&quot;&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem7&quot;&gt;
        &lt;p&gt;contnet&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem8&quot;&gt;
        &lt;p&gt;contnet&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Alternet Tab style</h4>
                                                <div class="nk-block-des">
                                                    <p>You can simply activate add <code>.nav-tabs-s2</code> with <code>.nav-tabs</code> class to make an alternet styled tab.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs nav-tabs-s2 mt-n2">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem9">Personal</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem10">Security</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem11">Notifications</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem12">Connect</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content text-center">
                                                    <div class="tab-pane active" id="tabItem9">
                                                        <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem10">
                                                        <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem11">
                                                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem12">
                                                        <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#Tab3" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="Tab3">
&lt;ul class=&quot;nav nav-tabs nav-tabs-s2&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem9&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem10&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem11&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem12&quot;&gt;nav&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;tabItem9&quot;&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem10&quot;&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem11&quot;&gt;
        &lt;p&gt;contnet&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem12&quot;&gt;
        &lt;p&gt;contnet&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Vertical Tab style</h4>
                                                <div class="nk-block-des">
                                                    <p>You can simply activate add <code>.link-list-menu</code> and some utility class with <code>.nav</code> class to make a Vertical tab. please check those code given below</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-gs">
                                                    <div class="col-md-4">
                                                        <ul class="nav link-list-menu border border-light round m-0">
                                                            <li>
                                                                <a class="active" data-toggle="tab" href="#tabItem13">Personal</a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#tabItem14">Security</a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#tabItem15">Notifications</a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#tabItem16">Connect</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabItem13">
                                                                <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                                                                <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem14">
                                                                <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                                                                <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem15">
                                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem16">
                                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#Tab4" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="Tab4">
&lt;div class=&quot;row g-gs&quot;&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;ul class=&quot;nav link-list-menu border border-light round m-0&quot;&gt;
            &lt;li&gt;
                &lt;a class=&quot;active&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem13&quot;&gt;nav&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a data-toggle=&quot;tab&quot; href=&quot;#tabItem14&quot;&gt;nav&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a data-toggle=&quot;tab&quot; href=&quot;#tabItem15&quot;&gt;nav&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a data-toggle=&quot;tab&quot; href=&quot;#tabItem16&quot;&gt;nav&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-8&quot;&gt;
        &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div class=&quot;tab-pane active&quot; id=&quot;tabItem13&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem14&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem15&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem16&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Vertical Tab style - With Icon</h4>
                                                <div class="nk-block-des">
                                                    <p>You can simply activate add <code>.link-list-menu</code> and some utility class with <code>.nav</code> class to make a Vertical tab. please check those code given below</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-gs">
                                                    <div class="col-md-4">
                                                        <ul class="nav link-list-menu border border-light round m-0">
                                                            <li>
                                                                <a class="active" data-toggle="tab" href="#tabItem17"><em class="icon ni ni-user"></em><span>Personal</span></a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#tabItem18"><em class="icon ni ni-lock-alt"></em><span>Security</span></a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#tabItem19"><em class="icon ni ni-bell"></em><span>Notifications</span></a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#tabItem20"><em class="icon ni ni-link"></em><span>Connect</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabItem17">
                                                                <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                                                                <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem18">
                                                                <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                                                                <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem19">
                                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem20">
                                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#Tab5" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="Tab5">
&lt;div class=&quot;row g-gs&quot;&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;ul class=&quot;nav link-list-menu border border-light round m-0&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem17&quot;&gt;&lt;em class=&quot;icon ni ni-user&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem18&quot;&gt;&lt;em class=&quot;icon ni ni-lock-alt&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem19&quot;&gt;&lt;em class=&quot;icon ni ni-bell&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#tabItem20&quot;&gt;&lt;em class=&quot;icon ni ni-link&quot;&gt;&lt;/em&gt;&lt;span&gt;nav&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-8&quot;&gt;
        &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div class=&quot;tab-pane active&quot; id=&quot;tabItem17&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem18&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem19&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabItem20&quot;&gt;
                &lt;p&gt;contnet&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div><!-- .code-block -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
@endsection