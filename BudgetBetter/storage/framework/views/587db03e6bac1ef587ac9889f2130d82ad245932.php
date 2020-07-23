<!DOCTYPE html>
<html>
  <head>
    <title>Sign-Up</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 10px 0 #774a03; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/f1cf9a9068f4bfbdbd9758c45db79203579a3561.jpeg");      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      background-color: #d0cba4;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, input:hover::placeholder {
      color: #774a03;
      }
      .item input:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #774a03;
      color: #774a03;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #818b34;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #ff0066;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .contact-item .item {
      width: calc(50% - 8px);
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item input {
      width: calc(100% - 12px);
      }
      }

      input[type="date" i] {
        align-items: center;
        display: -webkit-inline-flex;
        font-family: monospace;
        padding-inline-start: 1px;
        cursor: default;
        overflow: hidden;
        padding: 0px;
      }

      input {
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark-color(black, white);
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        -webkit-appearance: textfield;
        background-color: -internal-light-dark-color(rgb(255, 255, 255), rgb(59, 59, 59));
        -webkit-rtl-ordering: logical;
        cursor: text;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 2px;
        border-width: 2px;
        border-style: inset;
        border-color: -internal-light-dark-color(rgb(118, 118, 118), rgb(195, 195, 195));
        border-image: initial;
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Sign-Up</h1>
        </div>
        <div class="experience">
        <div class="item">
          <p>What experience are you budgeting for?</p>
            <input type="text" name="experience" placeholder="i.e. Study abroad, Internship, Semester"" />
          </div>
        </div>
        <div class="location">
          <div class="item">
            <p>What location will you be in?</p>
            <input type="text" name="location"placeholder= "i.e. Study abroad, Internship, Semester""/>
          </div>
          <div class="item">
            <p>How long will your experience be?</p>
            <input type="text" name="length" placeholder= "i.e. Days/Weeks/Months""/>
          </div>
        </div>
        <div class="item">
          <p>Your program start date</p>
          <input type="date"></textarea>
        </div>
        <div class="item">
          <p>Your program end date</p>
          <input type="date"></textarea>
        </div>
        <div class="item">
          <p>Student Status</p>
          <input type="text" name="name" placeholder= "i.e. Full-time, Part-time, N/A" />
        </div>
        <div class="item">
          <p>Describe your upcoming experience:</p>
          <textarea rows="3" required></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">SUBMIT</button>
        </div>
      </form>
    </div>
  </body>
</html><?php /**PATH /Users/mikael/Documents/GitHub/budget-better/BudgetBetter/resources/views/signup.blade.php ENDPATH**/ ?>