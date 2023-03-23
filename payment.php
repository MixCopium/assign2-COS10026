<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A simple enquire page">
    <meta name="keywords" content="HTML, simple, webpage">
    <meta name="author" content="Nguyen Gia Binh">
    <!-- responsive setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- logo link -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="images/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="images/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="images/favico/favicon-16x16.png">
    <link rel="manifest" href="images/favico/site.webmanifest">


    <!-- css style link -->
    <link rel="stylesheet" href="./styles/enhancements.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Enquire</title>
</head>

<body>
<?php include 'includes/header.inc'; ?>     
    <main id="enquire">
      <h1>Contact us</h1>
      <article class="form">
        <h2>Product Enquire Form</h2>
        <form  method="post" action="process_order.php" novalidate>
        <fieldset class="part">
  <!-- first row for contact: Name (crucial) -->
            <div class="row_01">
  
              <div class="column">
                  <label class="text_Float_left" for="fName">First name</label>
                  <br>
                  <input class="input_text_2  in_range_stuff" id="fName" type="text" name="uname" placeholder="e.g: Nguyen" maxlength="25" pattern="[a-zA-Z\s]*" required>
              </div>
  
              <div class="column2">
                  <label class="text_Float_left" for="lName">Last name</label>
                  <br>
                  <input class="input_text_2  in_range_stuff" id="lName" type="text" name="uname" placeholder="Dat Ky" maxlength="25" pattern="[a-zA-Z\s]*" required>
              </div>
           </div>
  <!-- second row for contact: info to sell away :) (crucial) -->
          <div class="row2">
  
            <div class="column">
              <label class="text_Float_left" for="email">Email</label>
              <br>
              <input class="input_text_2  in_range_stuff" type="email" id="email"
                name="email" placeholder="lmao@lalaland.com" required>
            </div>
  
            <div class="column2">
              <label class="text_Float_left" for="Pnumb">Phone number</label>
              <br>
              <input class="input_text_2  in_range_stuff" id="Pnumb" type="text" name="phone number" placeholder="e.g: 09x xxx xxxx" maxlength="10"  pattern="\d{10}">
            </div>
          </div>
  <!-- Less crucial contact info: Address in general -->
          <div>
            <fieldset class="part" id="fieldSet2">
              <label class="text_Float_left" for="sAdr">Street Address</label>
              <input class="input_text in_range_stuff" id="sAdr" type="text"
                name="uname" placeholder="Your Address" maxlength="40" required>
  
              <label class="text_Float_left" for="dAdr">Suburb/Town</label>
              <input class="input_text in_range_stuff" id="dAdr" type="text"
                name="uname" placeholder="What District" maxlength="20" required>
  
              <label class="text_Float_left" for="cAdr">State</label>
              <select name="state" id="cAdr" required>
                <option value>Select one</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
              </select>
  
              <label class="text_Float_left" for="pAdr">Postcode</label>
              <input class="input_text in_range_stuff" id="pAdr" type="text"
                name="postcode" placeholder="Bet you need to look it up online!!!"
                maxlength="4" pattern="\d{4}" required>
  
            </fieldset>
  
          </div>
  <!-- Radio and checkbox and select for choosing what the customer want to ask or whatever -->
          <div class="part flex">
  
            <label class="choice_label">Preferred Contact</label>
  
            <div class="option_content">
              <label class="precon_label" for="email2"> <input id="email2"
                  type="radio" name="contact" value="Email" checked> Email
              </label>
  
              <label class="precon_label" for="phone"> <input id="phone"
                  type="radio" name="contact" value="Phone"> Phone </label>
  
              <label class="precon_label" for="post"> <input id="post"
                  type="radio" name="contact" value="Post"> Post </label>
            </div>
  
  
  
          </div>
  
          <div class="part product_option">
            <label class="choice_label ">Which book do you want to order:</label>
  
            <select name="book">
              <option class="select_text" value="book_1">Harry Potter</option>
              <option class="select_text" value="book_1">Linear Algebra</option>
              <option class="select_text" value="book_1">Calculus</option>
            </select>
          </div>
  
          <div class="part">
  
            <label class="choice_label">choose order types:</label>
  
            <div class="option_div">
  
              <ul>
                <li class="Option">
                  <label for="Opt_1"> <input class="checkbox" type="checkbox"
                      id="Opt_1" name="type[]" value="E-book included">E-book
                    included</label>
                </li>
  
                <li class="Option">
                  <label for="Opt_2"> <input class="checkbox" type="checkbox"
                      id="Opt_2" name="type[]" value="Hardback">Hardback</label>
                </li>
  
                <li class="Option">
                  <label for="Opt_3"> <input class="checkbox" type="checkbox"
                      id="Opt_3" name="type[]" value="Merch included"> Merch
                    included</label>
                </li>
              </ul>
            </div>
          </div>
  
          <br>
          <br>
  <!-- Simple text area for customer to express -->
          <div>
            <textarea name="comment"
              placeholder="What do you want to say?"></textarea>
          </div>
        </fieldset>
 <!-- Submit button  -->
        <div class="submit">
          <input type="submit" id="submit" class="btn" title="Send"
            value="Submit">
        </div>
      </form>
      </article>
    </main>
    <?php include 'includes/footer.inc'; ?>  
</body>

</html>