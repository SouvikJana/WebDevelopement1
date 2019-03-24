<html>
    <head>
        <title>Marks Insertion</title>
        <link rel="stylesheet" href="Css/Style_Home.css">
    </head>
    <body><div id="ib">
        <header id="sign">
            <a href="st.html">Sign in as a Teacher</a>&nbsp;&nbsp;&nbsp;
            <a href="rt.html">Register as a Teacher</a>
        </header>
        <hr>
        <h2>Result :</h2>
        <form method="post" action="Showinhome.php">
            <p1>Roll &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p1><input name="Roll" type="number" placeholder="xxxxxxxx"><br><br>
            <label>Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="Branch"><option value=0>*******(Select Branch)******</option><option value="CSE">CSE</option><option value="IT">IT</option><option value="ECE">ECE</option><option value="EE">EE</option>
            </select><p></p>
            <input type="submit" value="Show Result">           
        </form>
        <hr><?php
    include 'Connection.php';
    $Roll=$_POST['Roll'];
    $Branch=$_POST['Branch'];

    $Query="SELECT * FROM STUDENT WHERE ROLL='".$Roll."' AND Branch='".$Branch."'";

    $Result=mysqli_query($connection,$Query); if($Res=mysqli_fetch_assoc($Result))
    {
    ?>
        <table>
          <tr>
            <th>Roll</th>
            <th>Branch</th>
            <th>Name</th>
            <th>Marks1</th>
            <th>Marks2</th>
            <th>Marks3</th>
            </tr>
              <tr>
                <td><?php echo $Res['Roll'] ?></td>
                <td><?php echo $Res['Branch'] ?></td>
                <td><?php echo $Res['Name'] ?></td>
                <td><?php echo $Res['Marks1'] ?></td>
                <td><?php echo $Res['Marks2'] ?></td>
                <td><?php echo $Res['Marks3'] ?></td>
              </tr>
        </table>
        <?php
       }
        else
        {
            echo "<html><script>alert('No Such Entry Found')</script></html>";
            mysqli_close($connection);
            echo "<html><script>alert('Result Not Found')</script></html>";
        }
        
        ?>
        <hr>
        <footer>
            <p1>&copy; Designed By Souvik Jana</p1>
        </footer>
        </div>
    </body>
</html>
