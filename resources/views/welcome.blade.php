<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holili Farm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
        <a href="#home"><img src="/image/logo1x2.png" alt="Logo Akhwat Computer Jember"></a>
        </div>
        <div class="nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#product">Produk</a></li>
                <li><a href="#service">Artikel</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
       
        </div>
        
    </header>
    <section id="home">
        <div class="row_home">
            <div class="home_content_left">
                <h1>Holili Farm</h1>
                <p>Menyediakan berbagai model laptop, Aksesoris dan Jasa service terpercaya.</p>
                <a >Lihat semua produk</a>
            </div>
            <div class="home_content_right">
                <div class="slider">
                    <div class="slides">
                         <div class="slide"><img src="{{ asset('image/foto1.png') }}" alt="Image 1"></div>
                         <div class="slide"><img src="{{ asset('image/foto4.png') }}" alt="Image 2"></div>
                         <div class="slide"><img src="{{ asset('image/service.png') }}" alt="Image 3"></div>
                    </div>
                    <div class="dots-container">
                    <div class="dots">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </section>