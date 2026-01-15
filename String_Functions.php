<!-- Tanhueco, Jean Kyle S. --> 
<!-- WD-201 -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #ffffff;
            color: #222;
            margin: 40px;
            }
        h2 {
            border-left: 5px solid #2c3e50;
            padding-left: 10px;
            color: #2c3e50;
            margin-top: 40px;
            }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 30px;
            }
        td {
            border: 1px solid #999;
            padding: 10px;
            font-size: 15px;
            }   
            tr:nth-child(even) {
            background-color: #f5f5f5;
            }
        td:first-child {
            font-weight: 600;
            width: 40%;
            background-color: #fafafa;
            }
        .mambo{
            float: right;
            margin: 0 0 10px 10px;
        }
        .mambo img{
            width: 50px;
            height: auto;
            border-radius: 6px;
        }
</style>
</head>
<body>
    <?php
    $skwela = "Holy Angel University(HAU) ";
    $lagyu = "Jean Tanhueco";
    $sample = "yeah finna do the other act later on lol, BUT IM LAZYYYYY";
    $k_on= "Please dont say you are lazy";
    $k__on= "Datte hontowa crazy";
    ?>
    <h2>Alternating the capitalization of letterz</h2>
    <table>
        <tr>
            <td>Lowercase</td>
            <td><?= strtolower($skwela); ?></td>
        </tr>
        <tr>
            <td>Lowercase</td>
            <td><?= strtoupper($skwela); ?></td>
        </tr>
        <tr>
            <td>Lowercase</td>
            <td><?= ucwords(strtolower($skwela)); ?></td>
        </tr>
    </table>
    <h2>Counting characters and words</h2>
    <table>
        <tr>
            <td>Number of characters</td>
            <td><?= strlen($lagyu);?></td>
        </tr>
        <tr>
            <td>Number of words</td>
            <td><?= str_word_count($lagyu);?></td>
        </tr>
    </table>
    <h2>Removing and REPLACING :< characters</h2>
    <table>
        <tr>
            <td>Remove whitespaced from left</td>
            <td><?= ltrim($sample);?></td>
        </tr>
        <tr>
            <td>Remove whitespaced from right</td>
            <td><?= rtrim($sample);?></td>
        </tr>
        <tr>
            <td>Remove whitespaced from left and right</td>
            <td><?= trim($sample);?></td>
        </tr>
        <tr>
            <td>String replace</td>
            <td><?= str_replace("akiyama","lazy", $k_on);?></td>
        </tr>
        <tr>
            <td>String ireplace</td>
            <td><?= str_ireplace("mio","crazy", $k__on);?></td>
        </tr>
        <tr>
            <td>String repeat</td>
            <td><?= str_repeat("NOPE!!",3);?></td>
        </tr>
    </table>
    <h2>Other Builtin Functions</h2>
    <table>
        <tr>
            <td>Substring</td>
            <td><?= substr($skwela, 0, 10); ?></td>
        </tr>
        <tr>
            <td>String Position</td>
            <td><?= strpos($skwela, "Angel"); ?></td>
        </tr>
        <tr>
            <td>String Length</td>
            <td><?= strlen($skwela); ?></td>
        </tr>
        <tr>
            <td>Reverse String</td>
            <td><?= strrev($skwela); ?></td>
        </tr>
        <tr>
            <td>Compare Strings</td>
            <td><?= strcmp("I HATE YOU", "iloveyou"); ?></td>
        </tr>
        <tr>
            <td>Shuffle String</td>
            <td><?= str_shuffle("coffee"); ?></td>
        </tr>
        <tr>
            <td>HTML Special Chars</td>
            <td><?= htmlspecialchars("<b>HAU</b>"); ?></td>
        </tr>
        <tr>
            <td>Chunk Split</td>
            <td><?= chunk_split("HOLYANGEL", 2, "-"); ?></td>
        </tr>
        <tr>
            <td>Word Wrap</td>
            <td><?= wordwrap("Holy Angel University School of Computing", 15, "<br>"); ?></td>
        </tr>
    </table>
    <div class="mambo"></div>
        <img src="https://m.media-amazon.com/images/I/61B965rDXyL._AC_UF894,1000_QL80_.jpg" alt="mambo">
    </div>
</body>
</html>
