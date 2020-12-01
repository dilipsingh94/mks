<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <meta name="facebook-domain-verification" content="ixmybugnoi7z3gelvw3j8xzk5vgz0m" />
            
            <meta property="og:url" content="https://www.mksnews.ind.in/{{ url('blog/'.$post->id.'/view') }}" />
            <meta property="og:type" content="article" />
            <meta property="og:title" content="{{ $post->posttitle }}" />
            <meta property="og:description" content="{{ $post->description }}" />
            <meta property="og:image" content="{{ asset('uploads/'.$post->thumbnail) }}" />

            <link rel="icon" type="image/png/svg" sizes="20x20" href="{{ asset('./mks-resources/symbol-icon.png')}}">
            <title>Mks News</title>

            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <link rel="stylesheet" href="{{ mix('css/mks_styles.css') }}">
            
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
            
            <link href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
            
        </head>
    <body>