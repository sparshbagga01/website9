<!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <!--<h3>📍Address </h3>-->
                   <h3>Durga Packaging Machine</h3>
                    <p> Durga Packaging Machine is a trusted name in the packaging industry, specializing in innovative and high-performance packaging solutions.</p>
                    
                    <div class="social-links">
                        <a href="https://www.facebook.com/pouchpackagingmachine.org/" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.youtube.com/@durgapackagingmachine3772" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                        
                        <!--<a href="https://x.com/avtarmachines" class="text-white me-3"><i class="fab fa-twitter"></i></a>-->
                        <!--<a href="https://www.youtube.com/@AvtarMechanicalWorks1973" class="text-white me-3"><i class="fab fa-youtube"></i></a>-->
                        
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="<?php echo $baseurl ?>">Home</a>
                    <a href="<?php echo $baseurl ?>about.php">About Us</a>
                     <a href="<?php echo $baseurl ?>contact.php">Contact Us</a>
                </div>
                <div class="footer-section">
                    <h3>Hot Products</h3>
                    <a href="<?php echo $baseurl ?>india/pouch-packaging-machine.php">Pouch Packaging Machine</a>
                    <a href="<?php echo $baseurl ?>india/powder-packaging-machine.php">Powder Packaging Machine</a>
                    <a href="<?php echo $baseurl ?>india/liquor-pouch-packaging-machine.php">Liquor Pouch Packaging Machine</a>
                    <a href="<?php echo $baseurl ?>india/shampoo-pouch-packing-machine.php">Shampoo Pouch Packaging Machine</a>
                    <a href="<?php echo $baseurl ?>india/ors-powder-pouch-packaging-machine">ORS Powder Pouch Packaging Machine</a>
                    <!--<a href="<?php echo $baseurl ?>roll-to-sheet-cutting-machine-without-with-online-printing.php">Roll To Sheet Cutting Machine Without & With Online Printing</a>-->
                    <!--<a href="<?php echo $baseurl ?>aluminium-foil-rewinding-machine.php">Aluminium Foil Rewinding Machines</a>-->
                    <!--<a href="<?php echo $baseurl ?>butter-paper-rewinding-machine-without-with-online-printing.php">Butter Paper Rewinding Machine Without & With Online Printing</a>-->
                    <!--<a href="<?php echo $baseurl ?>butter-paper-sheets-cutting-machines.php">Butter Paper Sheets Cutting Machines</a>-->
                    <!--<a href="<?php echo $baseurl ?>biodegradable-machines.php">Biodegradable Machines</a>-->
                </div>
                <div class="footer-section">
                    <h3>Contact Us:</h3>
                     <p>📍Address </p>
                    <!--<p> <b>Factory Address:</b></p>-->
                    <p> Plot No. 8, Gali No. 8E,Sarurpur Industrial Area,Sohna Road, india ,Haryana 121004</p>
                    <p>📧  <b>Sales Email:</b> sisodiyadurgapack@gmail.com</p>
                    <p>📞 +91-9953043939 </p>
                    
                </div>
            </div>
             <div class="footer-bottom d-flex justify-content-between flex-wrap align-items-center">
    <p class="mb-0 text-white">&copy; 2024 Durga Packaging Machine. All rights reserved.</p>
    <div class="footer-section d-flex">
        <a href="<?php echo $baseurl ?>../privacy-policy.php" class="footer-link me-3">Privacy Policy and Terms of Service</a>
        <a href="<?php echo $baseurl ?>../shipping-return-policy.php" class="footer-link">Shipping & Return Policy</a>
    </div>
</div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // WhatsApp and Quote button functionality
        document.querySelectorAll('.whatsapp-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const productName = this.closest('.product-card').querySelector('h3').textContent;
                const message = `Hi, I'm interested in ${productName}. Please provide more details.`;
                window.open(`https://wa.me/+919953043939?text=${encodeURIComponent(message)}`, '_blank');
            });
        });

        document.querySelectorAll('.quote-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const productName = this.closest('.product-card').querySelector('h3').textContent;
                alert(`For current pricing of ${productName}, please contact us at +919953043939 or send us a WhatsApp message.`);
            });
        });

        // WhatsApp Float Button
        document.querySelector('.whatsapp-float').addEventListener('click', function() {
            const message = `Hi, I'm interested in your Printing & Packaging Machinery. Please provide more information.`;
            window.open(`https://wa.me/+919953043939?text=${encodeURIComponent(message)}`, '_blank');
        });

        // Download catalog button
        document.querySelector('.download-btn').addEventListener('click', function() {
            alert('Catalog download will be available soon. Please contact us for detailed product information.');
        });

        // CTA Section buttons
        document.querySelector('.cta-btn.primary').addEventListener('click', function() {
            document.querySelector('#contact').scrollIntoView({
                behavior: 'smooth'
            });
        });

        document.querySelector('.cta-btn.secondary').addEventListener('click', function() {
            alert('Catalog download will be available soon. Please contact us for detailed product information.');
        });

        document.querySelector('.cta-btn.whatsapp').addEventListener('click', function() {
            const message = `Hi, I want to enhance my packaging process. Please provide free consultation details.`;
            window.open(`https://wa.me/+919953043939?text=${encodeURIComponent(message)}`, '_blank');
        });

        // Hero buttons
        document.querySelector('.btn-orange').addEventListener('click', function() {
            document.querySelector('#products').scrollIntoView({
                behavior: 'smooth'
            });
        });

        document.querySelector('.btn-outline').addEventListener('click', function() {
            document.querySelector('#contact').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
        <script>
        // FAQ Toggle Function
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const arrow = element.querySelector('.faq-arrow');

            // Close all other FAQs
            document.querySelectorAll('.faq-question').forEach(item => {
                if (item !== element) {
                    item.classList.remove('active');
                    item.nextElementSibling.classList.remove('active');
                    item.querySelector('.faq-arrow').style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current FAQ
            element.classList.toggle('active');
            answer.classList.toggle('active');
        }

        // Thumbnail Image Selection
        document.querySelectorAll('.thumbnail').forEach(thumb => {
            thumb.addEventListener('click', function() {
                document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Get Today Price Function
        function getTodayPrice() {
            const message = `Hi, I'm interested in Multi Track Packing Machine. Please provide today's best price with detailed quotation.`;
            window.open(`https://wa.me/919953043939?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Request Callback Function
        function requestCallback() {
            const message = `Hi, I would like to request a callback for Multi Track Packing Machine. Please call me to discuss requirements and pricing.`;
            window.open(`https://wa.me/919953043939?text=${encodeURIComponent(message)}`, '_blank');
        }

        // WhatsApp Float Button
        function openWhatsApp() {
            const message = `Hi, I'm viewing the Multi Track Packing Machine page. Please provide more information about this product.`;
            window.open(`https://wa.me/919953043939?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Download catalog function
        function downloadCatalog() {
            alert('Catalog download will be available soon. Please contact us for detailed product information.');
        }

        // Quick Quote Function
        function getQuickQuote(productName) {
            const message = `Hi, I need a quick quote for ${productName}. Please provide pricing and availability details.`;
            window.open(`https://wa.me/919953043939?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
     <!-- WhatsApp Float Button -->
        <div class="whatsapp">
        <a href="https://wa.me/919953043939" target="_blank" class="whatsappp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <style>
        /* WhatsApp Float */
.whatsapp {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
}

.whatsappp {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: #25D366;
    color: white;
    border-radius: 50%;
    text-decoration: none;
    font-size: 1.5rem;
    box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    transition: all 0.3s ease;
    animation: pulse 2s infinite;
}

.whatsappp:hover {
    background: #20b954;
    transform: scale(1.1);
    color: white;
}
    </style>
    
      <div id="container">
    <a href="tel: 9953043939">
        <button type='button' class="butt">
            <img src="assets/image/phone-icon-2.webp" alt="Phone Icon" class="phone-icon">
        </button>
    </a>
</div>
<style>
   body {
    height: 100vh;
    background-color: transparent; 
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.butt {
    background-color: transparent; 
    border: none; 
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 110px;
    right: 31px;
    border-radius: 50px;
    text-align: center;
    z-index: 100;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0; 
    box-shadow: none; 
}

.phone-icon {
    width: 100%; 
    height: auto;
    margin-top: 30%;
}


#third {

}
</style> 
    
    <div class="popup-overlay" id="popupForm" style="display: none;">
  <div class="popup-box">
      <div clas= "popup-content">
    <h3>Get Latest Price</h3>
    <form method="post" action="mail" class="popup-form">
      
      <!-- Name -->
      <div class="input-group">
        <input id="name" type="text" name="name" placeholder=" Enter Your Name" required>
        <i class="fas fa-user-circle"></i>
      </div>

      <!-- Email -->
      <div class="input-group">
        <input id="email" type="email" name="email" placeholder=" Enter Your Email" required>
        <i class="fas fa-envelope-open-text"></i>
      </div>

      <!-- Phone Number -->
      <div class="input-group">
        <input id="phone" type="tel" name="phone" placeholder=" Phone Number" required>
        <i class="fas fa-phone-alt"></i>
      </div>

      <!-- City -->
      <div class="input-group">
        <input id="city" type="text" name="city" placeholder=" Enter Your City" required>
        <i class="fas fa-city"></i>
      </div>

      <!-- Quantity & Pieces -->
      <div class="input-row">
        <div class="input-group half-width">
          <input id="quantity" type="number" name="quantity" placeholder="Quantity" required>
          <i class="fas fa-cogs"></i>
        </div>

        <div class="input-group half-width">
          <!--<input id="pieces" type="number" name="pieces" placeholder="No. of Pieces" required>-->
          <select id= "pieces" name ="pieces" required>
              <option value = "unit">Unit</option>
              <option value = "unit">Pieces</option>
              </select>
          <i class="fas fa-cogs"></i>
        </div>
      </div>

      <!-- Message -->
      <div class="input-group">
        <textarea id="message" name="message" placeholder="Message or product details" rows="3" required></textarea>
        <i class="fas fa-pencil-alt"></i>
      </div>

      <!-- Buttons -->
      <div class="button-group">
        <button type="submit" name= "submit" class="btn submit-btn">Submit</button>
       </div>
        <span class="close-icon" onclick="closeForm()">×</span>
    </form>
  </div>
</div>
</div>

<style>
.popup-overlay {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 9999;
  overflow-y: auto;
  padding: 20px;
}

.popup-box {
  position: relative;
  background-color: #fff;
  margin: auto;
  width: 100%;
  max-width: 426px;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.popup-box h3 {
  text-align: center;
  margin-bottom: 15px;
  background-color: #ff6600;
  color: #fff;
  padding: 10px;
  border-radius: 4px;
  font-size: 18px;
}

.popup-form {
  width: 100%;
  margin: 0 auto;
}

.input-group {
  position: relative;
  margin-bottom: 12px;
}

.input-group input,
.input-group textarea,
.input-group select {
  width: 100%;
  padding: 10px 10px 10px 40px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-size: 14px;
  box-sizing: border-box;
}

.input-group i {
  position: absolute;
  top: 10px;
  left: 10px;
  color: #007BFF;
  font-size: 16px;
}

.input-row {
  display: flex;
  flex-direction: row;
  gap: 10px;
}

.half-width {
  flex: 1;
}

.button-group {
  display: flex;
  justify-content: center;
  margin-top: 10px;
  position: relative;
}

.btn {
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
}

.submit-btn {
  background-color: #ff6600;
  color: #fff;
  width: 100%;
}

.close-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  font-weight: bold;
  color: #333;
  cursor: pointer;
  background: #fff;
  border-radius: 50%;
  padding: 0 10px;
  border: 1px solid #ccc;
  line-height: 28px;
  text-align: center;
  z-index: 10;
}


.close-icon:hover {
  color: #dc3545;
}

/* ✅ Mobile-specific refinements */
@media (max-width: 480px) {
  .popup-box {
    padding: 15px;
  }

  .popup-box h3 {
    font-size: 16px;
  }

  .btn {
    font-size: 14px;
    padding: 10px 16px;
  }

  .input-group input,
  .input-group textarea,
  .input-group select {
    font-size: 14px;
    padding-left: 38px;
  }

  .input-row {
    flex-direction: column;
  }

  .half-width {
    width: 100%;
  }

 .close-icon {
  font-size: 24px;
  right: 10px;
  top: 10px;
}

}


</style>
<script>
  function openForm() {
    document.getElementById("popupForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("popupForm").style.display = "none";
  }

  // Optional: Close popup when clicking outside the form
  window.onclick = function(event) {
    const popup = document.getElementById("popupForm");
    if (event.target === popup) {
      popup.style.display = "none";
    }
  };
</script>
</body>
</html>

