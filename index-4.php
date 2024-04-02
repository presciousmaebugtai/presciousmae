<!DOCTYPE html>
<html>
<head>
  <title>Background Click</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('http://wallpapercave.com/wp/tyzekos.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      font-family: 'Times New Roman', Times, serif;
    }
    
    .click-message {
      font-size: 35px;
      color: rgb(242, 33, 33);
      text-align: center;
      cursor: pointer;
    }
  </style>
  <script>
    // Function to redirect to another page
    function redirectToCharactersPage() {
      window.location.href = 'pokemon.html';
    }
  </script>
</head>
<body>
  <div class="click-message" onclick="redirectToCharactersPage()">Click to see Characters</div>
</body>
</html>


