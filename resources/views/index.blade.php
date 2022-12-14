<html>
<head>
  <title>Shopicon Api</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link href="assets/css/jquery.json-viewer.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">
</head>
<body>
  <h1>
    <i class="fa-brands fa-laravel fa-2x"></i>
    &nbsp;
    <span>Demo E-Shop API endpoints</span>
  </h1>

  <div class="endpoint-list">
    <div class="endpoint">
      <div class="title">
        <span class="request-method" class="request-method">GET</span>
        <span class="url">/</span>
        <button><i class="fa-solid fa-play fa-lg"></i></button>
        <a href="https://github.com/ktsalik/demo-eshop-api/blob/master/app/Http/Controllers/ApiController.php#L11">View Code</a>
      </div>
      <div class="output">

      </div>
    </div>

    <div class="endpoint">
      <div class="title">
        <span class="request-method">GET</span>
        <span class="url">/products/:categoryId</span>
        <button><i class="fa-solid fa-play fa-lg"></i></button>
        <a href="https://github.com/ktsalik/demo-eshop-api/blob/master/app/Http/Controllers/ApiController.php#L18">View Code</a>
      </div>
      <div class="output">

      </div>
    </div>

    <div class="endpoint">
      <div class="title">
        <span class="request-method">GET</span>
        <span class="url">/products/:productId/:productName</span>
        <button><i class="fa-solid fa-play fa-lg"></i></button>
        <a href="https://github.com/ktsalik/demo-eshop-api/blob/master/app/Http/Controllers/ApiController.php#L44">View Code</a>
      </div>
      <div class="output">

      </div>
    </div>

    <div class="endpoint">
      <div class="title">
        <span class="request-method">GET</span>
        <span class="url">/categories</span>
        <button><i class="fa-solid fa-play fa-lg"></i></button>
        <a href="https://github.com/ktsalik/demo-eshop-api/blob/master/app/Http/Controllers/ApiController.php#L53">View Code</a>
      </div>
      <div class="output">

      </div>
    </div>

    <div class="endpoint">
      <div class="title">
        <span class="request-method">POST</span>
        <span class="url">/login</span>
        <button><i class="fa-solid fa-play fa-lg"></i></button>
        <a href="https://github.com/ktsalik/demo-eshop-api/blob/master/app/Http/Controllers/ApiController.php#L71">View Code</a>
        <form>
          <input type="email" name="email" value="john@test.gr" />
          <input type="password" name="password" value="1234" />
        </form>
      </div>
      <div class="output">

      </div>
    </div>

    <div class="endpoint">
      <div class="title">
        <span class="request-method">POST</span>
        <span class="url">/register</span>
        <button><i class="fa-solid fa-play fa-lg"></i></button>
        <a href="https://github.com/ktsalik/demo-eshop-api/blob/master/app/Http/Controllers/ApiController.php#L99">View Code</a>
        <form>
          <input type="email" name="email" value="john@test.gr" />
          <input type="password" name="password" value="1234" />
          <input type="password" name="password-check" value="1234" />
        </form>
      </div>
      <div class="output">

      </div>
    </div>

    <div class="endpoint">
      <div class="title">
        <span class="request-method">POST</span>
        <span class="url">/logout</span>
        <button><i class="fa-solid fa-play fa-lg"></i></button>
        <a href="https://github.com/ktsalik/demo-eshop-api/blob/master/app/Http/Controllers/ApiController.php#L130">View Code</a>
      </div>
      <div class="output">

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.json-viewer.js"></script>
  <script src="assets/js/index.js"></script>
</body>
</html>