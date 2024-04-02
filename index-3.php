<!DOCTYPE html>
<html>
<head>
  <title>Pokemon Characters</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      
      background-image: url('http://wallpapercave.com/wp/tyzekos.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center bottom -900px;
      font-family: Julius Sans One;
    }
    
    h1 {
      text-align: center;
      color: #11191a;
    }
    
    .pokemon-card {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 1200px;
      height: 400px;
      opacity: 0;
      background-color: #e18181;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
      transition: opacity 0.5s ease-in-out;
    }

    .pokemon-card.active {
      opacity: 1; /* Show active card */
      z-index: 1; 
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .pokemon-name {
      font-weight: bold;
      color: #000000;
    }
    
    .pokemon-definition {
      color: #2a2323;
    }

    .pokemon-images {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }
    
    .pokemon-image {
      width: 200px;
      height: auto;
      margin-right: 200px;
      transition: opacity 0.3s ease-in-out, transform 0.5s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .pokemon-image:hover {
      opacity: 0.7;
      transform: rotate(360deg) scale(1.2);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

  </style>

<script>

  
  // Function to generate a random color
  function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  // Assign random background color to each Pokémon card
  window.addEventListener('DOMContentLoaded', function() {
    var pokemonCards = document.getElementsByClassName('pokemon-card');
    for (var i = 0; i < pokemonCards.length; i++) {
      var card = pokemonCards[i];
      var randomColor = getRandomColor();
      card.style.backgroundColor = randomColor;
    }
  });
</script>
</head>
<body>
 

  <h1></h1>
  
  <div class="pokemon-card active">
    <h2 class="pokemon-name">Pichu - Pikachu - Raichu</h2>
    <p class="pokemon-definition">Pichu, Pikachu, and Raichu are three different species of Pokémon that are related through their evolutionary chain. Pichu is a small, electric-type Pokémon that evolves into Pikachu when it reaches a certain level of experience and happiness. Pikachu is a larger, more powerful electric-type Pokémon that is known for its cute appearance and powerful electrical attacks. Finally, Raichu is the fully evolved form of Pikachu, and it is even more powerful and muscular than its predecessor. Raichu is known for its ability to generate massive amounts of electrical energy, which it can use to defeat its opponents in battle.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://vignette.wikia.nocookie.net/703-org-network/images/c/cb/Pichu_.png/revision/latest?cb=20150521041425" alt="Pikachu">
    <img class="pokemon-image" src="https://1.bp.blogspot.com/-vebFgy0dHCk/V1wrmTqMc5I/AAAAAAAAH00/O_9CLTyvoZAsPaz5_35jQjBtCiY_uGJeQCLcB/s1600/Pikatchu_Pokemon.png" alt="Pikachu1">
    <img class="pokemon-image" src="https://i0.wp.com/www.nerdunion.us/wp-content/uploads/2016/04/Raichu.png" alt="Pikachu3">
    </div>
</div>
  
  <div class="pokemon-card">
    <h2 class="pokemon-name">Charmander - Charmeleon - Charizard</h2>
    <p class="pokemon-definition">Charmander, Charmeleon, and Charizard are three different species of fire-type Pokémon that are related through their evolutionary chain. Charmander is a small, lizard-like Pokémon that has a flame burning at the tip of its tail. It evolves into Charmeleon when it reaches a certain level of experience, becoming a more powerful and aggressive fire-type Pokémon. Finally, Charmeleon evolves into Charizard, which is a large, dragon-like Pokémon that is known for its impressive wingspan and powerful fire-breathing abilities. Charizard is one of the most popular and iconic Pokémon in the franchise, and it is often featured as a powerful ally in battles against other trainers.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://www.pinclipart.com/picdir/big/185-1853229_charmander-clip-art.png" alt="Charizard">
    <img class="pokemon-image" src="https://webstockreview.net/images/pokemon-clipart-charmeleon-8.png" alt="Charizard1">
    <img class="pokemon-image" src="https://wallsdesk.com/wp-content/uploads/2016/09/Charizard-Wallpapers.png" alt="Charizard2">
    </div>
  </div>

  <div class="pokemon-card">
    <h2 class="pokemon-name">Bulbasaur - Ivysaur - Venasaur</h2>
    <p class="pokemon-definition">Bulbasaur, Ivysaur, and Venusaur are three different species of grass/poison-type Pokémon that are related through their evolutionary chain. Bulbasaur is a small, quadrupedal Pokémon with a bulb on its back that contains a seed. It evolves into Ivysaur when it reaches a certain level of experience, becoming a larger and more powerful grass/poison-type Pokémon. Finally, Ivysaur evolves into Venusaur, which is a large, dinosaur-like Pokémon that is known for its powerful vines and ability to manipulate the sun's energy. Venusaur is one of the most powerful grass-type Pokémon in the franchise, and it is often featured as a formidable opponent in battles against other trainers.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://i.pinimg.com/originals/d6/61/96/d66196beb60d306a966ea39ed11c2b3d.png" alt="Venasaur">
    <img class="pokemon-image" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8f9c3ba7-babf-4b8c-a4cd-7d54c0dd4ebb/dbzsg29-866f21b9-6476-43d5-bb2a-578d2c5858d0.png/v1/fill/w_1024,h_938,strp/02_____ivysaur_by_uraharataichou_dbzsg29-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTM4IiwicGF0aCI6IlwvZlwvOGY5YzNiYTctYmFiZi00YjhjLWE0Y2QtN2Q1NGMwZGQ0ZWJiXC9kYnpzZzI5LTg2NmYyMWI5LTY0NzYtNDNkNS1iYjJhLTU3OGQyYzU4NThkMC5wbmciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.0TUz7ghdCMLkXpIxkq9b3_SAJTj1aqQwOBdNjo-VjZM" alt="Venasaur1">
    <img class="pokemon-image" src="https://pre00.deviantart.net/4693/th/pre/f/2016/088/1/e/_3_venusaur__gotta_trace_em_all___by_shortyvoir-d9wya4x.png" alt="Venasaur2">
    </div>
  </div>

  <div class="pokemon-card">
    <h2 class="pokemon-name">Squirtle - Wartotle - Blastoise</h2>
    <p class="pokemon-definition">Squirtle, Wartortle, and Blastoise are three different species of water-type Pokémon that are related through their evolutionary chain. Squirtle is a small, turtle-like Pokémon that can shoot water from its mouth. It evolves into Wartortle when it reaches a certain level of experience, becoming a larger and more powerful water-type Pokémon. Finally, Wartortle evolves into Blastoise, which is a large, bipedal Pokémon that is known for its powerful cannons and ability to shoot pressurized water at its opponents. Blastoise is one of the most powerful water-type Pokémon in the franchise, and it is often featured as a fierce opponent in battles against other trainers.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://pre00.deviantart.net/bbb4/th/pre/f/2016/114/f/8/007_squirtle_by_tzblacktd-da00pu1.png" alt="Squirtle">
    <img class="pokemon-image" src="https://static.pokemonpets.com/images/monsters-images-800-800/8-Wartortle.png" alt="Squirtle1">
    <img class="pokemon-image" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/85a954df-43b3-4b66-9e8d-94fe01b0451f/da0e92c-ddcf95f9-cee1-4f75-8625-80633217f53c.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzg1YTk1NGRmLTQzYjMtNGI2Ni05ZThkLTk0ZmUwMWIwNDUxZlwvZGEwZTkyYy1kZGNmOTVmOS1jZWUxLTRmNzUtODYyNS04MDYzMzIxN2Y1M2MucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.H-NG8vE2XKKCpQuAGV8YkLu2iv1T-9z3Yxqynsupo0E" alt="Squirtle2">
    </div>
  </div>

  <div class="pokemon-card">
    <h2 class="pokemon-name">Pidgey - Pidgeotto - Pidgeot</h2>
    <p class="pokemon-definition">Pidgey, Pidgeotto, and Pidgeot are three different species of normal/flying-type Pokémon that are related through their evolutionary chain. Pidgey is a small, bird-like Pokémon that can fly short distances. It evolves into Pidgeotto when it reaches a certain level of experience, becoming a larger and more powerful normal/flying-type Pokémon. Finally, Pidgeotto evolves into Pidgeot, which is a large, majestic bird Pokémon that is known for its impressive wingspan and ability to fly at high speeds. Pidgeot is one of the most powerful flying-type Pokémon in the franchise, and it is often featured as an ally in battles against other trainers.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="http://static.pokemonpets.com/images/monsters-images-800-800/16-Pidgey.png" alt="Pidgey">
    <img class="pokemon-image" src="http://orig00.deviantart.net/24eb/f/2015/133/e/c/017_pidgeotto_by_rayo123000-d8t797z.png" alt="Pidgey1">
    <img class="pokemon-image" src="https://cdn.weasyl.com/~calicopikachu/submissions/1485754/6cd12badb18a9e79267173ca82810d9401b5721ebc68474724f5a6f717e1f095/calicopikachu-pidgeot.png" alt="Pidgey2">
    </div>
  </div>

  <div class="pokemon-card">
    <h2 class="pokemon-name">Cleffa - Clefairy - Clefable</h2>
    <p class="pokemon-definition">Cleffa, Clefairy, and Clefable are three different species of fairy-type Pokémon that are related through their evolutionary chain. Cleffa is a small, baby-like Pokémon with a star-shaped body. It evolves into Clefairy when it is exposed to a Moon Stone, becoming a larger and more humanoid fairy-type Pokémon. Finally, Clefairy evolves into Clefable, which is a larger and more powerful fairy-type Pokémon known for its mystical and enchanting abilities. Clefable is often associated with the moon and is known to be a gentle and friendly Pokémon. It is often sought after for its soothing presence and magical powers.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://vignette.wikia.nocookie.net/es.pokemon/images/4/49/Cleffa_(anime_SO).png/revision/latest?cb=20120906011227" alt="Cleffa">
    <img class="pokemon-image" src="https://www.pngplay.com/wp-content/uploads/10/Clefairy-Pokemon-PNG-Background.png" alt="Cleffa1">
    <img class="pokemon-image" src="https://wallpapercave.com/wp/wp2408443.png" alt="Cleffa2">
    </div>
  </div>

  <div class="pokemon-card">
    <h2 class="pokemon-name">Zubat - Golbat - Crobat</h2>
    <p class="pokemon-definition">Zubat, Golbat, and Crobat are three different species of poison/flying-type Pokémon that are related through their evolutionary chain. Zubat is a small, bat-like Pokémon that is known for its ability to use echolocation to navigate in the dark. It evolves into Golbat when it reaches a certain level of experience, becoming a larger and more powerful poison/flying-type Pokémon. Finally, Golbat can evolve into Crobat when it is leveled up with high friendship, which is a faster and more agile poison/flying-type Pokémon with unique abilities such as the ability to use sound waves to confuse its opponents. Crobat is often used by trainers who value speed and agility in battle, as it is one of the fastest Pokémon in the franchise.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://pokemoncardvalue.com/wp-content/basic_images/Zubat.png" alt="Golbat">
    <img class="pokemon-image" src="https://orig00.deviantart.net/df02/f/2016/291/1/c/golbat_by_porygon2z-dalg97q.png" alt="Golbat1">
    <img class="pokemon-image" src="http://vignette2.wikia.nocookie.net/pokemontowerdefense/images/4/4d/Crobat.png/revision/latest?cb=20111220154042" alt="Golbat2">
    </div>
  </div>
  
  <div class="pokemon-card">
    <h2 class="pokemon-name">Oddish - Gloom - Vileplume</h2>
    <p class="pokemon-definition">Oddish, Gloom, and Vileplume are three different species of grass/poison-type Pokémon that are related through their evolutionary chain. Oddish is a small, plant-like Pokémon with a radish-like body. It evolves into Gloom when it reaches a certain level of experience, becoming a larger and more mature grass/poison-type Pokémon. Finally, Gloom can evolve into Vileplume when exposed to a Leaf Stone, which is a vibrant and fully bloomed grass/poison-type Pokémon. Vileplume is known for its beautiful and aromatic flowers, which release pollen that can induce sleep or cause paralysis in its opponents. It is often sought after for its unique abilities and striking appearance.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://i.pinimg.com/originals/b4/09/0c/b4090c3df1a0f1dda0ed7c3134752b5d.png" alt="Oddish">
    <img class="pokemon-image" src="http://vignette1.wikia.nocookie.net/pokemon/images/5/57/044Gloom_OS_anime_2.png/revision/latest?cb=20150101075022" alt="Oddish1">
    <img class="pokemon-image" src="https://i.pinimg.com/originals/34/c0/3a/34c03a30d19acf5cc25604d8f78bf328.png" alt="Oddish2">
    </div>
  </div>

  <div class="pokemon-card">
    <h2 class="pokemon-name">Igglybuff - Jigglypuff - Wigglytuff</h2>
    <p class="pokemon-definition">Igglybuff, Jigglypuff, and Wigglytuff are three different species of normal/fairy-type Pokémon that are related through their evolutionary chain. Igglybuff is a small, balloon-like Pokémon that evolves into Jigglypuff when it reaches a certain level of experience, becoming a larger and more powerful normal/fairy-type Pokémon. Finally, Jigglypuff can evolve into Wigglytuff when it is exposed to a Moon Stone, which is a larger and more powerful normal/fairy-type Pokémon known for its beautiful singing voice and ability to put its opponents to sleep. Wigglytuff is often used by trainers who value its soothing presence and ability to calm even the most aggressive opponents. It is known for its friendly demeanor and is often sought after for its unique abilities and charming appearance.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="https://img00.deviantart.net/76de/i/2011/264/5/f/174___igglybuff_by_tails19950-d4aik8u.png" alt="Igglybuff">
    <img class="pokemon-image" src="http://th02.deviantart.net/fs71/PRE/i/2011/264/1/5/039___jigglypuff_by_tails19950-d4aijil.png" alt="Igglybuff1">
    <img class="pokemon-image" src="https://orig00.deviantart.net/c250/f/2016/178/6/3/040_wigglytuff_by_tzblacktd-da7v8al.png" alt="Igglybuff2">
    </div>
  </div>

  <div class="pokemon-card">
    <h2 class="pokemon-name">Caterpie - Metapod - Butterfree</h2>
    <p class="pokemon-definition">Caterpie, Metapod, and Butterfree are three different species of bug-type Pokémon that are related through their evolutionary chain. Caterpie is a small, worm-like Pokémon that evolves into Metapod when it reaches a certain level of experience. Metapod is a cocoon-like Pokémon that focuses on building up its defenses. Finally, Metapod evolves into Butterfree, which is a butterfly-like Pokémon with colorful wings. Butterfree is known for its ability to fly gracefully and for the powdery scales it releases from its wings, which can cause drowsiness in its opponents. It is often sought after for its beauty and its ability to learn powerful psychic-type moves.</p>
    <div class="pokemon-images">
    <img class="pokemon-image" src="http://orig01.deviantart.net/9db2/f/2015/083/3/9/010_caterpie_by_rayo123000-d8mxw4e.png" alt="Caterpie">
    <img class="pokemon-image" src="https://orig00.deviantart.net/cbef/f/2015/083/3/9/011_metapod_by_rayo123000-d8mxy25.png" alt="Caterpie1">
    <img class="pokemon-image" src="https://orig00.deviantart.net/1822/f/2016/204/d/8/vector__270___butterfree_by_dashiesparkle-d9atf5o.png" alt="Caterpie2">
    </div>
  </div>
  
  <script>
    var pokemonImages = document.querySelectorAll('.pokemon-image');

  pokemonImages.forEach(function(image) {
    // Add the rotating effect on hover
    image.addEventListener('mouseover', function() {
      this.style.transition = 'transform 0.5s ease-in-out';
      this.style.transform = 'rotate(360deg)';
    });

    // Remove the rotating effect on mouseout
    image.addEventListener('mouseout', function() {
      this.style.transition = 'transform 0.5s ease-in-out';
      this.style.transform = 'rotate(0deg)';
    });
  });
    
    const pokemonCards = document.querySelectorAll('.pokemon-card');
    let activeCardIndex = 0;

    function showActiveCard() {
      pokemonCards.forEach((card, index) => {
        if (index === activeCardIndex) {
          card.classList.add('active');
        } else {
          card.classList.remove('active');
        }
      });
    }

    function handleKeyPress(event) {
      if (event.key === 'ArrowRight') {
        activeCardIndex++;
        if (activeCardIndex >= pokemonCards.length) {
          activeCardIndex = 0;
        }
        showActiveCard();
      } else if (event.key === 'ArrowLeft') {
        activeCardIndex--;
        if (activeCardIndex < 0) {
          activeCardIndex = pokemonCards.length - 1;
        }
        showActiveCard();
      }
    }

    document.addEventListener('keydown', handleKeyPress);
    showActiveCard(); // Show the initial active card

    
  </script>

</body>
</html>
