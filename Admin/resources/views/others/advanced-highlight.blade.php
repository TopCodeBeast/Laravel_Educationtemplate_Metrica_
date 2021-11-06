@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- prism css -->
 <link href="{{ URL::asset('plugins/prism/prism.css')}}" rel="stylesheet" type="text/css">
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                           
                             @component('common-components.breadcrumb')
                                 @slot('title') Highlight @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent


                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card ">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">HTML Highlight</h4>
                                    <p class="text-muted mb-4">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind.</p>

                                    <pre class=" language-markup"><code class=" language-markup">
&lt;html&gt;
&lt;!-- this is a comment --&gt;
    &lt;head&gt;
        &lt;title&gt;HTML Example&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        The indentation tries to be &lt;em&gt;somewhat &amp;quot;do what
        I mean&amp;quot;&lt;/em&gt;... but might not match your style.
    &lt;/body&gt;
&lt;/html&gt;
                                    </code></pre>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Css Highlight</h4>
                                    <p class="text-muted mb-4">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind.</p>

<pre class="line-numbers">
<code class="language-css">
.example {
    font-family: Georgia, Times, serif;
    color: #555;
    text-align: center;
}
</code>
</pre>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
<!-- Prism js -->
<script src="{{ URL::asset('plugins/prism/prism.js')}}"></script>
@stop