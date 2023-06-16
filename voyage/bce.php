<?php
    $server="localhost";
    $user="root";
    $pswr="";
    $database="voyage";
    $mysqli=new mysqli($server,$user,$pswr,$database);

    if($mysqli->connect_errno){
        die("database");
    }
    
    $continent = $_POST['continent'];
    $pays = $_POST['pays'];
    $ville = $_POST['ville'];
    $site = $_POST['site'];

  
        $sql = "SELECT c.nomcon, p.nompay, v.nomvil, s.nomsit
                FROM continent c
                JOIN pays p ON c.idcon = p.idcon
                JOIN ville v ON p.idpay = v.idpay
                JOIN site s ON v.idvil = s.idvil
                WHERE c.nomcon LIKE ?
                AND p.nompay LIKE ?
                AND v.nomvil LIKE ?
                AND s.nomsit LIKE ?";

        $stmt = $mysqli->prepare($sql);
        
        if ($stmt) {
            $searchPatternContinent = "%" . $continent . "%";
            $searchPatternPays = "%" . $pays . "%";
            $searchPatternVille = "%" . $ville . "%";
            $searchPatternSite = "%" . $site . "%";
        
            $stmt->bind_param("ssss", $searchPatternContinent, $searchPatternPays, $searchPatternVille, $searchPatternSite);
            $stmt->execute();
        
            // Fetch the result
            $stmt->bind_result($nomcon, $nompay, $nomvil, $nomsit);
        
            $data = array(); // Create an array to store the data

            while ($stmt->fetch()) {
                // Process the fetched data
                // ...
                $data[] = array(
                    'nomcon' => $nomcon,
                    'nompay' => $nompay,
                    'nomvil' => $nomvil,
                    'nomsit' => $nomsit
                );
            }
        
            // Send the data back as JSON response
            echo json_encode($data);
            $stmt->close();
        } else {
            echo "Query preparation failed: " . $mysqli->error;
        }

    
    ?>