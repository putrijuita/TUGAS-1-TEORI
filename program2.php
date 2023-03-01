<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>Tugas PHP 2</title>
    
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <main>
        
            <h2><a href="../index.php">Tugas PHP 2</a></h2>

  
            <nav>
    
                <div class="dropdown hover">
      
                    <a href="index.php">Menu</a>
      
                    <ul>

                        <li><a href="program1.php">Harga Barang</a></li>
                        
                        <li><a href="program2.php">Genap Ganjil</a></li>

                    </ul>
    
                </div>
  
            </nav>
  
            <section>

                <label>Bilangan Bulat Genap Atau Ganjil!</label><br><br>

                <form>
                
                    <label for="genapganjil" class="label">Masukkan Nilai:</label>
                
                    <input type="number" id="genapganjil" name="genapganjil" placeholder="Masukan Nilai " class="input">

                    <br><br><br>
                
                    <button type="submit" name="Genap-Ganjil" class="button">Hitung</button>
              
                </form>

                <br>
              
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Genap-Ganjil"])){

							$bilangan = $_GET["genapganjil"];
					
                            $output = ($bilangan % 2 == 0) ? "$bilangan Adalah Bilangan Genap" : "$bilangan Adalah Bilangan Ganjil";	
							
                            echo $output;
							
                        }
                    
                    ?>

                </div>

            </section>
        
        </main>

    </body>
    
</html>