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

                <label>Daftar Belanja</label><br><br>
                
                <form method="post">
		
					<label for="Beras">

						<input type="checkbox" name="barang[]" value="Beras" id="Beras"> Beras (Rp. 10.000 / Kg)<br>

					</label>

					<label for="Gula">

                		<input type="checkbox" name="barang[]" value="Gula" id="Gula"> Gula (Rp. 12.000 / Kg)<br>

					</label>

					<label for="MinyakGoreng">

                		<input type="checkbox" name="barang[]" value="Minyak Goreng" id="MinyakGoreng"> Minyak Goreng (Rp. 15.000 / Liter)<br>

					</label>

					<label for="Telur">

                		<input type="checkbox" name="barang[]" value="Telur" id="Telur"> Telur (Rp. 2.500 / Butir)<br>

					</label>

					<label for="Susu">

                		<input type="checkbox" name="barang[]" value="Susu" id="Susu"> Susu (Rp. 25.000 / Liter)<br>

					</label>

					<br>

                	<input type="submit" name="submit" value="Hitung Total">
	
            	</form>

                <br>
              
                <div class="Hasil">

                	<?php
	
						if(isset($_POST['submit'])) {
		
							$barang = $_POST['barang'];
		
							$total = 0;
		
							if(empty($barang)) {
		
								echo "Anda belum memilih barang.";
		
							} else {
		
								// echo "<h2>Daftar Belanja yang Dipilih:</h2>";
		
								echo "<table border='1'>";
		
								echo "<tr><th>Barang</th><th>Harga Satuan</th><th>Jumlah</th><th>Total</th></tr>";
		
								foreach($barang as $b) {
		
									echo "<tr>";
		
									echo "<td>" . $b . "</td>";
		
									switch($b) {
										
										case "Beras":
										
											$harga = 10000;
										
										break;
										
										case "Gula":
										
											$harga = 12000;
										
										break;
										
										case "Minyak Goreng":
										
											$harga = 15000;
										
										break;
										
										case "Telur":
										
											$harga = 2500;
										
										break;
										
										case "Susu":
										
											$harga = 25000;
										break;
										
										default:
										
											$harga = 0;
											
										break;
									}
									
									echo "<td>" . number_format($harga, 0, ",", ".") . "</td>";
		
									echo "<td>1</td>";
		
									$total += $harga;
		
									echo "<td>" . number_format($harga, 0, ",", ".") . "</td>";
		
									echo "</tr>";
		
								}
		
								echo "<tr><td colspan='3'>Total Belanja:</td><td>" . number_format($total, 0, ",", ".") . "</td></tr>";
		
								echo "</table>";
		
							}
	
						}
	
					?>

                </div>

            </section>
        
        </main>

    </body>
    
</html>