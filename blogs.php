<?php include "template/header.php"; ?>
<style>

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
      box-sizing: border-box;
      direction: rtl;
    }

    .card {
      width: 400px;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      margin: 10px;
      cursor: pointer;
      transition: 0.5s;
    }
.card:hover {
  width: 450px;
 }
    .card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    h2 {
      margin-top: 0;
    }
    </style>
<!--cards-->
<div class="card-container">
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amateur-made_Na%27vi.jpg" alt="Card Image 1">
    <div class="card-content">
      <h3>الحلقة الثالثة في برمجة لغة سي</h3>
      <p>تكملة الوضع الأول، كيف كان جميل</p>
    </div>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/150" alt="Card Image 2">
    <div class="card-content">
      <h2>Card 2</h2>
      <p>This is the content of the second card.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/150" alt="Card Image 3">
    <div class="card-content">
      <h2>Card 3</h2>
      <p>This is the content of the third card.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/150" alt="Card Image 4">
    <div class="card-content">
      <h2>Card 4</h2>
      <p>This is the content of the fourth card.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/150" alt="Card Image 5">
    <div class="card-content">
      <h2>Card 5</h2>
      <p>This is the content of the fifth card.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/150" alt="Card Image 6">
    <div class="card-content">
      <h2>Card 6</h2>
      <p>This is the content of the sixth card.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/150" alt="Card Image 7">
    <div class="card-content">
      <h2>Card 7</h2>
      <p>This is the content of the seventh card.</p>
    </div>
  </div>
</div>

<?php include "template/footer.php"; ?>
