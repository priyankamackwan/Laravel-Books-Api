<!DOCTYPE html>
<html lang="en">
<head>
  <title>Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<style>
    body{
        margin-top:8% !important;
    }
    .vl {
    border-left: 6px solid black;
    height: 2000px;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 0;
    }
    .pd{
        padding: 0px 0px 0px 60px !important;
    }
</style>
</head>
<body>

<h1>API Details</h1>
<div class="vl"></div>

<div class="row">
    <div class="col-md-6 pd">
        <h3><u>API Param</u></h3>
        <?php $url =  "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>

        <code class="prettyprint">{{ $url }}<br>

        Method : Get</code>
    </div>
    <div class="col-md-6 pd">
        <h3><u>API Responce</u></h3>
        <p>
        This editor is read-only (mode='viewer').
        </p>
        <div id="jsoneditor"></div>


        <input type="hidden" value="{{ $books }}" class="all">

    </div>
</div>

<style type="text/css">
    #jsoneditor {
      width: 500px;
      height: 500px;
    }
  </style>

  <link href="{{ asset('vendor/laravel-admin-ext/json-editor/jsoneditor-6.2.1/dist/jsoneditor.min.css')}}" rel="stylesheet" type="text/css">
  <script src="{{ asset('vendor/laravel-admin-ext/json-editor/jsoneditor-6.2.1/dist/jsoneditor.min.js')}}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>
    const container = document.getElementById('jsoneditor')

    const options = {
        mode: 'view'
    }

    let data = $('.all').val();
    let format = JSON.parse("[" + data + "]");

    const json = {
        "Array": format,
    }

  const editor = new JSONEditor(container, options, json)
</script>

</body>
</html>
