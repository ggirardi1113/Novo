<form action="" method="POST">
    <table border=1>
        <tr>
            <th colspan=4><input type="text" id='visor' name="visor" value="<?php echo $_SESSION['visor'];
                if(isset($_POST['mult'])){
                    echo "X";
                }elseif(isset($_POST['div'])){
                    echo "/";
                }elseif(isset($_POST['soma'])){
                    echo "+";
                }elseif(isset($_POST['subtrai'])){
                    echo "-";
                }
            ?>"></th>
        </tr>
        <tr>
            <td><input type="submit" class="calc" name="num7" value="7"></td>
            <td><input type="submit" class="calc" name="num8" value="8"></td>
            <td><input type="submit" class="calc" name="num9" value="9"></td>
            <td><input type="submit" class="calc" name="div" value="/"></td>
        </tr>
        <tr>
            <td><input type="submit" class="calc" name="num4" value="4"></td>
            <td><input type="submit" class="calc" name="num5" value="5"></td>
            <td><input type="submit" class="calc" name="num6" value="6"></td>
            <td><input type="submit" class="calc" name="mult" value="X"></td>
        </tr>
        <tr>
            <td><input type="submit" class="calc" name="num1" value="1"></td>
            <td><input type="submit" class="calc" name="num2" value="2"></td>
            <td><input type="submit" class="calc" name="num3" value="3"></td>
            <td><input type="submit" class="calc" name="soma" value="+"></td>
        </tr>
        <tr>
            <td><input type="submit" class="calc" name="limpar" value="C"></td>
            <td><input type="submit" class="calc" name="num0" value="0"></td>
            <td><input type="submit" class="calc" name="igual" value="="></td>
            <td><input type="submit" class="calc" name="subtrai" value="-"></td>
        </tr>
    </table>
</form>