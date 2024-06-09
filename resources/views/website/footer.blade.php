 <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="images/logo.jpg" alt="#" /></a>
                      </div>

                   </div>
               </div>

                        <div class="col-md-3">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="">Home</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Services</a></li>
                           <li><a href="{{route('pshow')}}">Products</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Account</a></li>
                           <li><a href="#">Checkout</a></li>
                           <li><a href="#">Login</a></li>
                           <li><a href="#">Register</a></li>
                           <li><a href="#">Shopping</a></li>
                           <li><a href="#">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                    <div class="information_f">
                        <p><strong>ADDRESS:</strong><br> 27st Latha Lowe Belok, Yangon</p>
                        <p><strong>TELEPHONE:</strong> +95674402207</p>
                        <p><strong>EMAIL:</strong> thinnthuzar89@gmail.com</p>
                      </div>
                  </div>
                     </div>
                  </div>

                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script>
       // script.js

document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('dark-mode-toggle');
    const currentMode = localStorage.getItem('darkMode');

    // Apply the saved mode from localStorage
    if (currentMode === 'enabled') {
        document.body.classList.add('dark-mode');
    }

    // Toggle mode and save preference
    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        const mode = document.body.classList.contains('dark-mode') ? 'enabled' : 'disabled';
        localStorage.setItem('darkMode', mode);
    });
});

      </script>
       <!-- jQery -->
       <script src="website/js/jquery-3.4.1.min.js"></script>
       <!-- popper js -->
       <script src="website/js/popper.min.js"></script>
       <!-- bootstrap js -->
       <script src="website/js/bootstrap.js"></script>
       <!-- custom js -->
       <script src="website/js/custom.js"></script>
    </body>
 </html>
