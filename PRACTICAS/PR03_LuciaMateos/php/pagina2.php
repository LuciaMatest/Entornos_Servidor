<?php
            $variable = implode($_GET);
            echo "<h2>Variable: </h2>";
            echo $variable;
            foreach ($_GET as $value) {
                if (is_numeric($value)) {
                  echo "La variable es numerica";
                  if (strpos($value, '.') != false) {
                    echo "La variable es de tipo FLOAT";
                  } else {
                    echo "La variable es de tipo ENTERO";
                  }
                } else {
                  echo gettype($value);
                }
            }
        ?>
