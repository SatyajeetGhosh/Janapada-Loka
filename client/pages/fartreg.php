<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .goog-te-banner-frame.skiptranslate,
    .goog-te-gadget-simple img {
      display: none !important;
    }

    .goog-tooltip {
      display: none !important;
    }

    .goog-tooltip:hover {
      display: none !important;
    }

    .goog-text-highlight {
      background-color: transparent !important;
      border: none !important;
      box-shadow: none !important;
    }

    body {
      top: 0px !important;
    }

    /* #google_translate_element:hover{
      padding-bottom: 1em !important;
    } */

    .VIpgJd-ZVi9od-xl07Ob-lTBxed:hover {
      text-decoration: none !important;
    }

    .n1:hover::after {
      -webkit-transform: scaleX(0) !important;
      transform: scaleX(0) !important;
    }
  </style>
</head>


<body>


  <div class="container">
    <div class="title">Artisian Registration</div>
    <div class="content">
      <form name="registrationForm"  action="bartreg.php" method="post">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Change Language</span>
            <!-- <input type="text" placeholder="Enter your name" name="name" required> -->
            <a href="#" id="google_translate_element"></a>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Mobile</span>
            <input type="text" placeholder="Enter your phone Number" name="phnumber" required>
          </div>

          <div class="input-box">
            <span class="details">Alternate Mobile</span>
            <input type="text" placeholder="Enter alternate phone Number" name="altmob" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <textarea type="text" placeholder="Enter Address" name="address" required></textarea>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your e-mail" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Postal Code</span>
            <input type="text" placeholder="Enter your postal code" name="postalcode" required>
          </div>
          <div class="input-box">
            <span class="details">Emergency Contact Number</span>
            <input type="text" placeholder="Enter Emergency Number" name="emphno" required>
          </div>
          <div class="input-box">
            <span class="details">Photo</span>
            <input type="file" placeholder="Upload you Picture" name="photo" required>
          </div>
          <div class="input-box">
            <span class="details">Occupation</span>
            <input type="text" placeholder="Enter your Occupation" name="occupation" required>
          </div>
          <div class="input-box">
            <span class="details">Experience</span>
            <input type="text" placeholder="Enter your Experience" name="experience" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" placeholder="Enter your DOB" name="dob" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar Number</span>
            <input type="text" placeholder="Enter your Aadhar Number" name="Aadhar" required>
          </div>
          <div class="input-box">
            <span class="details">PAN number</span>
            <input type="text" placeholder="Enter your PAN number" name="PAN" required>
          </div>
          <div class="input-box">
            <span class="details">Name of the bank</span>
            <input type="text" placeholder="Enter Name of the bank" name="bank" required>
          </div>

          <div class="input-box">
            <span class="details">Account Number</span>
            <input type="text" placeholder="Enter Account Number" name="accno" required>
          </div>

          <div class="input-box">
            <span class="details">Account Holder Name</span>
            <input type="text" placeholder="Enter Account Holder Name" name="accholder" required>
          </div>
          <div class="input-box">
            <span class="details">Branch Name</span>
            <input type="text" placeholder="Enter Branch Name" name="Branch" required>
          </div>
          <div class="input-box">
            <span class="details">IFSC Code</span>
            <input type="text" placeholder="Enter IFSC Code" name="IFSC" required>
          </div>
          <div class="input-box">
            <span class="details">MICR code</span>
            <input type="text" placeholder="MICR code" name="MICR" required>
          </div>
          
        </div>
        
        <div class="button">
            <input type="submit" value="Submit">
          </div>
      </form>
      
    </div>
  </div>
  <script type="text/JavaScript"
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        defaultLanguage: 'en',
        pageLanguage: 'en',
        includedLanguages: 'kn,en,hi,ml',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false,
        multilanguagePage: true
      }, 'google_translate_element')

    };
  </script>
  <footer></footer>
 
  </script>
</body>

</html>