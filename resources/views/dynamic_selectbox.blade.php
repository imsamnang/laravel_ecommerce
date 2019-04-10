<html>
<head>
    <title>How To Create Dependent Drop down in Laravel 5.6</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <style>
   #live_loading{
   visibility:hidden;
   }
   </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading"><h2>How To Create Dependent Drop down in Laravel(Teacher & Student)</h2></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group-sm">
                                <div class="col-md-6">
                                    <select name="teacher" class="form-control">
                                        <option value="">--Select Teacher--</option>
                                        @foreach ($teachers as $teacher => $value)
                                        <option value="{{ $teacher }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="student" class="form-control">
                                     <option>--Student--</option>
                                 </select>
                             </div><div class="col-md-2"><span id="live_loading"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
                         </div>
                     </form>
                 </div>
                 <div class="panel-footer">- By: [Jaydeep Gondaliya]</div>
             </div>
         </div>
     </div>
 </div>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>