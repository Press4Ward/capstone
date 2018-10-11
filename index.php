<?php 
include('view/header.php'); ?>

<aside class="loginLinks">
<a href='admin/login.php' class="loginBtn btn ">User Login</a>
<a href='admin/user_signup.php' class="loginBtn btn">User Sign Up</a>
</aside>


<header>
     <div class="heroImg">
          <img src="assets/images/heartsWeb.jpg" alt="string of paper hearts" class="headerImg">
          <p class="headerText">We are here to help</p>
     </div>
     <h1 class="homePageTitle">Welcome to Charity Connection</h1>
</header>

<main class="pageMain">

<section class="homePageSection" id="problem">
     <h2 class="homePageHeading">What's the problem?</h2>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus ex ac luctus auctor. Ut sed orci pharetra, cursus enim eu, imperdiet tortor. Pellentesque ante turpis, condimentum eget augue nec, viverra suscipit neque. Nam id odio sed risus consectetur tincidunt. Maecenas ligula nulla, iaculis sed tempus eu, congue facilisis nulla. Vestibulum blandit finibus volutpat. In mattis, ipsum quis hendrerit mollis, sapien velit egestas mi, ac tincidunt odio est sed enim. </p>
</section>

<section class="homePageSection" id="solution">
     <h2 class="homePageHeading">How we solve it</h2>
     <p>Nullam rhoncus nunc vitae dictum eleifend. Vestibulum faucibus lacus eget malesuada semper. Vivamus lacinia auctor enim vitae vestibulum. Duis cursus leo dictum, consequat nibh rutrum, bibendum sapien. Integer et euismod orci, vel interdum est. Integer in diam felis. Nullam eu scelerisque eros. Cras imperdiet est vel metus maximus, eu accumsan diam efficitur. Integer sed mi facilisis, blandit nulla nec, porttitor mi. Morbi dignissim eleifend quam, at euismod neque tempus ac. Proin cursus rhoncus sem porta congue.</p>
</section>

<section class="ctaSection" id="ctaSignUp">
     <h3 class="ctaHeading">Interested in donating?</h3>
     <a href="admin/user_signup.php" class="ctaBtn btn">Sign up!</a>
</section>

<section class="ctaSection" id="ctaSearch"> 
     <h3 class="ctaHeading">Find charities near your area</h3>
     <form action="charity/index.php" method="post" class="">
          <input type="hidden" name="action" value="see_charity_by_zip">
          <input type="text" name='zip' placeholder="Enter your zip code" class="" id="enterAddress">
          <input type="submit" class="ctaBtn btn" value="Go!">
     </form>
     <p class="advSearch btn" id="advSearchBtn">Advanced Search</p>
     <section class="advSearchHidden">
          <form action="" method="post" class="advSearchByType">
          <label for="byType">Search by Charity Type</label>
               <select name="byType">
                     <option value="education">Education</option>
                     <option value="animals">Animals</option>
                     <option value="artsculture">Arts/Culture</option>
                     <option value="communitydev">Community Development</option>
                     <option value="environment">Environment</option>
                     <option value="health">Health</option>
                     <option value="civilrights">Human and Civil Rights</option>
                     <option value="humanservices">Human Services</option><option value="international">International</option>
                     <option value="religion">Religious</option>
                     <option value="research">Research/Public Policy</option>
                     
               </select>
          </form>

          <form action="" method="post" class="advSearchByItems">
            <label for="byItems">Search by Items Accepted by Charity</label>
               <select name="byItems">
                    <option value="household">Household Items</option>
                    <option value="toys">Kids' Toys</option>
                    <option value="kidclothes">Kids' Clothing</option>
                    <option value="books">Books</option>
                    <option value="appliances">Small Appliances</option>
                    <option value="womenclothing">Women's Clothing</option>
                    <option value="menclothing">Men's Clothing</option>
                    <option value="womenshoes">Women's Shoes</option>
                    <option value="menshoes">Men's Shoes</option>
                    <option value="pets">Pet-related Items</option>
                    <option value="garden">Yard or Garden Items</option>
               </select>
          </form>

     </section>

</section>
</main>

<script type="text/javascript" src='assets/js/landing.js'></script>
<?php include('view/footer.php');



