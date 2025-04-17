<?php
get_header();
?>

<div class="content">

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
    <img src="https://www.shutterstock.com/image-vector/man-buying-ticket-on-flight-260nw-1766278517.jpg" alt="Ticket Purchase Illustration">
    <p class="ticket-caption">Get ready to take off – your next journey starts with one click. Our user-friendly platform makes booking simple, fast, and reliable. Let’s make your travel dreams a reality!</p>
  </div>

</div>

<?php
get_footer();
?>
