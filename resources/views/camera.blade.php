<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#90AACB"/>
    <meta name="description" content="My first app with camera in laravel and webapp progressive"/>
    <link rel="apple-touch-icon" href="{{ asset('build/assets/images/ios/40.png') }}"/>
    <title>Camera Take a snapshot</title>
    <link rel="manifest" href="{{ asset('build/manifest.webmanifest') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Laravel webcam capture image and save from camera</h1>
        <form method="POST" action="{{ route('camera.capture') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div id="my_camera"></div>
                    <br/>
                    <input type=button value="Take Snapshot" id="takeSnapshot">
                    <input type="hidden" name="image" class="image-tag">
                </div>
                <div class="col-md-6">
                    <div id="results">Your captured image will appear here...</div>
                </div>
                <div class="col-md-12 text-center">
                    <br/>
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>  
    
    <script src="{{ asset('build/registerSW.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    @vite('resources/js/app.js')
    
</body>
</html>