<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ACN</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<script>
      function onLoad(cb) {
        if (window.addEventListener)
          window.addEventListener("load", cb, false);
        else if (window.attachEvent) {
          window.attachEvent("onload", cb);
        } else {
          window.onload = cb;
        }
      }
  </script>
  
  <style>
    .lazyload,
    .lazyloaded,
    .lazyloading {
        transition: opacity .8s ease-out, -webkit-transform .8s ease-out;
        transition: opacity .8s ease-out, transform .8s ease-out;
        transition: opacity .8s ease-out, transform .8s ease-out, -webkit-transform .8s ease-out;
        background-color: #000
    }
    .lazyload,
    .lazyloading {
        opacity: 0
    }
    .lazyloaded {
        opacity: 1
    }
  </style>
</head>
<body>
