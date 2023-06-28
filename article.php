<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Випічка</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url("R.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
      color: #fff;
    }
    
    .car-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    
    .car {
      width: 400px;
      margin: 20px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      overflow: hidden;
    }
    
    .car img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
    
    .car-details {
      padding: 20px;
    }
    
    .car-title {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }
    
    .car-description {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
    }
    
    .car-history {
      font-size: 14px;
      color: #888;
    }
    
    .frame {
      border: 2px solid #ff9800;
      padding: 10px;
      border-radius: 5px;
    }
    
    .button-container {
      position: absolute;
      top: 20px;
      left: 20px;
    }
    
    .button {
      padding: 10px 20px;
      background-color: #ff9800;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="button-container">
    <button class="button" onclick="window.location.href = 'index.html'">Повертатися</button>
  </div>
  
  <h1>Випічка</h1>
  
  <div class="car-container">
  <div class="car">
      <div class="frame">
        <img src="3.jpg" alt="Равіолі">
      </div>
      <div class="car-details">
        <h2 class="car-title">Равіолі</h2>
        <p class="car-description">Равіолі - це італійські м'ясні або сирні пельмені, зроблені з тонкого шару тіста. Вони наповнюються начинкою з м'яса, сиру, овочів або комбінації цих інгредієнтів. Равіолі можна подавати з різними соусами, такими як томатний соус, вершковий соус або соус з грибів.</p>
    
      </div>
    </div>
    
    <div class="car">
      <div class="frame">
        <img src="2.jpg" alt="Каннелоні">
      </div>
      <div class="car-details">
        <h2 class="car-title">Каннелоні</h2>
        <p class="car-description">Каннелоні - це італійська страва, яка складається з трубчастих шматочків тіста, які заповнюються начинкою, зазвичай сиром або м'ясом. Заповнені каннелоні заливають соусом, часто томатним або бешамель, і запікають у печі до отримання золотистої скоринки.</p>
       
      </div>
    </div>
    
    <div class="car">
      <div class="frame">
        <img src="1.jpg" alt="Штрудель">
      </div>
      <div class="car-details">
        <h2 class="car-title">Штрудель</h2>
        <p class="car-description">Штрудель - це австрійський десерт, який складається з тонкого шару тіста, що містить фруктову або солодку начинку. Популярними начинками для штруделю є яблука, вишні, вішні, груші або сир. Штрудель запікається у печі до золотистого кольору та подається з ванільним соусом або шарлоткою.</p>
        
      </div>
    </div>

    
  </div>
</body>
</html>



