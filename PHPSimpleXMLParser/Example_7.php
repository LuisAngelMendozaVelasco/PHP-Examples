<!-- Get attribute values - loop -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            $xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
            foreach($xml->children() as $books) {
                echo $books->title['lang'];
                echo "<br>";
            }
        ?>
    </body>
</html>