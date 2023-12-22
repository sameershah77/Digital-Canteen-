<!DOCTYPE html>
<html lang="en">
  <head>
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/responsive.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color -->
    <link
      id="changeable-colors"
      rel="stylesheet"
      href="css/colors/orange.css"
    />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />


    <title>Digital Canteen</title>
    <style>
      * {
        padding: 0px;
        margin: 0px;
      }
      body {
        background-color: black;
        width: auto;
        height: 840vh;
      }
      header {
        padding: 0 5px;
        z-index: 10;
        position: sticky;
        top: 0;
        display: grid;
        align-items: center;
        height: 26vh;
        background-color: #000000;
      }
       .internal{
            height :8vh;
            transition:2s;
        }
      .navigation {
        background-size: 50%;
        background-image: url(m2.jpeg);
        -webkit-background-clip: image;
        background-position: 0 0 10px 0;
        animation: back 40s linear infinite;

        justify-content: space-between;
        display: flex;
        align-items: center;
        height: 10vh;
        border: 0.5px solid rgb(146, 146, 146);
        color: aliceblue;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
      }

      .aiktc {
        margin-right: 30px;
        height: 8vh;
      }

      .index {
        background-color: #202124;
        display: flex;

        justify-content: space-between;
        align-items: center;
        height: 4vh;
        border-radius: 6px;
      }
      .i1 {
        display: flex;
        align-items: center;
        font-size: 3.5vh;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
        margin-left: 2vw;
        height: 4vh;
        width: 20vh;

        color: rgb(232, 108, 51);
      }
      .auto-type {
        color: rgb(92, 227, 68);
      }
      .i2 {
        display: flex;
        align-items: center;
        margin-right: 2vw;

        justify-content: end;
        height: 4vh;
        width: 25vw;
      }

      h1 {
        display: inline-block;
        text-align: center;
        background-size: contain;

        font-size: 6vh;
        color: transparent;
        -webkit-text-stroke: 1px rgb(255, 238, 0);
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-image: url("/m1.jpeg");
        -webkit-background-clip: text;
        background-position: 0 0 5px 0;
        animation: back 30s linear infinite;
      }
      @keyframes back {
        100% {
          background-position: 1000px 0;
        }
      }

      main {
        padding: 0 10px;

        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center;

        width: auto;
        height: 805vh;

        background-image: url(logo.jpeg);
        background-size: contain;
      }
      footer {
        display: grid;
        text-align: center;
        height: 10vh;
        background-color: transparent;
        border: 1px solid white;
        background-color: #202124;
      }
      p {
        color: rgb(0, 220, 51);
        display: flex;
        justify-self: center;
        align-self: center;
      }

      .box {
        padding: 2vw;
        display: grid;
        height: 800vh;
        border: 1px solid rgb(77, 66, 66);
        border-radius: 10px;
      }
      .b1 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 46vh;
        border-radius: 10px;
      }
      .b2 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 66vh;
        border-radius: 10px;
      }
      .b3 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 80vh;
        border-radius: 10px;
      }
      .b4 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 80vh;
        border-radius: 10px;
      }
      .b5 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 86vh;
        border-radius: 10px;
      }
      .b6 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 60vh;
        border-radius: 10px;
      }
      .b7 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 46vh;
        border-radius: 10px;
      }

      .b8 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 32vh;
        border-radius: 10px;
      }

      .b9 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 76vh;
        border-radius: 10px;
      }

      .b10 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 80vh;
        border-radius: 10px;
      }

      .b11 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 42vh;
        border-radius: 10px;
      }

      .b12 {
        background-color: #95979e37;
        padding: 10px;
        display: grid;
        height: 46vh;
        border-radius: 10px;
      }

      .first {
align-items: center;
        display: flex;

        margin-top: 10px;
        height: 4vh;
        border: 0.5px solid rgb(96, 90, 90);
        border-radius: 3px;
      }
      .tag {
        height: 50px;
        display: flex;
        justify-content: left;
        align-items: center;

        color: #fff;
      }
      h3 {
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
          "Lucida Sans Unicode", Geneva, Verdana, sans-serif;

        margin-top: 35px;
      }
      h4 {
        font-size: 30px;
      }
      .icon {
        display: flex;
        justify-content: center;
      }
      .iconsize {
        height: 50px;
      }
      .second {
        width: 200px;
        margin-left: 10px;
        margin-bottom: 15px;
      }
      .productname {
        
        display: flex;

        color: rgb(0, 221, 221);
        position: relative;
        top: 2px;
        left: 2vw;
      }
      .price {
        display: inline-block;
        justify-content: center;
        text-align: center;
        
        position: absolute;

        left: 86vw;

        width: 40px;
        background-color: yellow;
        color: rgb(52, 42, 42);

        align-items: center;
        border-radius: 5px;
        cursor: not-allowed;
      }
      .addtocart {
        margin-right: 2vw;
        display: inline-block;

        position: absolute;

        left: 90vw;
        justify-content: center;

        width: 40px;
        background-color: rgb(0, 157, 255);
        color: rgb(52, 42, 42);

        border-radius: 5px;
      }

      /* Scroll barr */
      .click {
      }

      /* Drop down below   ---------------------------------------------------------------------- */

      .dropbtn {
        justify-content: center;
        border: 1px solid orangered;
        background-color: rgba(255, 255, 255, 0);
        border-radius: 5px;
        height: 3vh;
        width: 14vh;
        align-items: center;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;

        color: white;

        font-size: 2.5vh;

        cursor: pointer;
        transition: 1s;
      }

      /* Dropdown button on hover & focus */
      .dropbtn:hover,
      .dropbtn:focus {
        background-color: orangered;
      }

      /* The container <div> - needed to position the dropdown content */
      .dropdown {
        position: relative;
        display: inline-block;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        border: 0.5px solid white;
        border-radius: 5px;
        display: none;
        position: absolute;
        background-color: rgba(0, 183, 165, 0.777);
        min-width: 80px;
        box-shadow: 0px 8px 16px 0px rgba(255, 255, 255, 0.297);
   
      }

      /* Links inside the dropdown */
      .dropdown-content a {
        border: 0.5px solid rgba(255, 255, 255, 0.275);
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
          z-index: 0;
        color: rgb(0, 0, 0);
        font-size: 1.7vh;
        text-align: left;
        padding: 10px 4px;
        text-decoration: none;
        display: block;
      }

      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {
        background-color: rgba(221, 221, 221, 0.383);
      }

      /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
      .show {
        display: block;
      }

      /* The sidepanel menu */
      .sidepanel {
        height: 100%; /* Specify a height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 11; /* Stay on top */
        top: 0;
        left: 0;

        background-color: #111;
        
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 1s; /* 0.5 second transition effect to slide in the sidepanel */
      }

      /* The sidepanel links */
      .sidepanel a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      /* When you mouse over the navigation links, change their color */
      .sidepanel a:hover {
        color: #f1f1f1;
      }

      /* Position and style the close button (top right corner) */
      .sidepanel .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }

      /* Style the button that is used to open the sidepanel */
      .openbtn {
        font-size: 20px;

        cursor: pointer;
        border: 1px solid rgb(255, 248, 52);
        background-color: transparent;
        color: rgb(0, 134, 187);
        margin-left: 20px;
        padding: 2px 8px;
        border-radius: 10px;
      }

      .openbtn:hover {
        background-color: #444;
      }

      @media screen and (max-width: 600px) {
        .back {
          background-attachment: fixed;
          background-image: url(/image/X.jpeg);
        }
        header {
          height: 18vh;
        }
        .internal{
            height :4vh;
        }
        .box {
          
            justify-content :center;
        }

        .navigation {
          width: auto;
          height: 7vh;
        }
        .aiktc {
          margin-right: 5px;

          height: 5vh;
        }
        .option {
          padding-left: 5px;
          height: 4vh;
          margin-left: 0px;
        }

        h1 {
           font-family: 'DM Serif Display', serif;
          font-size: 20px;
          -webkit-text-stroke: 0.5px yellow;
          color: transparent;
       
        background-image: url("/m1.jpeg");
        -webkit-background-clip: text;
        background-position: 0 0 5px 0;
        animation: back 80s linear infinite;
        }
        footer {
          height: 10vh;
        }
        .index {
          height: 5vh;
        }
        
        .i1 {
          font-size: 2.9vh;
        }
        .i2 {
        }
        .b1,
        .b2,
        .b3,
        .b4,
        .b5,
        .b6,
        .b7,
        .b8,
        .b9,
        .b10,
        .b11,
        .b12 {
          width: 84vw;
        }
        .productname {
        font-size: 10px;
        display: flex;

        color: rgb(0, 221, 221);
        position: relative;
        top: 2px;
        left: 2vw;
      }



        .price {
        justify-content: center;
        display: inline-block;
        position: absolute;

        left: 60vw;

        width: 40px;
        background-color: yellow;
        color: rgb(52, 42, 42);

        align-self: center;
        border-radius: 5px;
        cursor: not-allowed;
      }
.addtocart {
        margin-right: 2vw;
        display: inline-block;

        position: absolute;

        left: 76vw;
        justify-content: center;

        width: 40px;
        background-color: rgb(0, 157, 255);
        color: rgb(52, 42, 42);

        border-radius: 5px;
      }
      }
    

      /* Style the buttons that are used to open and close the accordion panel */
      .accordion {
        
        display: block;
        background-color: #202124;
        color: rgb(210, 210, 210);
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
        border: none;
        font-size: 25px;

        outline: none;
        transition: 0.4s;
      }
      ::before.accordion{
        height: 0;
      }
      /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
      .active,.accordion:hover {
        background-color: rgb(63, 63, 63);
        border-radius: 5px;
        display: block; 
       
      }
      .panel ::after{
        color: rgb(0, 255, 247);
        padding: 0 18px;
        font-size: 15px;
        background-color: rgba(63, 63, 63, 0.783);
        border-bottom-left-radius: 5px;
        border-bottom-left-radius: 5px;
        display: block;
        
        
      }
      /* Style the accordion panel. Note: hidden by default */
      .panel ::before{
        overflow: hidden;
        opacity: 0;
      }

      .x {
        width: 3%;
        position: relative;
        top: 60px;
        left: 90%;
        cursor: pointer;
      }
      .x:before {
        content: attr(data-count);
        position: absolute;
        color: #f1f1f1;
        right: 16px;
        font-size: 15px;
        text-align: center;
        top: -12px;
        width: 20px;
        height: 20px;
        background-color: red;
        border-radius: 50%;
        opacity: 0;
      }
      .x.zero:before {
        opacity: 1;
      }

      /* The side navigation menu */
      .openelm {
        
        border-bottom-right-radius: 7px;
        border-top-right-radius: 7px;
        padding: 0 5px;
        height: 30px;
        width: 30px;
        z-index: 5;
        display:grid;
        position: sticky;
        top: 40vh;
        justify-items: center;
     
        text-align: center;
        border: 1px solid #979797;

        background-color: #5f5f5f;
      }
      @keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
.rotate {
  animation: rotation 5s infinite linear;
}


      .sidenav {
        height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 9; /* Stay on top */
        top: 0; /* Stay at the top */
        left: 0;
        background-color: #111; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
      }

      /* The navigation menu links */
      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: inline-block;
        transition: 0.3s;
      }

      /* When you mouse over the navigation links, change their color */
      .sidenav a:hover {
        color: #f1f1f1;
      }

      /* Position and style the close button (top right corner) */
      .sidenav .closeelm {
          display:block;
       
       text-align:center;
        text-align:right;
        margin-right:5px;
        
        margin-top:50px;
        font-size: 70px;
       
      }

      /* Style page content - use this if you want to push the page content to the right when you open the side navigation */

      /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
      @media screen and (max-height: 450px) {
        .sidenav {
          padding-top: 15px;
        }
        .sidenav a {
          font-size: 18px;
        }
      }
      .block {
  display: block;
  border-radius: 5px;
  width: 100%;
  border: 2px solid white;
  background-color: #04AA6D;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
.block:hover{
  border: 2px solid #04AA6D;
  background-color: whitea504;

}

      

      @import url("https://fonts.googleapis.com/css?family=Quicksand:400,700");

      *,
      ::before,
      ::after {
        box-sizing: border-box;
      }
      .mystyle {
        font-family: "Quicksand", sans-serif;
        text-align: center;
        line-height: 1.5em;
      }
      hr {
        border: none;
        background: #e0e4cc;
        height: 1px;
        /*   width:60%;
  display:block;
  margin-left:0; */
      }
      .container {
        max-width: 800px;
        margin: 1em auto;
        background-color:#111;
        padding: 30px;
        border-radius: 5px;
      }
      .productcont {
        display: flex;
      }
      .product {
        padding: 1em;
        border: 1px solid #e0e4cc;
        margin-right: 1em;
        border-radius: 5px;
      }
      .cart-container {
        border: 3px solid #d4ff00;
        border-radius: 5px;
        margin-top: 1em;
        padding: 1em;
        background-color:rgba(255, 255, 255, 0.741);
      }
      button,
      input[type="submit"] {
        display: flex;
        justify-content: center;
        width: 40px;
        background-color: hwb(60 0% 0%);
        color: rgb(52, 42, 42);

        align-self: center;
      }
      button:hover,
      button:focus,
      button:active,
      input[type="submit"]:hover,
      input[type="submit"]:focus,
      input[type="submit"]:active {
        background: #a7dbd8;

        color: rgb(255, 0, 0);
        cursor: pointer;
      }
      table {
        margin-bottom: 1em;
        border-collapse: collapse;
      }
      table td,
      table th {
        text-align: left;
        padding: 0.25em 1em;
        border-bottom: 1px solid #e0e4cc;
      }
      #carttotals {
        margin-right: 0;
        margin-left: auto;
      }
      .cart-buttons {
        width: auto;
        margin-right: 0;
        margin-left: 0;
        display: flex;
        justify-content: flex-end;
        padding: 1em 0;
        
      }
      #emptycart {
        border-radius: 5px;
        background-color: transparent;
        border: 1px solid black;
        width: 100px;
        margin-right: 1em;
      }
      #checkout {
        border-radius: 5px;
        background-color: transparent;
        border: 1px solid black;
        width: 100px;
        margin-right: 1em;
      }
      table td:nth-last-child(1) {
        text-align: right;
      }
      .message {
        border-width: 1px 0px;
        border-style: solid;
        border-color: #a7dbd8;
        color: #679996;
        margin:5px 0;
        transition :1s;
      }
    
    </style>
  </head>
  <body>
    <header>
      <nav class="navigation">
        <div id="mySidepanel" class="sidepanel">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            >&times;</a
          >
          <a href="#">
            <button class="accordion">About Project</button>
            <div class="panel">
              Introduction : <br />br As we all know that, Technology is running
              faster than a bullet in this era .In today’s generation,
              everything is being done digitally. Because of this digital
              technology, all our work is getting easier. From cheap to
              expensive, everything is being bought digitally and cashless. So,
              we have decided to introduce Digital Canteen in our college.
            </div>
          </a>
          <a href="#">
            <button class="accordion">Team Member's</button>
            <div class="panel" style="font-size: 20px">
              21CO27 - Khan Mohd Ahmed
              <br />
              21CO40 - Sameer Shah
              <br />
              21CO43 - Amaan Shaikh
            </div></a
          >

          <a href="#">
            <button class="accordion">Feedback</button>
            <div class="panel">
              <form action="#">
                Enter your feedback below
                <br /><br />
                <textarea
                  name="Sameer"
                  id=""
                  cols="30"
                  rows="4"
                  placeholder="Enter Here"
                ></textarea>
                <button type="submit">Submit</button>
              </form>
            </div></a
          >
        </div>

        <button class="openbtn" onclick="openNav()">&#9776;</button>

        <h1>DIGITAL CANTEEN</h1>

        <div>
          <a href="https://aiktc.ac.in/"
            ><img class="aiktc" src="aiktc.png" alt=""
          /></a>
        </div>
      </nav>
      <div class="index">
        <div class="i1">
          <h5>I'm <span class="auto-type"></span></h5>
        </div>
        <div class="i2">
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Food Item's</button>
            <div id="myDropdown" class="dropdown-content">
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('hot'))"
                >1.Hot Beverage's</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('snacks'))"
                >2.Snacks</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('bf'))"
                >3.Break Fast</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('noodle'))"
                >4.Chinese (Noodle)</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('rice'))"
                >5.Chinese(Rice)</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('veg'))"
                >6.Veg</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('nvd'))"
                >7.Non-Veg Dry</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('soup'))"
                >8.Soup</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('thali'))"
                >9.Our Thali's</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('biryani'))"
                >10.Chicken Biryani's</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('sea'))"
                >11.Sea Food</a
              >
              <a
                href="#"
                class="click"
                onclick="smoothScroll(document.getElementById('mutton'))"
                >12.Mutton</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class = "internal" >
           <div id="alerts"></div>
      </div>
     
    </header>

    <div id="mySidenav" class="sidenav">
      
      <a href="javascript:void(0)" class="closeelm" onclick="closeElm()"
        >&times;</a>
      <div class="mystyle">
        <div class="container">
           
         
      

        
        </div>
        <div class="cart-container">
          <h2>Your Selected Item's</h2>
          <form action="#">
          <table>
            <thead>
              <tr>
                <th><strong>Food Item's</strong></th>
                <th><strong>Price</strong></th>
              </tr>
            </thead>
            <tbody id="carttable"></tbody>
          </table>
          <hr />
          <table id="carttotals">
            <tr>
              <td><strong>Items</strong></td>
              <td><strong>Total</strong></td>
            </tr>
            <tr>
              <td>x <span id="itemsquantity">0</span></td>

              <td>₹<span id="total">0</span></td>
            </tr>
          </table> <button type="button" onclick="demo()" class="block">Place The Order !</button> 
        </form>
          <div class="cart-buttons">
            <button id="emptycart">Empty Cart</button>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Use any element to open the sidenav -->
    <div class="openelm" id="openelm" onclick="openElm()">
      <h1 class="x"></h1>
      <img src="fork.png" alt="" height="20px" class="rotate">
    </div>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

    <main>
      <div class="control">
        <div class="box">
          <!-- scroll for hot -->
          <div id="hot"></div>

          <div class="b1">
            <div class="tag">
              <div class="icon">
                <img
                  class="iconsize"
                  src="food_a-removebg-preview.png"
                  alt=""
                />
              </div>
              <div class="second" id=""><h3>Hot Beverage's</h3></div>
            </div>
            <!-- product= first -->
            <div class="first">
              <div class="productname"># Tea</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 10</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>

            <div class="first">
              <div class="productname"># Coffe</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 10</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="snacks"></div>
            <div class="first">
              <div class="productname"># Milk</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 15</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Black Tea</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 10</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Masala Tea</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 10</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>

          <div class="b2">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (10).png" alt="" />
              </div>
              <div class="second"><h3>Snacks</h3></div>
            </div>
            <div class="first">
              <div class="productname"># Vada Pav </div>
              <!-- productname = food -->
              
              <div class="price"><h5>₹ 10</h5> </div>
             
              <button class="addtocart"><h5>Add</h5></button>
            
          </div>
          <div class="first">
            <div class="productname"># Samosa Pav</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 10</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
          <div class="first">
            <div class="productname"># Cotlate Pav</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 10</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
          <div class="first">
            <div class="productname"># Omlate Pav</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 10</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
          <div class="first">
            <div class="productname"># Poha</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 10</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
          <div class="first">
            <div class="productname"># Upma</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 10</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
          <div id="bf"></div>
          <div class="first">
            <div class="productname"># Idli Vada</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 10</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
          <div class="first">
            <div class="productname"># Sheera</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 20</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
          <div class="first">
            <div class="productname"># Usal</div>
            <!-- productname = food -->

            <div class="price"><h5>₹ 40</h5></div>

            <button class="addtocart"><h5>Add</h5></button>
          </div>
         
        </div>


            <!--    ------------------------------------------------------------------ -->
            
            
            <!-- scroll for bf -->
            
            


          <div class="b10">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (4).png" alt="" />
              </div>
              <div class="second" id=""><h3>Break Fast</h3></div>
            </div>

            <div class="first">
              <div class="productname"># Cheese Burger</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Ham Burgerea</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Burger</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Fish Burger</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Viggie Burger</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Pizza Mergherita</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Pizza Capricciosa</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="noodle"></div>
            <div class="first">
              <div class="productname"># Pizza Mushroom</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Pizza Maxicon</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Pizza Marinara</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>

          
            
           
          <div class="b3">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="Noodles.png" alt="" />
              </div>
              <div class="second" id=""><h3>Chinese (Noodle)</h3></div>
            </div>
            <div class="first">
              <div class="productname"># Chicken Fried Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Sezwan Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Maleycian Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Manchurian Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Hakka Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Triple Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Hong Kong Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="rice"></div>
            <div class="first">
              <div class="productname"># Chicken Singapore Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Egg Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Egg Sezwan Noodle's</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>  


            
          













          <div class="b4">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (9).png" alt="" />
              </div>
              <div class="second" id=""><h3>Chinese (Rice)</h3></div>
            </div>
            <div class="first">
              <div class="productname"># Chicken Fried Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Sezwan Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Maleycian Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Manchurian Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Hakka Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Triple Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Hong Kong Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Singapore Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="veg"></div>
            <div class="first">
              <div class="productname"># Egg Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Egg Sezwan Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>
  

         





          <div class="b5">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (5).png" alt="" />
              </div>
              <div class="second" id=""><h3>Veg</h3></div>
            </div>
            <div class="first">
              <div class="productname"># Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Plain Dal</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Bhaji</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Special Bhaji</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Puri Chapati</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Dahi</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Steam Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Curd Rice</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="nvd"></div>
            <div class="first">
              <div class="productname"># Veg Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Veg Pulao</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Paneer Tikka</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>

           
          



          

          <div class="b6">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (2).png" alt="" />
              </div>
              <div class="second" id=""><h3>Non-Veg Dry</h3></div>
            </div>
                        <!-- -------------------------------------------------------- -->
                        <div class="first">
                          <div class="productname"># Chicken Chilly Dry</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 90</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                        <div class="first">
                          <div class="productname"># Chicken Chilly Gravy</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 80</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                        <div class="first">
                          <div class="productname"># Chicken Malaysian Dry</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 60</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                        <div class="first">
                          <div class="productname"># Chicken Manchurian Gravy</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 50</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                        <div class="first">
                          <div class="productname"># Chicken Lolly Pop Dry</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 50</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                        <div id="soup"></div>
                        <div class="first">
                          <div class="productname"># Chicken Lolly Pop Gravy</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 60</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                        <div class="first">
                          <div class="productname"># Butter Chicken</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 200</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                        <div class="first">
                          <div class="productname"># Chicken 65</div>
                          <!-- productname = food -->
            
                          <div class="price"><h5>₹ 180</h5></div>
            
                          <button class="addtocart"><h5>Add</h5></button>
                        </div>
                  </div>

          <div class="b7">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (8).png" alt="" />
              </div>
              <div class="second" id=""><h3>Soup</h3></div>
            </div>

            <div class="first">
              <div class="productname"># Chicken Manchow Soup</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="thali"></div>
            <div class="first">
              <div class="productname"># Hong Kong Soup</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Sweet Corn Soup</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Egg Soup</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>
     
          <div class="b8">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (9).png" alt="">
              </div>
              <div class="second" id=""><h3>Our Thali's</h3></div>
            </div>
            
            <div class="first">
              <div class="productname"># Mini Thali</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="biryani"></div>
            <div class="first">
              <div class="productname"># Special Thali</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 70</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>

            <div class="first">
              <div class="productname"># Dal Goast</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>

          <div class="b9">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (7).png" alt="" />
              </div>
              <div class="second" id=""><h3>Chicken Biryani's</h3></div>
            </div>
            <div class="first">
              <div class="productname"># Dum Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Seek Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Tikka Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 70</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Hyderabdi Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 100</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Royal Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 140</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Nizami Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 120</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="sea"></div>
            <div class="first">
              <div class="productname"># Egg Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Chicken Pulao</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Zam Zam Pulao</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 150</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>

          <div class="b11">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (11).png" alt="" />
              </div>
              <div class="second" id=""><h3>Sea Food</h3></div>
            </div>

            <div class="first">
              <div class="productname"># Fish Bhunna</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div id="mutton"></div>
            <div class="first">
              <div class="productname"># Fish Makhni</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 40</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Fish Chowder</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Fish Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>

          <div class="b12">
            <div class="tag">
              <div class="icon">
                <img class="iconsize" src="food 1 (12).png" alt="" />
              </div>
              <div class="second" id=""><h3>Mutton</h3></div>
            </div>

            <div class="first">
              <div class="productname"># Mutton Keema</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 30</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Mutton Fry</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 50</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Mutton Korma</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Mutton Kassa</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 70</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
            <div class="first">
              <div class="productname"># Mutton Biryani</div>
              <!-- productname = food -->

              <div class="price"><h5>₹ 60</h5></div>

              <button class="addtocart"><h5>Add</h5></button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <p>Copyright &copy; All Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    "

    <script>
      var typed = new Typed(".auto-type", {
        strings: ["Coding ... ", "Sleeping", "Eating"],
        typeSpeed: 150,
        backSpeed: 150,
        loop: true,
      });
    </script>

    <script>
      /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function (event) {
        if (!event.target.matches(".dropbtn")) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
              openDropdown.classList.remove("show");
            }
          }
        }
      };
    </script>

    <script>
      /* Set the width of the sidebar to 250px (show it) */
      function openNav() {
        document.getElementById("mySidepanel").style.width = "100%";
      }

      /* Set the width of the sidebar to 0 (hide it) */
      function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
      }
    </script>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
          this.classList.toggle("active");

          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
    </script>

    
    <script>
      
      window.smoothScroll = function (target) {
        var scrollContainer = target;
        do {
          //find scroll container
          scrollContainer = scrollContainer.parentNode;
          if (!scrollContainer) return;
          scrollContainer.scrollTop += 1;
        } while (scrollContainer.scrollTop == 0);

        var targetY = 0;
        do {
          //find the top of target relatively to the container
          if (target == scrollContainer) break;
          targetY += target.offsetTop;
        } while ((target = target.offsetParent));

        scroll = function (c, a, b, i) {
          i++;
          if (i > 30) return;
          c.scrollTop = a + ((b - a) / 30) * i;
          setTimeout(function () {
            scroll(c, a, b, i);
          });
        };
        // start scrolling
        scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
      };
    </script>

    <!-- side navigation -->
    <script>
      function openElm() {
        document.getElementById("mySidenav").style.width = "100%";
      }

      /* Set the width of the side navigation to 0 */
      function closeElm() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>

    <script>
    
    
    
      /* get cart total from session on load */
      updateCartTotal();

      /* button event listeners */
      document.getElementById("emptycart").addEventListener("click", emptyCart);
      var btns = document.getElementsByClassName("addtocart");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
          addToCart(this);
        });
      }

      /* ADD TO CART functions */
        var cart = [];
  
      function addToCart(elem) {
        //init
        var sibs = [];
        var getprice;
        var getproductName;
//        var cart = [];
        var stringCart;
        //cycles siblings for product info near the add button
        while ((elem = elem.previousSibling)) {
          if (elem.nodeType === 3) continue; // text node
          if (elem.className == "price") {
            getprice = elem.innerText;
          }
          if (elem.className == "productname") {
            getproductName = elem.innerText;
          }
          sibs.push(elem);
        }
        //create product object
        var product = {
          productname: getproductName,
          price: getprice,
        };
        //convert product data to JSON for storage
        var stringProduct = JSON.stringify(product);
        /*send product data to session storage */

        if (!sessionStorage.getItem("cart")) {
          //append product JSON object to cart array
          cart.push(stringProduct);
          //cart to JSON
          stringCart = JSON.stringify(cart);
          //create session storage cart item
          sessionStorage.setItem("cart", stringCart);
          addedToCart(getproductName);
          updateCartTotal();
        } else {
          //get existing cart data from storage and convert back into array
          cart = JSON.parse(sessionStorage.getItem("cart"));
          //append new product JSON object
          cart.push(stringProduct);
          //cart back to JSON
          stringCart = JSON.stringify(cart);
          //overwrite cart data in sessionstorage
          sessionStorage.setItem("cart", stringCart);
          addedToCart(getproductName);
          updateCartTotal();
        }
      };
      /* Calculate Cart Total */
      function updateCartTotal() {
        //init
        var total = 0;
        var price = 0;
        var items = 0;
        var productname = "";
        var carttable = "";
var proname=[];
var price1=[];

        if (sessionStorage.getItem("cart")) {
          //get cart data & parse to array
          var cart = JSON.parse(sessionStorage.getItem("cart"));
          //get no of items in cart
          items = cart.length;
          //loop over cart array
          for (var i = 0; i < items; i++) {
            //convert each JSON product in array back into object
            var x = JSON.parse(cart[i]);
            //get property value of price
            price = parseFloat(x.price.split("₹")[1]);
            productname = x.productname;
            //add price to total
            carttable +=
              "<tr><td>" +
              productname +
              "</td><td>₹" +
              price.toFixed(2) +
              "</td></tr>";
            total += price;
             // const arr=productname;
proname.push(x.productname);
price1.push(price);

        }
console.log(price1);
console.log(proname);


      }
        //update total on website HTML
        document.getElementById("total").innerHTML = total.toFixed(2);
        //insert saved products to cart table
        document.getElementById("carttable").innerHTML = carttable;
        //update items in cart on website HTML
        document.getElementById("itemsquantity").innerHTML = items;

      }

function demo()
         {  
         
        var total = 0;
        var price = 0;
        var items = 0;
        var productname = "";
        var carttable = "";
var proname=[];
var price1=[];

        if (sessionStorage.getItem("cart")) {
          //get cart data & parse to array
          var cart = JSON.parse(sessionStorage.getItem("cart"));
          //get no of items in cart
          items = cart.length;
          //loop over cart array
          for (var i = 0; i < items; i++) {
            //convert each JSON product in array back into object
            var x = JSON.parse(cart[i]);
            //get property value of price
            price = parseFloat(x.price.split("₹")[1]);
            productname = x.productname;
            //add price to total
         
proname.push(x.productname);
price1.push(price);

          }
console.log(price1);
console.log(proname);
}              
               

alert("Thank you for ordering from Digital Canteen"); 
$.ajax({
url:"connec.php",
method: "post",
data:{e: JSON.stringify(proname),e1:JSON.stringify(price1)},
success:function(res)
{
console.log(res);
}
})

emptyCart();

}

      //user feedback on successful add
      function addedToCart(pname) {

        var message = pname + " was added to the cart";
        var alerts = document.getElementById("alerts");
        alerts.innerHTML = message;
        if (!alerts.classList.contains("message")) {
          alerts.classList.add("message");
        }
      
      }
      /* User Manually empty cart */
      function emptyCart() {
        //remove cart session storage object & refresh cart totals
        if (sessionStorage.getItem("cart")) {
          sessionStorage.removeItem("cart");
          updateCartTotal();
          //clear message and remove class style
          var alerts = document.getElementById("alerts");
          alerts.innerHTML = "";
          if (alerts.classList.contains("message")) {
            alerts.classList.remove("message");
          }
        }
      }
    </script>
    

  </body>
</html>
