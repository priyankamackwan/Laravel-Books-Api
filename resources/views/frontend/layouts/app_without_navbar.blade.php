<!doctype html>
<html lang="en">
    
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@yield('meta_tags')

        @include('frontend.layouts.header')
        
        @yield('styles')

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2074345372388693" crossorigin="anonymous"></script>


<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>



</head>
<body>
        
        @yield('content') 
        @include('frontend.layouts.adsense.footer')  
        @include('frontend.layouts.models')
       
        @include('frontend.layouts.footer')
        @include('frontend.layouts.script')

        @yield('script')    
             
</body>
</html>