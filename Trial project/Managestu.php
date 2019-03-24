<html>
    <head>
    <title>Teacher Signed-in</title>
    <link rel="stylesheet" href="Css/Style_Home.css">
    </head>
    <body><div id="ib">
        <header id="home">
            <a href="index.html">Home</a>
            <a href="Update.html">Update Marks</a>
        </header>
        <hr>
        <h1>Welcome Admin :</h1>
        <h2></h2>
        <form method="post" action="Managestu.php">
            <p>Roll&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Roll" type="text" placeholder="CSXXXXX"></p>
            <label>Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="Branch"><option value=0>*******(Select Branch)******</option><option value="CSE">CSE</option><option value="IT">IT</option><option value="ECE">ECE</option><option value="EE">EE</option>
            </select><p></p>
            <input type="submit" value="Show Result">
        </form>
        <hr>
        <h2>Result :</h2>
        <?php
        include 'Connection.php';

        $Roll=$_POST['Roll'];
        $Branch=$_POST['Branch'];

        $Query="SELECT * FROM STUDENT WHERE ROLL='".$Roll."' AND Branch='".$Branch."'";

       $Result=mysqli_query($connection,$Query); 
    if($Res=mysqli_fetch_assoc($Result))
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
            echo "<h4>NOT FOUND</h4>";
        }
        
        ?>
        <hr>
        <footer>
            <p1>&copy; Designed By Souvik Jana</p1>
        </footer></div>
    </body>
</html>