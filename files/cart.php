
    <style>
    .cart-Btn {
        position: fixed;
        z-index: 11;
        right: 0;
        border: 0px;
    box-shadow: -1px 1px 7px black;
    border-radius: 10px;
    height: 50px;
    width: 50px;
    background-color: #88ba30;
    }
    .cart-Badge {
        position: fixed;
        z-index: 12;
        right: 40px;
    }
    .cart_icon{
        font-size: 24px;
        color: white;
    }
    .cart-Btn:hover{
        background-color: #23570e;
    }

    .cart-Btn:hover .cart_icon{
        background-color: #23570e;
    }




/* For Cart Model */



    </style>


    <div class="bg-info clearfix">
    <a href="./ecomerceCart.php">
    <span class="badge badge-light cart-Badge"> 

    <div id="show_data1"><?php if(!isset($_SESSION["cartItems"])) {
          echo 0;
    }else{
    
        echo  $_SESSION["cartItems"];
    } ?>
    
    </div>
    
    </span>
        <button type="button" id="show-sidebar" class="btn  cart-Btn">
            <i class="fa fa-cart-arrow-down cart_icon" aria-hidden="true"></i>
        </button>
        </a>
    </div>
