<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .content {
      text-align: center;
      margin: 20px;
    }

    .travel-text h1, .tickets-text h2 {
      font-size: 2em;
      margin-bottom: 10px;
    }

    .travel-text p, .tickets-text p {
      font-size: 1.2em;
      max-width: 900px;
      margin: 0 auto;
    }

    .image-slider {
      position: relative;
      max-width: 800px;
      margin: 20px auto;
      overflow: hidden;
    }

    .slider-container {
      position: relative;
    }

    .slider-images img {
      width: 100%;
      display: none;
    }

    .arrows {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .arrow-left, .arrow-right {
      background-color: transparent;
      color: black;
      border: none;
      font-size: 2em;
      padding: 10px;
      cursor: pointer;
    }

    .tickets-text {
      display: flex;
      justify-content: space-between;
      margin-top: 40px;
      flex-wrap: wrap;
    }

    .left-section, .right-section {
      width: 48%;
      text-align: left;
    }

    .ticket-image {
      text-align: center;
      margin-top: 40px;
    }

    .ticket-image img {
      width: 60%;
      max-width: 700px;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .ticket-caption {
      font-size: 1.2em;
      max-width: 800px;
      margin: 0 auto;
      padding: 0 20px;
    }

    @media (max-width: 768px) {
      .left-section, .right-section {
        width: 100%;
        margin-bottom: 20px;
      }
    }

    .posts-grid {
      text-align: center;
      margin: 40px 0;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .post-card {
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      text-align: left;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .post-card h3 {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .post-card p {
      font-size: 1em;
      margin-bottom: 15px;
    }

    .post-card .read-more {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
    }

    .post-card .read-more:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <?php get_header(); ?>

  <div class="content">
  <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">Features</a></li>
        <li><a href="features.php">Pricing</a></li>
    </ul>

    <section class="travel-text">
      <h1>Explore the World</h1>
      <p>
        Traveling opens the door to a world full of adventure, new cultures, and unforgettable experiences. Whether you're exploring ancient cities or relaxing on pristine beaches, travel is one of life's greatest joys. Discover new destinations, meet people, and create memories that will last a lifetime.
      </p>
    </section>

    <section class="image-slider">
      <div class="slider-container">
        <div class="slider-images">
          <img id="slide1" src="https://cmsv2-assets.apptegy.net/uploads/18776/file/2260079/000f9634-5b45-4cfe-95b1-c253446b4d38.jpeg" alt="Travel Image 1">
          <img id="slide2" src="https://bmtnapoli.com/wp-content/uploads/2023/07/Travel-designer-cose-e-cosa-fa.jpg" alt="Travel Image 2">
          <img id="slide3" src="https://www.pillowhite.com/wp-content/uploads/2018/01/Travel-Tips.jpg" alt="Travel Image 3">
        </div>
        <div class="arrows">
          <button class="arrow-left" onclick="moveSlide(-1)">&#10094;</button>
          <button class="arrow-right" onclick="moveSlide(1)">&#10095;</button>
        </div>
      </div>
    </section>

    <section class="tickets-text">
      <div class="left-section">
        <h2>Book Your Tickets Now</h2>
        <p>
          Don’t wait until the last minute! Get your tickets today and start planning your next adventure. Whether you're looking for flight tickets, hotel bookings, or tour packages, we have everything you need to make your journey smooth and hassle-free.
        </p>
      </div>
      <div class="right-section">
        <h2>Secure Your Seat</h2>
        <p>
          Book with confidence! Our platform offers easy and secure booking options, so you can enjoy your journey with peace of mind. Whether it's a weekend getaway or a long vacation, we're here to help you plan your trip from start to finish.
        </p>
      </div>
    </section>

    <div class="ticket-image">
      <img src="https://www.shutterstock.com/image-vector/man-buying-ticket-on-flight-260nw-1766278517.jpg" alt="Man buying ticket illustration">
      <p class="ticket-caption">
        Booking a trip has never been this easy — find the best deals, confirm in just a few clicks, and you're ready to explore. Your next destination is just a ticket away!
      </p>
    </div>

    <section class="posts-grid">
      <h2>Latest Posts</h2>
      <div class="grid-container">
        <?php
        // WordPress Loop to fetch posts
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="post-card">
              <h3><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
              <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </div>
          <?php endwhile;
        else : ?>
          <p>No posts found.</p>
        <?php endif; ?>
      </div>
    </section>

  </div>

  <?php get_footer(); ?>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slider-images img');
    const totalSlides = slides.length;

    function moveSlide(step) {
      currentSlide += step;
      if (currentSlide >= totalSlides) currentSlide = 0;
      if (currentSlide < 0) currentSlide = totalSlides - 1;

      slides.forEach(slide => slide.style.display = 'none');
      slides[currentSlide].style.display = 'block';
    }

    function autoSwitchSlides() {
      moveSlide(1);
    }

    document.addEventListener('DOMContentLoaded', () => {
      moveSlide(0);
      setInterval(autoSwitchSlides, 5000);
    });
  </script>
  
</body>
</html>
