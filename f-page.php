<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Logbook</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/resort-logbook.css">

</head>
<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <h1  style="color: black;" class="tm-site-name"> It-Resort</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-home tm-page-link-icon"></i>
                  <span>Home</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#about" class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon"></i>
                  <span>About Us</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-tools tm-page-link-icon"></i>
                  <span>Services</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
                  <i class="fas fa-phone tm-page-link-icon"></i>
                  <span>Contact</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>        
      </div>
         
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            
            <!-- Resort Home Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#" class="tm-tab-link active" data-id="cold">Iced Coffee</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="hot">Hot Coffee</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice">Fruit Juice</a>
                </li>
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/iced-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Americano<span class="tm-list-item-price">$10.25</span></h3>
                    <p class="tm-list-item-description">An iced americano is a cold espresso drink 
                      best served over ice. In making an iced americano, like most cold 
                      coffee drinks, it should be made with espresso and not filtered coffee.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Cappuccino<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">An iced cappuccino consists of espresso cooled with ice 
                      and then topped with a thick layer of foam. As opposed to a standard cappuccino, 
                      you don’t add any steamed milk.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Espresso<span class="tm-list-item-price">$14.25</span></h3>
                    <p class="tm-list-item-description"> Iced espresso is espresso served over ice, often with milk. 
                      It’s similar to iced coffee, but it uses espresso instead of brewed coffee. 
                      Starbucks calls this drink is an iced shaken espresso: the espresso is shaken with ice and sweetener before serving.  </p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Latte<span class="tm-list-item-price">$11.50</span></h3>
                    <p class="tm-list-item-description">Iced lattes are made with espresso shots and are 
                      often mixed or blended with frothed milk, making them creamier 
                      than iced espresso, which has little to no milk. Iced lattes are also served with other sweeteners.</p>
                  </div>
                </div> 
                                       
              </div>
            </div> 

            <div id="hot" class="tm-tab-content">
              <div class="tm-list">
              
                <div class="tm-list-item">          
                  <img src="img/hot-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Americano<span class="tm-list-item-price">$8.50</span></h3>
                    <p class="tm-list-item-description">An Americano is an espresso drink made with hot water 
                      and espresso, also called a Caffe Americano. The drink can be made with 
                      either one or two shots of espresso, and varying ratios of water. 
                      Diluting the strong dark espresso roast brings the flavor closer to a drip coffee.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Cappuccino<span class="tm-list-item-price">$9.50</span></h3>
                    <p class="tm-list-item-description"> A cappuccino is a popular coffee drink that’s 
                      made by topping a shot of espresso with steamed milk and milk foam. Typically, 
                      it contains equal parts of each and is made up of about 1/3 espresso, 1/3 steamed milk, and 1/3 foamed milk. </p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Espresso<span class="tm-list-item-price">$7.50</span></h3>
                    <p class="tm-list-item-description">Espresso coffee is made using a unique brewing 
                      method that provides the coffee with a stronger and more intense flavor. 
                      It is heavily aromatic and bold. Espresso’s flavor can be attributed to 
                      the hot pressurized water that is used to brew densely packed coffee grinds.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Latte<span class="tm-list-item-price">$6.50</span></h3>
                    <p class="tm-list-item-description">A hot latte is a harmonious blend of espresso and steamed milk. </p>              
                  </div>
                </div>
                         
              </div>
            </div>

            <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/smoothie-1.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Strawberry Smoothie<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">This strawberry smoothie is the perfect, natural cure for that sweet tooth. 
                      Strawberries deliver a bright sweetness with notes of pineapple, apple, and pears. </p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-2.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Red Berry Smoothie<span class="tm-list-item-price">$14.50</span></h3>
                    <p class="tm-list-item-description">Berry Smoothie is an orange and pink cup with filled with 
                      an off-white smoothie. She is topped with a golden leaf, a golden strawberry, 
                      and two yellow straws, implying that she is intended for sharing. Her variant 
                      is a red cup filled with a white smoothie. She is topped with a mint leaf, a strawberry, and two white straws.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-3.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Pineapple Smoothie<span class="tm-list-item-price">$16.50</span></h3>
                    <p class="tm-list-item-description">This pineapple smoothie will transport you to a tropical 
                      oasis! It has the perfect pineapple flavor combined with juice, bananas, 
                      and some yogurt. If you are looking for the perfect summertime treat, 
                      this is it! Smoothies are perfect for a good breakfast, lunch, or snack.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-4.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Spinach Smoothie<span class="tm-list-item-price">$18.50</span></h3>
                    <p class="tm-list-item-description"> Spinach smoothies provide a significant amount of vegetable-based nutrition in a pleasant-tasting drink. </p>              
                  </div>
                </div>              
              </div>
            </div>
            <!-- end resort Home Page -->
          </div>

          <!-- About Us Page -->
          <div id="about" class="tm-page-content">
            <div class="tm-black-bg tm-mb-20 tm-about-box-1">              
              <h2 class="tm-text-primary tm-about-header">About IT-Beach</h2>
              <div class="tm-list-item tm-list-item-2">                
                <img src="img/about-1.png" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p> The IT-Resort, an idyllic group of 26 coral atolls nestled in the Indian Ocean, 
                    presents a captivating array of natural wonders and marine life. From a bird's eye view, 
                    the IT-Resort appears as a scattered patchwork of verdant islands, dotted with an 
                    array of lush green coconut trees. The islands, surrounded by the crystal-clear waters 
                    of the Indian Ocean, form the breathtaking azure lagoons that the Maldives is renowned for.
                </div>                
              </div>
            </div>
            <div class="tm-black-bg tm-mb-20 tm-about-box-2">              
              <div class="tm-list-item tm-list-item-2">                
                <div class="tm-list-item-text-2">
                  <p> This exquisite blue hue, a result of the absorption of natural light and turquoise waters, 
                    permeates the atmosphere and imbues the landscape with a ethereal ambiance. The lagoons, 
                    teeming with vibrant marine life, further enhance the overall allure of this picturesque 
                    destination. To appreciate the IT-Resort' stunning natural beauty from a closer perspective, 
                    visitors can embark on a series of adventurous activities, such as snorkeling, diving, 
                    and sailing. These activities afford travelers the opportunity to explore the coral reefs, 
                    encounter diverse marine life, and immerse themselves in the rich and diverse ecosystems that 
                    the Maldives has to offer. In addition, the IT-Resort offers a mesmerizing array of natural 
                    wonders and vibrant marine life, making it an ideal destination for nature enthusiasts 
                    and adventure seekers alike. </p>                </div>                
                <img src="img/about-2.png" alt="Image" class="tm-list-item-img tm-list-item-img-big tm-img-right">                
              </div>
            </div>
          </div>
          <!-- end About Us Page -->

          <!-- Services Page -->
          <div id="special" class="tm-page-content">
            <div class="tm-special-items">
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-01.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Hotels</h2>
                  <p class="tm-special-item-text"> The hotel also offers a wide range of activities 
                    and adventures for guests to enjoy. These include scuba diving, 
                    snorkeling, water sports, and unique experiences such as island 
                    hopping in traditional dhoni boats. </p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-02.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">World class Dining</h2>
                  <p class="tm-special-item-text"> The resort offers three signature dining experiences, 
                    each showcasing a unique blend of international cuisine and locally sourced ingredients. 
                    The offerings include the Crescent restaurant, a four-hour tasting menu that features 
                    the very best of what the Maldives has to offer. </p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-03.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Drinks</h2>
                  <p class="tm-special-item-text"> Paradise Pina: A delicious mocktail made with coconut cream, 
                    pineapple juice, and a sprinkle of cinnamon. This unique and exotic beverage 
                    offers a hint of adventure in the heart of the Maldives.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-04.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Sweet Dessert</h2>
                  <p class="tm-special-item-text">The IT-Resort sweet desert food culture 
                    also incorporates Persian, Arab, and Indian dessert traditions. 
                    These unique desserts are enjoyed at special occasions and social gatherings.</p>  
                </div>
              </div>      
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-05.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Spa</h2>
                  <p class="tm-special-item-text"> The IT-Resort, a chain of 26 coral atolls in the Indian Ocean, 
                    offers an unforgettable experience to those who seek luxury, privacy, 
                    and an exclusive spa experience. </p>
                   <p> Reethi Rah Spa: This exclusive spa is situated on a private island within 
                    the Maldives. The spa offers a serene and secluded atmosphere for 
                    guests to unwind and rejuvenate. With a range of spa treatments, 
                    including signature massages, facials, and body wraps, Reethi Rah 
                    Spa caters to all wellness needs. Additionally, the spa provides 
                    an exotic atmosphere with the presence of sea water, and a menu that 
                    incorporates locally sourced ingredients.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-06.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">View</h2>
                  <p class="tm-special-item-text">The IT-Resort, an idyllic group of 26 coral 
                    atolls nestled in the Indian Ocean, presents a captivating array of 
                    natural wonders and marine life.</p>  
                </div>
              </div>                      
            </div>            
          </div>
          <!-- end Services Page -->

          <!-- Contact Page -->
          <div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-text-container">
            <h2 class="tm-text-primary">For Booking</h2>
            <i class="fa fa-envelope" aria-hidden="true"></i>
              <p>resortlogbook@gmail.com</p>
              
              <i class="fa fa-phone-square" aria-hidden="true"></i>
              <p>092345647784</p>

              <i class="fa fa-address-book" aria-hidden="true"></i>
              <p>Brgy. Camingwan, Kabankalan City, Negros Occedintal</p>
              
            </div>
            <div class="tm-black-bg tm-contact-text-container">
              <p>Feel free to reach out to us with 
                any questions or suggestions you may have,
                 and we hope you enjoy exploring all 
                 that our beautiful resort has to offer!</p>
             <center> <u> <p style="color: blue;">WWW.resortlogbook.com</p> </u> </center>

            </div>
            </div>
          <!-- end Contact Page -->
        </main>
      </div>    
    </div>
    <footer class="tm-site-footer">
      <p class="tm-black-bg tm-footer-text">Copyright 2024
       <a href="https://www.tooplate.com" class="tm-footer-link" rel="sponsored" target="_parent"></a></p>
    </footer>
  </div>
    
  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }    

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
        showPage($(pageId));
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {
        
        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });

      
      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault(); 
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
      
  </script>