@extends('Frontend.layouts.master') @section('main-content')
<!--Hero Section-->
<style>
  textarea {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  input[type=text],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .container-t {
    border-radius: 5px;
    max-width: 750px;
    margin: 0 auto;
    background-color: #f2f2f2;
    padding: 20px;
  }

  #form-t {
    text-align: left;
  }
</style>
<div>
  <h1 class="page-title">Contact Us</h1>
</div>
<!--Navigation section-->
<div class="container">
  <nav class="biolife-nav">
    <ul>
      <li class="nav-item">
        <a href="index-2.html" class="permal-link">Home</a>
      </li>
      <li class="nav-item">
        <span class="current-page">About Us</span>
      </li>
    </ul>
  </nav>
</div>
<div class="page-contain shopping-cart">
  <!-- Main content -->
  <section class="sds-page-section contact-connect-section">
    <div class="biolife-title-box lg-margin-bottom-26px-im">
      <h2 class="main-title">Have a question? Let&#39;s connect</h2>
      <!-- <span class="subtitle">Frequently Asked Questions</span> -->
      <br>
      <br>
      <div class="column">
        <h2>SEND CONTACT</h2>
        <div class="container-t">
          <form id="form-t" action="/action_page.php">
            <label for="fname">Your Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
            <label for="lname">Email</label>
            <input type="text" id="email" name="email">
            <label for="lname">Phone</label>
            <input type="text" id="phone" name="phone">
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" style="height:100px"></textarea>
            <input type="submit" value="Send">
          </form>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <iframe style="width:50%;height:300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.7706907224086!2d106.63669782916371!3d10.80497311684742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175295a42bb0eb3%3A0x3a6d325cc846ffe!2zQ8O0bmcgVHkgVG5oaCBD4bqjbmggUXVhbiBUcuG6uw!5e0!3m2!1svi!2s!4v1559676896551!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
</div> @endsection