<div id="titleHomeContainer">
       <img id="logoImage" src="./images/logohorizontal.png" onClick="navigateTo('homepage')">
     
        <div id="buttonMenuContainer">
        <nav>
        <div class="dropdown">
            <buttonM id="buttonMenu" >Product</buttonM>
            <div id="productDropdown" class="dropdown-content">
                <div class="dropdown-column">
                    <a href="product.php">All Products</a> 
                    <a href="product.php?category_id=4">Mask</a>
                    <a href="product.php?category_id=2">Toner</a>
                    <a href="product.php?category_id=3">Moisturizer</a>

                    <a href="product.php?category_id=6">Sun Care</a>
                    <a href="product.php?category_id=5">Serum & Booster</a>
                    <a href="product.php?category_id=1">Cleansers & Makeup Removers</a>                
                </div>
            </div>

        </div> 
        <buttonM id="buttonMenu" onClick="navigateTo('cart')">
            Cart
        </buttonM>
        <buttonM id="buttonMenu" onClick="navigateTo('history')">
            History
        </buttonM>
        </nav>
        
        </div>
        <div id="buttonMenuContainerRight">
        <nav>
        <buttonM id="buttonMenu" onClick="navigateTo('about')">
            About Us
        </buttonM>
        <buttonM id="buttonMenu" onClick="navigateTo('contact')">
            Contact
        </buttonM>

        <buttonM id="buttonMenu" onClick="navigateTo('logout')">
            Log Out
        </buttonM>
        <!-- <a id="buttonMenu" href="logout.php">Log Out</a> -->
       </nav>
       </div>
       </div>

</div>
       <script>
        function navigateTo(page) {
            if (page === 'index') {
                window.location.href = 'index.php'; 
            }
            else if(page == 'homepage'){
                window.location.href= 'homepage.php';
            }
            else if(page == 'cart'){
                window.location.href='cart.php';
            }
            else if(page == 'contact'){
                window.location.href='contact.php';
            }
            else if(page == 'logout'){
                window.location.href='logout.php';
            }
            else if(page == 'history'){
                window.location.href='order_history.php';
            }
            else if(page == 'about'){
                window.location.href='aboutUs.php';
            }
        }
    </script>

