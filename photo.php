<!DOCTYPE html>
<html>
<head>
  <title>Моя сторінка</title>
  <style>
    .my-info {
      background-color: #f5f5f5;
      padding: 20px;
      margin-bottom: 20px;
    }

    .my-info h2 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .my-info p {
      color: #666;
      font-size: 16px;
      margin-bottom: 10px;
    }

    .carousel-item img {
      height: 300px; /* Встановіть висоту зображення за потребою */
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      color: #fff;
      bottom: 0;
      width: 100%;
      text-align: center;
    }

    .carousel-caption h5 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .carousel-caption p {
      font-size: 14px;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="my-info">
    <h2>Про мене</h2>
    <p>Вітаю! Мене звуть [ваше ім'я]. Я є [посада або професія]. Захоплююся [захоплення].</p>
    <p>Тут ви можете дізнатися більше про мене та мою роботу.</p>
  </div>

  

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js"></script>
</body>
</html>
