<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./voyage/style.css">
    
    <title>Algtime</title>
    <script src="js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/2b7efbf419.js" crossorigin="anonymous"></script>
	  
    

</head>
<body>
    
    <div class="home">
      <!--headre-->
        <header >
          <a href="#home">
            <img src="../photo/received_650214156261585.webp" alt=""></a> 
            <ul class="menu">
              <li class="LI_HOME"><a href="Home"><i class="fas fa-house-user"></i>Home</a></li>
              <li> <a href="#services">Services</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="../loginpage/index.html">Sign in</a></li>
            </ul>      
        </header>

        <!--page home-->
        <div class="flex">
            <nav>
                <h2>Etudiant</h2>
                <ul>
                    <li>Nom:Bachatal,Slimani</li>
                    <li>Prenom:Mohamed,Mohamed Amin</li>
                    <li>Specialite:Informatique</li>
                    <li>section:1</li>
                    <li>Group:4</li>
                    <li>Email:mohamed04bchtl@gmail.com</li>
                </ul>
                <p><a href="/project/formailaire/">Ajouter Ville</a></p>
            </nav>
            <div class="discription"> 
                 <h1>Lets make your besr experience </h1>
                 <p>So that if you are coming to Algeria or 
                  even your are a native citizen <br> here you 
                  can use the website… to discover recommended places , <br>
                  check services concerning the place you are in and so on ….</p>
                <div class="search-home">
                    <form action=""> 
                        <button>search</button>
                    </form>     
                </div> 
            </div> 
        </div>
        <div class="socialmedia">
          <button class="icn"><a href="https://www.facebook.com/SpotifyNAF/?brand_redir=6243987495"><i class="fab fa-facebook-square"></i></a></button>
          <button class="icn"><a href="https://www.instagram.com/spotify/"><i class="fab fa-instagram"></i></a></button>
          <button class="icn"><a href="https://twitter.com/spotify"><i class="fab fa-twitter"></i></a></button>
      </div>
    </div>

     <!--part recherche-->
    <div class="recherche">
        <h2 class="special-heading">Recherche</h2>
        <p>We are born to communicate</p>
        <form id="my_form">
            <div class="donne">
              <div class="inputs">
                <div class="input">
                  <label for="">continent</label>
                  <input type="text" name="continent" required>
                </div>
                <div class="input">
                  <label for="">pays</label>
                  <input type="text" name="pays" required>
                </div>
              </div>
              <div class="inputs">
                <div class="input">
                  <label for="">ville</label>
                  <input type="text" name="ville" required>
                </div>
                <div class="input">
                  <label for="">site</label>
                  <input type="text" name="site" required>
                </div>
              </div>
            </div>
            <button id="submit" type='submit'>submit</button>
          </form>
    </div>
    <div id='for_com'></div>
     <!--part result recherche-->
    <div class="rslt">
      <h2 class="special-headingrs">result</h2>
      <p>We are born to communicate</p>
      <ul>
        <li><a href="../villepage/index.html">Oran(algeria)</a></li>
        <li> <?php echo "hollo" ?></li>
      </ul>
    </div>

      <!-- Start Contact -->
      <div class="contact">
        <div class="container">
          <h2 class="special-heading">Contact</h2>
          <p>We are born to communicate</p>
          <div class="info">
            <p class="label">Feel free to drop us a line at:</p>
            <a href="" class="link">Algtime@mail.com</a>
            <div class="social">
              Find Us On Social Networks
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-youtube"></i>
            </div>
          </div>
          <div class="liste">
            <img src="https://searchvectorlogo.com/wp-content/uploads/2020/11/yassir-logo-vector.png" alt="">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPUAAADOCAMAAADR0rQ5AAAA+VBMVEX///8ALFH//v////39//8AKlC8xckBK1QAADgAKU8ACz4ADkEALFPd5eUADkTM0tXX4OPn7u8AIkshPFdZaXwAADsJLUsAG0toeogACDpAV20AHUmPmqYAAD0AEEAAI0quuL4AAEEAFUVOY3cAH0oAADF+jJ0AGER0g5IAKErw+PkAACW5wMcAACkADDwAHEwAFjugqrRne4crRmKDkZqisLkAEjtXZ37FzNOXprMXOFdgcH7O2N14iJMrQ2F5hI43TmQ9XXxVboeYtL6uwssQMkwAEE1BU2/X3NqCk5hPZHIAHUCJn65CWWx/ipNcdYUnP1QAAB0AG1OLXMGwAAAOq0lEQVR4nO2da2OiSBaGC0ERuQgY1KAIIgalbROjZrylx91NMplOO907///HbF0A8ZJMMqNJ49bzIUiByEtdzqmqQwUACoVCoVAoFAqFQqFQKBQKhUKhUCgUCoVCoVAoFAqFQkkVmQzLshwEbT76ZijHIJMBLNwEcm48qp61Wq2z6mick3Fucyeb5xkorlg3mcKN79kYvVYRFWZVnwTw8KnqLlaFwqWdZUIkns/CHUHwRO8XJ/jouzs0LAubL24wE3UoEonO8rZX8V1Ixb+89HQ+a7s38wk4qQxnWcBN/QqPMjgreIpoD89G9bHT6/Wc8XRUNcuXD+7lpTIbn45oaJ9AbuZKSLPuusOLnrwjTlOdaqnvKl2om8NtXtrhQDA3UD7z/tWZoz1/ojww88YsB05CNVh0PUZi7P5woKHS/kwpRkUCqLf989YLDyYlQDvsKDCjBcuckJRMzNYu2ddu2wUHpN5lm1p8l3dLk1eXW/VL/jrVomFODwyGsRtTmHsckS3nJiELVOejnUkOF2xYzFnwqzFMs/VmQS+flbyhnEir528aGGOOnkpZIXtiu7g+Z2qU5Z2LpQe1wTOF6w1bVK8wPELyqkj1F14iu421ag5Mm0JaZcP26YvOGPVNh6teCx1SvYoarS8C2csmVEOqyixIpQGDouuNcnO61SA/o1raVJ25v1y+690eigyrnfPuCETNWMjrVINcAX41ldx6emvHYL1SNVjy+cW73enhYIOa8KTt+BuvVe34/PDd7vWAjF1xvNGSYaezXpMkRuB5Rr9+UXXg8kruXe/3MLT08mZG4/GjC0PxZ8PhzHZXKvRFnlUNfrP55Xvd6uEI7MoAZOJd1KZpY7PdGqvwWWiLu5GpeC1nKNhSWdqnuq4zTfV9b/kAqJYVxAUcbdV54dMF8jsnnZmv+LXhMO+6zL/+fSXszWvHZyr1973lA9ArrEBmrRp2shXomrLA6d54sBcmeddAq/u6XfqPWdunetFg9FXqxk4dK8opVJ9zN95lC5XyaZ5HBVpCbTisBjOBv7m7aOxRrSpMVgjYlHloAyNuglkwbpbtFYfM2K7l4o3FrbtXNWNoXMpUj8/XXsZdk+F9Dbdoe+w1fx8s+T2qs0xBTZvqXjtWrflZxp+Sz/u8FHdQbDS2PbGJCPtri7QNoqntSfTxusZk8wFx0/aphl5YSdzO62kFlnA1baqDhoO3HBvkYds1D+9/r0ea5y6sbdUtnZHEgM2AdLHq4A0Hei7PVMZh6l7V5/J4s68BLZ3LZPkvaavW0HSV8AZ2sz2pGxfgZ1T3zjdUw1b/oYyGW9KW1WzwmQwAghEqq5FzuVe1EQyMTdVcCR5IYfeDBRcj5ImyMK8ZqfCSauEL6DQ36/VYRBYtbZ4ZGksJblis2nFhtq1LeDlWjUYLBUkq1+qgm2jNoD8WdAVGcqcfc+f/kPE3vNHyjPTnOKyi9byIUaw5ymumoDN6jR3n13YOPagzD5aAcvraMoxJ5qx+EyRvHqqWixGPLMuxxcfvOnRd4W5y4H/aZ3imPUmd2SIELQ7deO5cYiIvJQEZW7H83lYy6EEDLym373WXByYDVHTrLPI4vIs9JwRO+fNc2/S/OHCXhz3RWut97vHwwNaq+DuqvVqXl/rqxiDaZDyuf52tpttzHCyYWjCnKy0uvRObLFiM8DjKFa+XNnQEmqztTm+wgKsWsrDJn6dWMsBGiAwOq1d2zeQ2j6CavS1uMfMlRmin02btoi392vClMAQ0WKR9b0OvxS1hPw0FXL7TzR2Rb43KlfPSCXInrzPZ2tM0LABBmmexCdDjkOcFw0QuGLJmUUbCDbbKgdNqe7zudusBbtOhI9v5fZz+WA2IWj1vD8c75ZxTB7/URN27NJbjOH+Lueq1I59G3F0wMNvtUmc8kTWILD/2Brcmo7i67p8v62oi7KqnXXce0zjBtx/N6dx/+tw2DKOgWIbVfFAK+b550dsqAsGvi7tbLpNOp3Q/waJXH13Pz86qt6O6UySCN1ps2O8ajNPfnMXsM0gcbNK43bnAE7BcFAqFQqH81MC+82l5Vq8n9X0HLkkmdpugR5U8wMYHtJF55sThwrCjocoINc3ZH3uVOx3g8ECxXxP0wjI6Wmo2+nj0/1OaQqBZsKzpdoje+D0uuyy49u01V6Fq9gm91iNVOuFp1bLNlBGNdKkeWm6WILjGbSKSbG40hKyEj9SUfKi6J0pkNot0m2CxnrgShBd3VP/Eo2Mc0IpTMh2Zvb8ramziwOJuKWCN3reJHJb4uk/m8Iy411wUccKu6p+8ydMMrE34gbJ+3SjBB3Cm4yN4upY8j0GFqBb/UrXm/MwdygzQ8vhVS6G0mTuw3T7TmVg1odjEz8FexpKKyh7V8uA35epnDkh4m2pgXqLKcL6ONthRzWoXM7EidMuno5oNVoYoJse/d/O6ZwhMludPSTUH1N4kOe61R7WLG8dTUk3sUeLEt6lmNzYfxxvr9Q5vUh2vKfJXodKZDHSDj/hwjqh6P2ia4MNN+VtUL+J3TtdT1Buq8cG6h1PK5OxoUp9DofSL+krwXNezZ1UnQK+2hhfRondbcwtYIDKAy/1hzkrLTg9svzf2AaqXhqUoaLWIz4v9qpcGPOh1cQqviGJDbFYj1QCMZ0bN9mBvRfGgduO7FteBxecHfF3XGqJ5gpH/UNEFQagp9+pxJgLfonowLwnI65YKz6kuuK5vE/cti1bT8K1INVC/iNCiNToLTZ7Mb5gy4xnTKB/VUrmLLyysALizK5KEotegQ6Qr6lE827fVay1PNCa8tYRqLudAvtdIvb5DOw6OssPv5sOnkfXCeT0HxWAxKDYt6qR8x7/lmdzc0Gtuw+Ml4gX+OEob8DbV6jlOUfarDgPuantaM8fg4a+IuejSA+y+P1zHBbiKf4sfLsWb1jiXq997OBRV6m8FcB1e9TZvVY3i69hI9T2OxUBZmckA1eKzEmOfke8g+7XEFcEakEcNu/Pkt2zrWsb2PDBxoyjp86Oqzs56zhamsK1aflE1oV7ZsdfcD9x76yfmrUP7dkU6t2yY10w5vjJ6vwLV7aejqmayaCmfNXCPpP9j1SwOFYbFdwbWT4IlPfXKLUiqts3INeFITUfRi0dV/Sz/XDWDC41XXf8sC75imV0hQOdFqgVzfV9jtPCOVLbUIzj0iby2tzmQalAskHwdJFWT6l9Wcs+pnohYdfOoqrNMa7VamatV+NdctWbZw6gekTEqJRE1nQEOWUPp8o/9qgF4LEi4hB9V9ava8L+nemhvfwseK/b5sCZzL6hmpPNjq96YEdhrr/+Was4nZcZNBOZAYxYVMeSgfajqpKN/ONWaS9qH2kY4UjhIyRSQwf5Q1ckDh1Mtk2FUxtuwQUE4tI4t0wmqVkN9XuL6HNDCVONEVcvuxoQJuTos4cRgGjj89PRUazfZnXrNRfU6a7Mf3ZolDxy8Dc8mZwA59rGBOtCSjn3QE1Qdvr8oKYnOBwtyPlLN6Lcfbq+TB/656pgO6TT643US7GHXsOp+7lRVO8RgP3VAAiITOilo52RU23GLzQUFXLH5hM/LghIu9n493E29atLXaKggjFXiQKcSfm09la8aeDiwTJ5N+lWH5dmOX02EVuoKJ3nV9U9UUV3nm+Hk6HurBpG7gFSvY5BYNK65Vk2SYZehEKVEI/jrWXsuzMhHixhit07yEQUwOQYe8mwUsZliObAwUE4362SdHQ4kVEcaj6taJrkllLhkDBL68wvpIUarf6CFnvpx7qPBTTSdcUPO0dZfnoULXnn92XA47K5QWp2szttVyYyH/NSVJD4fvtWGej3hGOkqcV99bNBfnG/6e7BgXrPIPTKCIazfrePAhWCEgymSWFviojmoDsm8hvBjPsUp9Xm4ppcwnMfDnbk2iWeBqbZesb7ip+NcoWWR+JtvKsupo4YgCW45XsNVq35liP9WblUfcdJgPhSwaYNXPvQrfywYNhtixEYM0pkRp4vKOe6ELg0rSjC+4DsuWUqcsoouCZyu4um6Xqs0xOHFhAtf4Ov4DV3I1vL9877He2IZVoBMqHryqRleR2l+dnCSmX+IrpxfHlg1Bya5BItEvNkieQC7EqCYSCji2jbZSIkJeqPqfH4xyG30qAOnOrQL+ULBsJe3uUTTyWrJnyLfKe6/8nFgt7bb6YkUdju4itt3cjxvST4EgabKGm7mOPa5H6NQKBQKhUKhUCiUJPiteS6MlYyiSbiwT7LxLkXiJbHUw913w3mLhfk1Thwsn/RyFY2+5MwWYiUDcIs+3L7+H8H8xEwKNl6LkQXFph2maTOlWbMbzQYaPWl6FuQTPMesuU3Lah4ldOxd4cDZZcvt4E+TvhCmDSulBQe08Ve0rqGyUhEBB1rKVFYHvvFTv/fzKoLzmdz3g6RqKLSrhcMNGeBYOJQQveLZshz46VapgrTX7GlzBEzF2VB9BjM/fLURPQJS22ED11JQLo+U76lXPbMWwBGXqBmPVZddB/3fucdHVUazATPTNPFC8i0UA6t2lXHaVRebQ/SvEfJqUnWtAdXl/mtY+WukWs8bxmcHL3A4G86uFPM4gf3vBay6VXfujJ3h5S2KAoxUz9CC09pZ1fRhM+c8tDRZltGqjS3PftK9bx96zweADTxdsSzD1Z9gmV3Xa7+K67VjINWkNUOv6rSUHlj9uXrhgmmAA+O+OUAwooPWf++S9J51peKjWHXYmgHSmmm+eAGOMmX1fizzDt6O3BWa4ev2es5dEXBmrdsLAu1XEate3sFkBz4HpBp6LUYu3fZ60S5w6B8pAjmfV8EkX7GalmGiCH7DcO1ms11HKn2j2TTaDpq+QW3aXCzIqVad60RGaD56BHLnAoH+8xaXqy5LZ2j1OlAkqZ0iy007aNImqA7UNKvGIWKx6Y3rKrcxBxQLZLn1XqrtNYkpRrBs+J9CMxx5FtE7LuFiI2SfI8K5lLdmFAqFQqFQKBQKhUKhUCgUCoVCoVAoFAqFQqFQKJT/T/4HxqV+5kILm38AAAAASUVORK5CYII=" alt="">
            <img src="https://download.logo.wine/logo/Sheraton_Hotels_and_Resorts/Sheraton_Hotels_and_Resorts-Logo.wine.png" alt="">
            <img src="https://africa-public.food.jumia.com/assets/production/dz/images/vendors/a1ne.png?v=20170318214331" alt="">
            <img src="https://e7.pngegg.com/pngimages/777/214/png-clipart-charles-de-gaulle-airport-annaba-air-algerie-airplane-airline-airplane-text-trademark.png" alt="">
          </div>        
        </div>
        </div>
      </div>

       <!-- Start Footer -->
    <div class="footer">&copy; 2023 <span>Algtime</span> All Right Reserved</div>
    
    <script>
		
		
		$(document).ready(function(){
  
		$(document).on("submit","#my_form",(e)=>{
			e.preventDefault();
		
      
			const form_data = $(e.target).serialize();
      console.log(form_data);
			
			$.ajax({
				url:"./voyage/bce.php",
				method:"POST",
				data:form_data
				,success:(data, status)=>{
					const responseData = $.parseJSON(data);

			    const htmlContent = responseData.map(item => {
            const nomcon = item.nomcon;
            const nompay = item.nompay;
            const nomvil = item.nomvil;
            const nomsit = item.nomsit;

            return "<br><h4>Continent: " + nomcon + " Pays: " + nompay + " Ville: "+nomvil +" Site: "+nomsit+ " </h4><br> ";
          }).join('');
            console.log(responseData);

					
						$("#for_com").append(htmlContent);
					
					
				}
			})
      
		})
  })
	</script>
    </body>
    </html>
    
   
    
